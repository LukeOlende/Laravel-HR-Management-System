@extends('hrms.layouts.base')

@section('content')
<style>
    label{
        color: black;
    }
</style>
<div class="content">
    <header id="topbar" class="alt">
        <div class="topbar-left">

            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}')

                <ol class="breadcrumb">
                    <li class="breadcrumb-icon">
                        <a href="/dashboard">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-active">
                        <a href="/dashboard"> Dashboard </a>
                    </li>
                    <li class="breadcrumb-link" style="color:black;font-size:16px">Assets</a>
                    </li> 
                    <li class="breadcrumb-current-item" style="color:black;font-size:16px">Edit {{$result->name}}</li>
                </ol>

            @else
                <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="/dashboard">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="/dashboard"> Dashboard </a>
                </li>
                <li class="breadcrumb-link" style="color:black;font-size:16px">Assets</li>
                <li class="breadcrumb-current-item" style="color:black;font-size:16px">Add Asset </li>
            </ol>
            @endif
        </div>
    </header>
    <section id="content" class="table-layout animated fadeIn" >
        <div class="chute-affix" data-spy="affix" data-offset-top="200">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-success">
                    <div class="panel">
                        <div class="panel-heading">
                            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}')
                                  <span class="panel-title hidden-xs" style="color:black;">Edit Asset</span>
                                @else
                                  <span class="panel-title hidden-xs" style="color:black;">Add Asset</span>
                             @endif
                        </div>

                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div class="panel-body p25 pb10">
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {{Session::get('flash_message')}}
                                        </div>
                                    @endif
                                        {!! Form::open(['class' => 'form-horizontal']) !!}



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Asset </label>
                                            <div class="col-md-6">
                                                @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}')
                                                    <input type="text" name="name" id="input002" class="select2-single form-control" value="@if($result && $result->name){{$result->name}}@endif" required>
                                                @else
                                                    <input type="text" name="name" id="input002" class="select2-single form-control" placeholder="Asset" required>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Description </label>
                                            <div class="col-md-6">
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset/{id}')
                                                        <textarea class="select2-single form-control" rows="3" id="textarea1" name="description" required>@if($result && $result->description){{$result->description}}@endif </textarea>
                                                    @else
                                                        <textarea class="select2-single form-control" rows="3" id="textarea1" placeholder="Asset Description" name="description" required></textarea>
                                                    @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-2">
                                                <input type="submit" class="btn btn-info btn-block" value="Submit"
                                                style="background: radial-gradient(circle at -1% 57.5%, #13AA52 0%, #00662B 90%);">
                                            </div>
                                            <div class="col-md-2"><a href="/add-asset" >
                                                <input type="button" class="btn btn-danger btn-block" value="Reset"
                                                style="background: linear-gradient(108.4deg, #FD2C38 3.3%, #B0020C 98.4%);"></a>
                                            </div>
                                        </div>
                                        </div>
                                        {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>
@endsection