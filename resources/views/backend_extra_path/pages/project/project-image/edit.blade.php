@extends('backend_extra_path.layouts.master')

@section('title')
Client - {{ $title }}
@endsection
@section('navbar-content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Client </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    @if (helper::roleAccess('settings.slider.index'))
                    <li class="breadcrumb-item"><a href="{{ route('settings.slider.index') }}">Client
                        </a></li>
                    @endif
                    <li class="breadcrumb-item active"><span>Add New Slider</span></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('admin-content')


<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Project Image</h3>
                <div class="card-tools">
                    @if (helper::roleAccess('project.image.index'))
                    <a class="btn btn-default" href="{{ route('project.image.index') }}"><i class="fa fa-list"></i>
                        Slider List</a>
                    @endif
                    <span id="buttons"></span>

                    <a class="btn btn-tool btn-default" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </a>
                    <a class="btn btn-tool btn-default" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{ route('project.image.update',$projectimg->id) }}" novalidate enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="title">Service :</label>
                            <select name="project_id" id="project_id" class="form-control">
                                <option value="">Select Project</option>
                                @foreach($projects as $project)
                                <option value="{{$project->id}}" @if($project->id == $projectimg->project_id) selected @endif>{{$project->name?? 'N/A'}}</option>
                                @endforeach
                            </select>
                            @error('project_id')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="title">Type :</label>
                            <select name="type" id="type" class="form-control">
                                <option value="">Select Type</option>
                                <option value="commercial" @if($projectimg->type == 'commercial') selected @endif>Commercial</option>
                                <option value="residential" @if($projectimg->type == 'residential') selected @endif>Residential</option>
                            </select>
                            @error('type')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="service_id">Service</label>
                            <select name="service_id" id="service_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($sevices as $service)
                                <option value="{{$service->id}}">{{$service->title?? 'N/A'}}</option>
                                @endforeach
                            </select>
                            
                            @error('service_id')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="orderby">orderBy :</label>
                            <input type="text" name="orderby" class="form-control" id="orderby" placeholder="orderBy" value="{{ $projectimg->order_by ?? '' }}">
                            @error('orderby')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title">Title * :</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $projectimg->title ?? '' }}">
                            @error('title')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Image *:</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="description">Description :</label>

                            <textarea class="form-control summernote" name="description" id="description" rows="5" placeholder="Write about your company...">{{ $projectimg->desc ?? '' }}</textarea>
                            @error('description')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> &nbsp;Save</button>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">

            </div>
        </div>
    </div>
    <!-- /.col-->
</div>










@endsection