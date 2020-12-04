<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Http\Requests\SaveCategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Str;

class adminController extends Controller
{
    public function index()
    {
        $productList = Product::all();
        $goodsSold = Order::whereStatus('Approved')->get();
        $pendingGoods = Order::whereStatus('pending')->get();
        $CheckQuantity = Order::whereQuantity('<', 5)->get();

        return view('admin.dashboard', compact('productList', 'goodsSold', 'pendingGoods',));
    }

    public function quantity()
    {
        $CheckQuantity = Order::whereQuantity('<', 5)->get();
        return view('admin.header', compact('CheckQuantity'));
    }

    public function cert()
    {
        $category = Category::all();
        return view('admin.catergory', compact('category'));
    }


    public function list()
    {
        $productList = Product::all();
        return view('admin.allproduct', compact('productList'));
    }



    public function addProduct()
    {
        $products = Category::all();
        $productlist = Product::all();
        return view('admin.product', compact('products', 'productlist'));
    }


    public function storeCategory(SaveCategoryRequest $request)
    {
        $data = request()->only(['name', 'description']);
        $catname = $request->name;
        Category::create($data);
        return redirect('catergories')->with('success', 'Category ' . strtoupper($catname) . ' added successfully');
    }


    public function destroy($id)
    {
        $delcat = Category::find($id);
        $catname = $delcat['name'];
        $delcat->delete();
        return redirect('catergories')->with('delete', 'Category ' . $catname . ' was Deleted successfully');
    }


    public function storeProduct(SaveProductRequest $request)
    {
        $data = $request->only(['name', 'category_id', 'quantity', 'description']);
        $file = $request->file('image');
        $fileName = time() . '_' . Str::slug($file->getClientOriginalName());
        $filePath = $file->storeAs('uploads', $fileName, 'public');
        $data['image'] = "uploads/" . $fileName;
        $productname = $request->name;
        Product::create($data);
        return redirect('product')->with('success', 'Product ' . strtoupper($productname) . ' was added successfully ');
    }


    public function destroyProduct($id)
    {
        $deleteProducts = Product::find($id);
        $proname = $deleteProducts['name'];
        $image = '' . $deleteProducts->image;
        //dd($image);
        if (file_exists($image)) {
            $deleteProducts->delete();
            return redirect('product')->with('delete', 'Product ' . $proname . ' was deleted successfully');
        }
    }

    public function destroyProductList($id)
    {
        $deleteProducts = Product::find($id);
        $proname = $deleteProducts['name'];
        $image = '' . $deleteProducts->image;
        //dd($image);
        if (file_exists($image)) {
            $deleteProducts->delete();
            return redirect('productlist')->with('delete', 'Product ' . $proname . ' was deleted successfully');
        }
    }

    public function editproduct($id)
    {
        $productEdit = Product::where('id', $id)->first();
        return view('admin.edit', compact('productEdit'));
    }

    public function updateproduct(Request $request)
    {
        $products = Product::where('id', $request->id)->first();
        $products->quantity = $request->quantity;
        $products->save();
        return redirect('productlist')->with('update', 'product updated Successfully');
    }
}
