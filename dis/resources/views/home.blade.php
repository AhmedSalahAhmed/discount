<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('temp/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('temp/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">


    <!-- Morris Charts CSS -->
    <link href="{{ asset('temp/vendor/morrisjs/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('temp/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    
    <!-- Custom CSS -->
    <link href="{{ asset('temp/dist/css/sb-admin-2.css') }}" rel="stylesheet">                       

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        body{
            text-align: right;
            direction: rtl;
        }
        .page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
}
        #side-menu{
            padding-right: 0;
        }
        #side-menu ul{
            padding-right: 0;
        }
        .brand{
            color: #eee;
        }
        .sidebar .nav-second-level li a {
            padding-right: 37px;
        }
        .sidebar .nav-third-level li a {
            padding-right: 52px !important;
        }
        .d-rtl{
            direction: rtl;
        }
        .d-ltr{
            direction: ltr;
        }
        .sidebar .arrow{
            float: left;
        }
        .navbar-nav.navbar-top-links .dropdown-user{
            left: 0;
            right: auto;
        }
        .dropdown-menu{
            text-align: right;
        }
        .navbar-expand-md .navbar-nav .dropdown-menu-right{
            right: auto;
            left: 0;
        }
        .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link{
            color: #337ab7;
        }
        .table-responsive {
            min-height: .01%;
            overflow-x: auto;
        }
        .timeline > li > .timeline-panel{
            width: 44%;
        }
    </style>
</head>

<body>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!DOCTYPE html>

