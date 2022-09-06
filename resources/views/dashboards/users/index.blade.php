

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
    <script nonce="3df8d935-da74-4345-a384-57ab4850aff0">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-dark">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PSCD</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <h4>Hi User: {{Auth::user()->name }}</h4>
                        </a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>



                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v2</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">CPU Traffic</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Likes</span>
                                    <span class="info-box-number">41,410</span>
                                </div>

                            </div>

                        </div>


                        <div class="clearfix hidden-md-up"></div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sales</span>
                                    <span class="info-box-number">760</span>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">New Members</span>
                                    <span class="info-box-number">2,000</span>
                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Monthly Recap Report</h5>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-wrench"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item">Something else here</a>
                                                <a class="dropdown-divider"></a>
                                                <a href="#" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                            </p>
                                            <div class="chart">

                                                <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <p class="text-center">
                                                <strong>Goal Completion</strong>
                                            </p>
                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-right"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-right"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                <span class="progress-text">Visit Premium Page</span>
                                                <span class="float-right"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 60%"></div>
                                                </div>
                                            </div>

                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-right"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 17%</span>
                                                <h5 class="description-header">$35,210.43</h5>
                                                <span class="description-text">TOTAL REVENUE</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span>
                                                <h5 class="description-header">$10,390.90</h5>
                                                <span class="description-text">TOTAL COST</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block border-right">
                                                <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span>
                                                <h5 class="description-header">$24,813.53</h5>
                                                <span class="description-text">TOTAL PROFIT</span>
                                            </div>

                                        </div>

                                        <div class="col-sm-3 col-6">
                                            <div class="description-block">
                                                <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span>
                                                <h5 class="description-header">1200</h5>
                                                <span class="description-text">GOAL COMPLETIONS</span>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Item</th>
                                            <th>Status</th>
                                            <th>Popularity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge badge-info">Processing</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR1848</a></td>
                                            <td>Samsung Smart TV</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR7429</a></td>
                                            <td>iPhone 6 Plus</td>
                                            <td><span class="badge badge-danger">Delivered</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                            <td>Call of Duty IV</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>


        </div>

    </div>
    </section>

    </div>


    <aside class="control-sidebar control-sidebar-dark">

    </aside>


    <footer class="main-footer">
        <strong>Copyright &copy; 2022 <a href="/">PSCD</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
    </div>



    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="dist/js/adminlte.js?v=3.2.0"></script>


    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="dist/js/demo.js"></script>

    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>
