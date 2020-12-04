<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inventory System</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-icon.html">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/flag-icon.min.css">
  <link rel="stylesheet" href="css/cs-skin-elastic.css">
  <link rel="stylesheet" href="css/lib/datatable/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="scss/style.css">
  <link href="css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt="Logo"></a>
        <a class="navbar-brand hidden" href="index-2.html"><img src="images/logo2.png" alt="Logo"></a>
      </div>
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="administrator"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
          </li>

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-product-hunt"></i>Products</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-list-alt"></i><a href="catergories">Add Product Cartegory</a></li>
              <li><i class="menu-icon fa fa-plus"></i><a href="product">Add Product</a></li>
              <li><i class="menu-icon fa fa-street-view"></i><a href="productlist">View Product</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Orders</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-cart-plus"></i><a href="order">Place Order</a></li>
              <li><i class="menu-icon fa fa-clock-o"></i><a href="pending">Pending Order</a></li>
              <li><i class="menu-icon fa fa-truck"></i><a href="deliver">Order Delivery</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-history"></i>Record</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="menu-icon fa fa-houzz"></i><a href="instock">Goods instock</a></li>
              <li><i class="menu-icon fa fa-product-hunt"></i><a href="Goodsout">Goods Sold</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </aside>
  <div id="right-panel" class="right-panel">
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">
          <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
          <div class="header-left">
            <button class="search-trigger"><i class="fa fa-search"></i></button>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
              </form>
            </div>
            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger"></span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red"></p>
                <a class="dropdown-item media bg-flat-color-1" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>

                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Logout
            </a>
            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="/logout"><i class="fa fa-power -off"></i>Logout</a>
            </div>
          </div>

        </div>
      </div>
    </header>
    @yield('content')

    <script src="js/vendor/jquery-2.1.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/lib/chart-js/Chart.bundle.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/widgets.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script src="js/lib/data-table/datatables.min.js"></script>
    <script src="js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="js/lib/data-table/jszip.min.js"></script>
    <script src="js/lib/data-table/pdfmake.min.js"></script>
    <script src="js/lib/data-table/vfs_fonts.js"></script>
    <script src="js/lib/data-table/buttons.html5.min.js"></script>
    <script src="js/lib/data-table/buttons.print.min.js"></script>
    <script src="js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="js/lib/data-table/datatables-init.js"></script>
    <script>
      (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: null,
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#1de9b6',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#1de9b6', '#03a9f5'],
          normalizeFunction: 'polynomial'
        });
      })(jQuery);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>