<div id="wrapper">

    <!-- Navigation -->
    <header class="align-items-start app-header flex-column flex-md-row navbar navbar-expand-md bg-dark fixed-top">
        <div class="align-items-baseline d-flex flex-row navbar-brand p-lg-3 pl-3 pr-3 pt-3">
            <a class="brand" href="#" style="color: #eee;">Discount</a>
            <button class="collapsed ml-auto navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#side-menu-wrapper" aria-controls="side-menu" aria-expanded="false"
                    aria-label="Toggle navigation" >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        
        <ul class="nav navbar-nav  mr-md-auto flex-row navbar-top-links ">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-messages dropdown-menu-right">
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-left text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-left text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="float-left text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item see-more text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-tasks fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-tasks">
                    <a class="dropdown-item" href="#">
                        <div>
                            <p>
                                <strong>Task 1</strong>
                                <span class="float-left text-muted">40% Complete</span>
                            </p>
                            <div class="progress active">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                     role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <p>
                                <strong>Task 2</strong>
                                <span class="float-left text-muted">20% Complete</span>
                            </p>
                            <div class="progress active">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                     role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <p>
                                <strong>Task 3</strong>
                                <span class="float-left text-muted">60% Complete</span>
                            </p>
                            <div class="progress active">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                     role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <p>
                                <strong>Task 4</strong>
                                <span class="float-left text-muted">80% Complete</span>
                            </p>
                            <div class="progress active">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                     role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                     style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item see-more text-center" href="#">
                        <strong>See All Tasks</strong>
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-alerts">
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> New Comment
                            <span class="float-left text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                            <span class="float-left text-muted small">12 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-envelope fa-fw"></i> Message Sent
                            <span class="float-left text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-tasks fa-fw"></i> New Task
                            <span class="float-left text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div>
                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                            <span class="float-left text-muted small">4 minutes ago</span>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item see-more text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
            
            </li> 
            
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </ul>
    </header>
    <div class="d-md-flex">
        <div class="sidebar bg-dark" role="navigation">
            <div class="sidebar-nav collapse navbar-collapse show " id="side-menu-wrapper">
                <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form d-ltr">
                            <span class="input-group-btn">
                                <button class="btn btn-white" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            <input type="text" class="form-control d-rtl" placeholder="Search...">
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> ????????????????????</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('department.index') }}"><i class="fa fa-table fa-fw"></i> ??????????????</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('store-crud.index') }}"><i class="fa fa-edit fa-fw"></i> ??????????????</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-edit fa-fw"></i> ????????????</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="fa fa-edit fa-fw"></i> ????????????</a>
                    </li>
                   
                   
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>

        <div id="page-wrapper" class="p-4">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">???????? ????????????</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-primary card-inverse">
                        <div class="card-header card-primary">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-9 text-left">
                                    <div class="huge">26</div>
                                    <div>??????</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-default">
                            <a href="{{ route('department.index') }}">
                                <span class="float-sm-left">??????&nbsp;????????????????</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-green card-inverse">
                        <div class="card-header card-green">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-9 text-left">
                                    <div class="huge">12</div>
                                    <div>????????</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-green">
                            <a href="{{ route('store-crud.index') }}">
                                <span class="float-sm-left">??????&nbsp;????????????????</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-yellow card-inverse">
                        <div class="card-header card-yellow">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-9 text-left">
                                    <div class="huge">124</div>
                                    <div>??????</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-yellow">
                            <a href="javascript:;">
                                <span class="float-sm-left">??????&nbsp;????????????????</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-red card-inverse">
                        <div class="card-header card-red">
                            <div class="row">
                                <div class="col-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-9 text-left">
                                    <div class="huge">13</div>
                                    <div>??????</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer card-red">
                            <a href="javascript:;">
                                <span class="float-sm-left">??????&nbsp;????????????????</span>
                                <span class="float-sm-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="float-left">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                        Actions

                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="#">Action</a>

                                        <a class="dropdown-item" href="#">Another action</a>

                                        <a class="dropdown-item" href="#">Something else here</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="morris-area-chart"></div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                            <div class="float-left">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-white btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                        Actions

                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item" href="#">Action</a>

                                        <a class="dropdown-item" href="#">Another action</a>

                                        <a class="dropdown-item" href="#">Something else here</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>3326</td>
                                                <td>10/21/2013</td>
                                                <td>3:29 PM</td>
                                                <td>$321.33</td>
                                            </tr>
                                            <tr>
                                                <td>3325</td>
                                                <td>10/21/2013</td>
                                                <td>3:20 PM</td>
                                                <td>$234.34</td>
                                            </tr>
                                            <tr>
                                                <td>3324</td>
                                                <td>10/21/2013</td>
                                                <td>3:03 PM</td>
                                                <td>$724.17</td>
                                            </tr>
                                            <tr>
                                                <td>3323</td>
                                                <td>10/21/2013</td>
                                                <td>3:00 PM</td>
                                                <td>$23.71</td>
                                            </tr>
                                            <tr>
                                                <td>3322</td>
                                                <td>10/21/2013</td>
                                                <td>2:49 PM</td>
                                                <td>$8345.23</td>
                                            </tr>
                                            <tr>
                                                <td>3321</td>
                                                <td>10/21/2013</td>
                                                <td>2:23 PM</td>
                                                <td>$245.12</td>
                                            </tr>
                                            <tr>
                                                <td>3320</td>
                                                <td>10/21/2013</td>
                                                <td>2:15 PM</td>
                                                <td>$5663.54</td>
                                            </tr>
                                            <tr>
                                                <td>3319</td>
                                                <td>10/21/2013</td>
                                                <td>2:13 PM</td>
                                                <td>$943.45</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-clock-o fa-fw"></i> Responsive Timeline
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                            <p>
                                                <small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago via
                                                    Twitter
                                                </small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero
                                                laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia
                                                pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas
                                                suscipit facere rem dicta, debitis.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem dolorem
                                                quibusdam, tenetur commodi provident cumque magni voluptatem libero,
                                                quis rerum. Fugiat esse debitis optio, tempore. Animi officiis alias,
                                                officia repellendus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium
                                                maiores odit qui est tempora eos, nostrum provident explicabo
                                                dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae
                                                minus eaque facere.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus
                                                numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil
                                                iure molestias aliquam, voluptatem totam quaerat, magni commodi
                                                quisquam.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est
                                                quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias
                                                sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis
                                                ut debitis!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus
                                                modi quam ipsum alias at est molestiae excepturi delectus nesciunt,
                                                quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum,
                                                atque.</p>
                                            <hr>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                        data-toggle="dropdown">
                                                    <i class="fa fa-gear"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <a class="dropdown-item" href="#">Action</a>

                                                    <a class="dropdown-item" href="#">Another action</a>

                                                    <a class="dropdown-item" href="#">Something else here</a>

                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi fuga odio
                                                quibusdam. Iure expedita, incidunt unde quis nam! Quod, quisquam.
                                                Officia quam qui adipisci quas consequuntur nostrum sequi. Consequuntur,
                                                commodi.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Lorem ipsum dolor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt
                                                obcaecati, quaerat tempore officia voluptas debitis consectetur culpa
                                                amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt
                                                quisquam maxime neque eaque.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="float-left text-muted small"><em>4 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-left text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="float-left text-muted small"><em>27 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="float-left text-muted small"><em>43 minutes ago</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-left text-muted small"><em>11:32 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-bolt fa-fw"></i> Server Crashed!
                                    <span class="float-left text-muted small"><em>11:13 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-warning fa-fw"></i> Server Not Responding
                                    <span class="float-left text-muted small"><em>10:57 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-shopping-cart fa-fw"></i> New Order Placed
                                    <span class="float-left text-muted small"><em>9:49 AM</em>
                                    </span>
                                </a>
                                <a href="#" class="list-group-item text-dark">
                                    <i class="fa fa-money fa-fw"></i> Payment Received
                                    <span class="float-left text-muted small"><em>Yesterday</em>
                                    </span>
                                </a>
                            </div>
                            <!-- /.list-group -->
                            <a href="#" class="btn btn-white btn-block">View All Alerts</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
                        </div>
                        <div class="card-body">
                            <div id="morris-donut-chart"></div>
                            <a href="#" class="btn btn-white btn-block">View Details</a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="chat-panel card">
                        <div class="card-header">
                            <i class="fa fa-comments fa-fw"></i> Chat
                            <div class="btn-group float-left">
                                <button type="button" class="btn btn-white btn-sm" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right slidedown">

                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-refresh fa-fw"></i> Refresh
                                    </a>


                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-check-circle fa-fw"></i> Available
                                    </a>


                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-times fa-fw"></i> Busy
                                    </a>


                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-clock-o fa-fw"></i> Away
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                    </a>

                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="float-left text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img float-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago
                                            </small>
                                            <strong class="float-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Jack Sparrow</strong>
                                            <small class="float-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img float-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar"
                                             class="rounded-circle"/>
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago
                                            </small>
                                            <strong class="float-right primary-font">Bhaumik Patel</strong>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum
                                            ornare dolor, quis ullamcorper ligula sodales.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm"
                                       placeholder="Type your message here..."/>
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Send
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('temp/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('temp/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('temp/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('temp/vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('temp/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('temp/vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ asset('temp/data/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('temp/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>
