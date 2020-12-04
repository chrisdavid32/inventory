@extends('admin.header')
@section('content')

<div class="content mt-3">
  <div class="col-sm-6 col-lg-4">
    <div class="card text-white bg-flat-color-1">
      <div class="card-body pb-0">
        <p class="text-light">Number of Product</p>
        <h4 class="mb-0">
          <span class="count">{{$productList->count()}}</span>
        </h4>
        <div class="chart-wrapper px-0" style="height:70px;" height="70" />
        <canvas id="widgetChart1"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-sm-6 col-lg-4">
  <div class="card text-white bg-flat-color-5">
    <div class="card-body pb-0">
      <p class="text-light">Numbers of Goods Sold</p>
      <h4 class="mb-0">
        <span class="count">{{$goodsSold->count()}}</span>
      </h4>
      <div class="chart-wrapper px-0" style="height:70px;" height="70" />
      <canvas id="widgetChart2"></canvas>
    </div>
  </div>
</div>
</div>

<div class="col-sm-6 col-lg-4">
  <div class="card text-white bg-flat-color-3">
    <div class="card-body pb-0">
      <p class="text-light">Goods in Delivery Queue</p>
      <h4 class="mb-0">
        <span class="count">{{$pendingGoods->count()}}</span>
      </h4>
    </div>
    <div class="chart-wrapper px-0" style="height:70px;" height="70" />
    <canvas id="widgetChart3"></canvas>
  </div>
</div>
</div>
</div>
<div class="col-xl-6">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <h4 class="card-title mb-0">Traffic</h4>
          <div class="small text-muted">October 2017</div>
        </div>

        <div class="col-sm-8 hidden-sm-down">
          <button type="button" class="btn btn-primary float-right bg-flat-color-1"><i class="fa fa-cloud-download"></i></button>
          <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
              <label class="btn btn-outline-secondary">
                <input type="radio" name="options" id="option1"> Day
              </label>
              <label class="btn btn-outline-secondary active">
                <input type="radio" name="options" id="option2" checked=""> Month
              </label>
              <label class="btn btn-outline-secondary">
                <input type="radio" name="options" id="option3"> Year
              </label>
            </div>
          </div>
        </div>
      </div>
      <div class="chart-wrapper mt-4" />
      <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
    </div>
  </div>

</div>
</div>
<div class="col-xl-3 col-lg-6">
  <section class="card">
    <div class="twt-feed blue-bg">
      <div class="corner-ribon black-ribon">
        <i class="fa fa-twitter"></i>
      </div>
      <div class="fa fa-twitter wtt-mark"></div>
      <div class="media">
        <a href="#">
          <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
        </a>
        <div class="media-body">
          <h2 class="text-white display-6">Jim Doe</h2>
          <p class="text-light">Project Manager</p>
        </div>
      </div>
    </div>
    <div class="weather-category twt-category">
      <ul>
        <li class="active">
          <h5>750</h5>
          Tweets
        </li>
        <li>
          <h5>865</h5>
          Following
        </li>
        <li>
          <h5>3645</h5>
          Followers
        </li>
      </ul>
    </div>
    <div class="twt-write col-sm-12">
      <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
    </div>
    <footer class="twt-footer">
      <a href="#"><i class="fa fa-camera"></i></a>
      <a href="#"><i class="fa fa-map-marker"></i></a>
      New Castle, UK
      <span class="pull-right">
        32
      </span>
    </footer>
  </section>
</div>




</div>
</div>
@endsection