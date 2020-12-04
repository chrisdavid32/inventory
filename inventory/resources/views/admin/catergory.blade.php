@extends('admin.header')
@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">


    <div class="row">
      <div class="col-lg-5">
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
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Add Product Catergory</strong>
          </div>
          <div class="card-body">
            <div id="pay-invoice">
              <div class="card-body">
                <form action="/addcart" method="post">
                  <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Category Name</label>
                    <input id="cc-pament" name="name" type="text" class="form-control">
                  </div>
                  @if($errors->first('name'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('name')}}</div>
                  @endif
                  <div class="form-group">
                    <label for="cc-number" class="control-label mb-1">Category Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                  </div>
                  @if($errors->first('description'))
                  <div class="alert alert-danger" role="alert">{{$errors->first('description')}}</div>
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
        <div class="card">
          <div class="card-header"><strong>Catergories</strong><small> List</small></div>
          <div class="card-body card-block">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Catergory Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse($category as $cats)
                @php
                $sn = 1;
                @endphp
                <tr>
                  <td>{{$sn++}}</td>
                  <td>{{ucwords($cats->name)}}</td>
                  <td><button class="btn btn-danger"><a href="deletecart/{{$cats->id}}" title="Delete {{ucwords($cats->name)}}">Delete
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