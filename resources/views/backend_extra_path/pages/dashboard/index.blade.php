@extends('backend_extra_path.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection


@section('navbar-content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@endsection

@section('admin-content')
@if ($user->type == 'Admin')

<div class="row">
    @if($user->branch_id !== null)

    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <div class="position-relative p-3 bg-green" style="height: 150px">
                        <div class="ribbon-wrapper ribbon-xl">
                            <div class="ribbon bg-red">

                                {{$user->branch->branchCode}} <br>
                                {{$user->branch->name}}
                            </div>
                        </div>
                        <h3> Today : {{date('d-M-Y')}}
                        </h3>
                        <h2>Hello {{$user->name}}</h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>
                <p>Account Balance</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Purchases</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>
                <p>Today Purchase</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>
                <p>Total Sales</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Sale</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Expense</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Expense</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>
                <p>Total Payment</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Received</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>
                <p>Supplier Due</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Customer Due</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Service</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>

    </div>





</div>

@endif
@if ($user->type == 'Project')
<div class="row">
    <div class="col-md-12 bg-info">
        <h3 align="center"></h3>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->

        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Project Budget</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->

        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Project Expense</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Project Expense</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Product Requisition</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Product Requisition</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Use Product</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Use Product</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Return Product</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Today Return Product</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
@endif

@if ($user->type == 'Employee')
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Roles</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3>435</h3>

                <p>Admins</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Customer</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Supplier</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Sales</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3></h3>

                <p>Total Purchases</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3>4534</h3>

                <p>Payment</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-default">
            <div class="inner">
                <h3>4534</h3>

                <p>Received</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="" class="small-box-footer bg-success">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
@endif




@endsection