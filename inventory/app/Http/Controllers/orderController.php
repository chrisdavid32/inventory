<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class orderController extends Controller
{
    public function order()
    {
        $productcategory = Category::all();
        $productorder = Product::all();
        return view('admin.order', compact('productcategory', 'productorder'));
    }

    public function pendingOrder()
    {
        $pending_order = Order::whereStatus('pending')->get();
        return view('admin.pending', compact('pending_order'));
    }

    public function deliverOrder()
    {
        $deliver = Order::whereStatus('approved')->get();
        return view('admin.delivery', compact('deliver'));
    }

    public function goodsold()
    {
        $soldout = Order::whereStatus('approved')->get();
        return view('admin.sold', compact('soldout'));
    }

    public function goodsInstock()
    {
        $availableGoods = Product::all();
        return view('admin.instock', compact('availableGoods'));
    }

    public function storeOrder()
    {
        $data = request()->validate([
            'category_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required|numeric|min:1',
        ]);
        $quantity = request()->quantity;
        $product_detail = Product::whereId(request()->product_id)->first();
        $currentQuantity = $product_detail->quantity;
        if ($currentQuantity < $quantity) {

            return redirect('order')->with('error', 'Quantity is greater than Available Product in Stock !');
        } else {
            $newBalance = $currentQuantity - $quantity;
            $product_detail->update(
                [
                    'quantity' => $newBalance
                ]
            );
            $data['status'] = 'pending';
            Order::create($data);
            return redirect('order')->with('success', 'Order placed Successfully');
        }
    }

    public function revertOrder($id)
    {
        $cancel = Order::find($id);
        $cancel->delete();
        return redirect('pending')->with('success', 'Order cancel Successfully');
    }

    public function approved($id)
    {
        $approve = Order::find($id);
        $approve->update([
            'status' => 'Approved'

        ]);
        return redirect('pending')->with('update', 'Approved for Deliver');
    }


    public function disapproved($id)
    {
        $approved = Order::find($id);
        $approved->update([
            'status' => 'pending'
        ]);
        return redirect('deliver')->with('success', 'Approved was Cancel Successfully');
    }
}
