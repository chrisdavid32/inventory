@extends('admin.header')
@section('content')
<div class="content mt-3">
 <div class="animated fadeIn">
  @if(session()->has('success'))
  <div class="col-sm-12">
   <div class="alert  alert-success alert-dismissible fade show" role="alert">
    <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;{{session()->get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
  </div>
  @endif
  @if(session()->has('error'))
  <div class="col-sm-12">
   <div class="alert  alert-danger alert-dismissible fade show" role="alert">
    <span class="badge badge-pill badge-danger">error</span>&nbsp;&nbsp;{{session()->get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
  </div>
  @endif
  <div class="row">
   <div class="col-lg-6">
    <div class="card">
     <div class="card-header">
      <strong class="card-title">Place order </strong>
     </div>
     <div class="card-body">
      <div id="pay-invoice">
       <div class="card-body">
        <form action="/saveorder" method="post">
         <div class="form-group">
          <label for="cc-number" class="control-label mb-1">Product Category</label>
          <select class="form-control" name="category_id" id="">
           @foreach($productcategory as $category)
           <option value="{{$category->id}}">{{ ucwords($category->name)}}</option>
           @endforeach
          </select>
         </div>
         @if($errors->first('category_id'))
         <div class="alert alert-danger" role="alert">{{$errors->first('category_id')}}</div>
         @endif
         <div class="form-group">
          <label for="cc-payment" class="control-label mb-1">Product Name</label>
          <select class="form-control" name="product_id" id="">
           @foreach($productorder as $product)
           <option value="{{$product->id}}">{{strtoupper($product->name)}}&nbsp; &nbsp; &nbsp;<span class="count bg-danger">(Quantity:{{$product->quantity}})</span></option>
           @endforeach
          </select>
         </div>
         @if($errors->first('product_id'))
         <div class="alert alert-danger" role="alert">{{$errors->first('product_id')}}</div>
         @endif
         <div class="form-group">
          <label for="cc-payment" class="control-label mb-1">Quantity</label>
          <input id="cc-pament" name="quantity" type="number" class="form-control">
         </div>
         @if($errors->first('quantity'))
         <div class="alert alert-danger" role="alert">{{$errors->first('quantity')}}</div>
         @endif
         <div>
          <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
           <i class="fa fa-save"></i>&nbsp;
           Place Order</button>
         </div>
         @csrf
        </form>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection