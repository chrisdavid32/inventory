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
      <div class="col-lg-12">
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
                  <th>Date Added</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($productList as $productlists)
                <tr>
                  <td>{{ucwords($productlists->name)}}</td>
                  <td>{{ucwords($productlists->category->name)}}</td>
                  <td>{{$productlists->quantity}}</td>
                  <td><img style="height: 40px; width:50px; " src="{{asset($productlists->image)}}" alt=""></td>
                  <td>{{$productlists->created_at}}</td>
                  <td style="color: red;"> <button class="btn btn-primary"><a href="edits/{{$productlists->id}}" title="Edit {{ucwords($productlists->name)}}">Edit
                      </a>
                    </button>
                    <button class="btn btn-danger"><a href="deleteproductlist/{{$productlists->id}}" title="Delete {{ucwords($productlists->name)}}">Delete
                      </a>
                    </button>
                  </td>
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