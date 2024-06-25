@extends('backend_extra_path.layouts.master')

@section('title')
Service - {{$title}}
@endsection


@section('navbar-content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Message </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    @if(helper::roleAccess('aboutus.index'))
                    <li class="breadcrumb-item"><a href="{{route('aboutus.index')}}">Service List</a>
                    </li>
                    @endif
                    <li class="breadcrumb-item active"><span>Edit Service</span></li>
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
                <h3 class="card-title">Service </h3>
                <div class="card-tools">
                    @if(helper::roleAccess('service.service.create'))
                    <a class="btn btn-default" href="{{ route('service.service.create') }}"><i class="fas fa-plus"></i>
                        Add New</a>
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

                <form class="needs-validation" method="POST"
                    action="{{ route('service.service.update',$editInfo->id) }}" enctype="multipart/form-data"
                    novalidate>
                    @csrf
                    <div class="form-row">
                        {{-- <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Type * :</label>
                            <select name="category_id" id="" class="form-control select2">
                                @foreach($category as $key => $value)
                                <option @if($editInfo->category_id == $value->id) selected @endif
                                    value="{{$value->id}}">{{$value->title}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Title * :</label>
                            <input type="text" name="title" class="form-control" id="validationCustom01"
                                placeholder="ID" value="{{ $editInfo->title }}">
                            @error('title')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Image * :</label>
                            <input type="file" name="image" class="form-control " id="validationCustom01"
                                placeholder="Name" value="{{ old('image') }}">
                            <input type="hidden" name="newimage" value="{{ $editInfo->image }}">
                            <img src="{{asset('public/backend/service/' . $editInfo->image)}}" width="50px">
                            @error('image')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="alt">Image Alternative Text :</label>
                            <input type="text" name="alt" class="form-control" id="alt"
                                placeholder="Image Alternative Text" value="{{ $editInfo->alt ?? '' }}">
                            @error('alt')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Order By * :</label>
                            <input type="text" name="order_by" class="form-control" id="" placeholder="Order By"
                                value="{{ old('order_by') ? old('order_by') : ($editInfo->order_by ?? '') }}">
                            @error('order_by')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="description">Details * :</label>
                            <textarea class="form-control summernote" name="details" id="description" rows="5"
                                placeholder="Write about your company...">{{ $editInfo->details ?? '' }}</textarea>
                            @error('details')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="">Show in nav ? * :</label>
                            <div class="form-group">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input value="1" class="form-check-input" type="radio" name="show_in_nav" {{
                                            $editInfo->show_in_nav == 1 ? 'checked':'' }}>Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="show_in_nav" value="0" {{
                                            $editInfo->show_in_nav == 0 ? 'checked' :''}}>No
                                    </label>
                                </div>
                            </div>
                            @error('order_by')
                            <span class=" error text-red text-bold">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-12 mb-12 form-group">
                        <label>Meta Code :</label>
                        <textarea type="text" name="meta" class="form-control"
                            placeholder="Write Your meta code"> {!! $editInfo->meta !!} </textarea>
                    </div>


                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i>&nbsp;Update</button>
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


@section('scripts')

<script type="text/javascript" src="{{asset('public/editor/ckeditor.js')}}"></script>
<!--<script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>-->
<script>
    var allEditors = document.querySelectorAll('.summernote');
    for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(
            allEditors[i],{
                fontSize: {
                    options: [
                       12,13,14,16,18,20,22,24,26,28,30,32,34,36
                    ],
                    supportAllValues: true
                },
            }
        );
    }
</script>
@endsection