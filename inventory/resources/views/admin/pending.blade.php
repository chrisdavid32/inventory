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
    @if(session()->has('update'))
    <div class="col-sm-12">
      <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-success">Success</span>&nbsp;&nbsp;{{session()->get('update')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    @endif
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header"><strong>Pending Order</strong><small> List</small></div>
          <div class="card-body card-block">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Catergory Name</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Time Orders</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($pending_order as $pendingOrders)
                <tr>
                  <td>{{ucwords($pendingOrders->category->name)}}</td>
                  <td>{{ucwords($pendingOrders->product->name)}}</td>
                  <td>{{$pendingOrders->quantity}}</td>
                  <td>{{ucwords($pendingOrders->status)}}</td>
                  <td>{{$pendingOrders->created_at->diffForHumans()}}</td>
                  <td style="color: red;"><button class="btn btn-primary"><a href="approve/{{$pendingOrders->id}}" title="Edit {{ucwords($pendingOrders->product->name)}}">Approve Order
                      </a>
                    </button> &nbsp; &nbsp;&nbsp;&nbsp;

                    <button class="btn btn-danger"><a href="cancel/{{$pendingOrders->id}}" title="Cancel {{ucwords($pendingOrders->product->name)}}">Cancel Order
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