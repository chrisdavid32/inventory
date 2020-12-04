@extends('admin.header')
@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-lg-3">
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <strong class="card-title"></strong>
          </div>
          <div class="card-body">
            <div id="pay-invoice">
              <div class="card-body">
                <form action="/update" method="post">
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
                      Save</button>
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