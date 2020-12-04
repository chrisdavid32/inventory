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
     <div class="card-header"><strong>Delivery Order</strong><small> List</small></div>
     <div class="card-body card-block">
      <table id="bootstrap-data-table" class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Product Name</th>
         <th>Catergory Name</th>
         <th>Quantity</th>
         <th>Status</th>
         <th>Date Approved</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
        @forelse($deliver as $delivery)
        <tr>
         <td>{{ucwords($delivery->category->name)}}</td>
         <td>{{ucwords($delivery->product->name)}}</td>
         <td>{{$delivery->quantity}}</td>
         <td>{{ucwords($delivery->status)}}</td>
         <td>{{$delivery->updated_at}}</td>
         <td style="color: red;">
          <button class="btn btn-danger"><a href="ordercancel/{{$delivery->id}}" title="Cancel {{ucwords($delivery->product->name)}}">Revert Approval
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