@extends('admin.header')
@section('content')
<div class="content mt-3">
 <div class="animated fadeIn">
  <div class="row">
   <div class="col-lg-12">
    <div class="card">
     <div class="card-header"><strong>Goods Sold</strong><small> List</small></div>
     <div class="card-body card-block">
      <table id="bootstrap-data-table" class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Product Name</th>
         <th>Catergory Name</th>
         <th>Quantity</th>
         <th>Status</th>
         <th>Date Deliver</th>
        </tr>
       </thead>
       <tbody>
        @forelse($soldout as $soldouts)
        <tr>
         <td>{{ucwords($soldouts->category->name)}}</td>
         <td>{{ucwords($soldouts->product->name)}}</td>
         <td>{{$soldouts->quantity}}</td>
         <td>{{ucwords($soldouts->status)}}</td>
         <td>{{$soldouts->updated_at}}</td>
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