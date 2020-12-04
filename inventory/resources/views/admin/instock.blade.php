@extends('admin.header')
@section('content')
<div class="content mt-3">
 <div class="animated fadeIn">
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
         <th>Date Added</th>
        </tr>
       </thead>
       <tbody>
        @forelse($availableGoods as $availableGood)
        <tr>
         <td>{{ucwords($availableGood->name)}}</td>
         <td>{{ucwords($availableGood->category->name)}}</td>
         <td>{{$availableGood->quantity}}</td>
         <td>{{$availableGood->created_at}}</td>
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