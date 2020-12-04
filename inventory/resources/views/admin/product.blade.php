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
    @if(session()->has('delete'))
    <div class="col-sm-12">
      <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;{{session()->get('delete')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="col-lg-5">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Add New Product </strong>
          </div>
          <div class="card-body">
            <div id="pay-invoice">
              <div class="card-body">
                <form action="/store" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Product Category</label>
                    <select class="form-control" name="category_id" id="">
                      @foreach($products as $product)
                      <option value="{{$product->id}}">{{ ucwords($product->name)}}</option>
                      @endforeach
                    </select>
                  </div>
                  @if($errors->first('category_id'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('category_id')}}</div>
                  @endif
                  <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Product Name</label>
                    <input id="cc-pament" name="name" type="text" class="form-control">
                  </div>
                  @if($errors->first('name'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('name')}}</div>
                  @endif
                  <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Quantity</label>
                    <input id="cc-pament" name="quantity" type="number" class="form-control">
                  </div>
                  @if($errors->first('quantity'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('quantity')}}</div>
                  @endif
                  <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Product Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                  </div>
                  @if($errors->first('description'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('description')}}</div>
                  @endif
                  <div class="row form-group">
                    <div class="col col-md-3"><label for="file-input" class=" form-control-label">Product Image</label></div>
                    <div class="col-12 col-md-9"><input type="file" id="file-input" name="image" class="form-control-file"></div>
                  </div>
                  @if($errors->first('image'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('image')}}</div>
                  @endif
                  <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                      <i class="fa fa-save"></i>&nbsp;
                      Save</button>
                  </div>
                  @csrf
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card">
          <div class="card-header"><strong>Catergories</strong><small> List</small></div>
          <div class="card-body card-block">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Catergory Name</th>
                  <th>Quantity</th>
                  <th>image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($productlist as $productlists)
                <tr>
                  <td>{{ucwords($productlists->name)}}</td>
                  <td>{{ucwords($productlists->category->name)}}</td>
                  <td>{{$productlists->quantity}}</td>
                  <td><img style="height: 40px; width:50px; " src="{{asset($productlists->image)}}" alt=""></td>
                  <td><button class="btn btn-danger"><a href="deleteproduct/{{$productlists->id}}" title="Delete {{ucwords($productlists->name)}}">Delete
                      </a>
                    </button></td>
                </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection