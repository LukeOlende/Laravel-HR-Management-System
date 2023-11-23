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
            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset-assignment/{id}')
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
                    <li class="breadcrumb-current-item" style="color:black;font-size:16px">Edit {{$assets->name}}</li>
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
                <li class="breadcrumb-link" style="color:black;font-size:16px">
                    Assets
                </li>
                <li class="breadcrumb-current-item" style="color:black;font-size:16px"> 
                    Assign Assets 
                </li>
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
                            @if(\Route::getFacadeRoot()->current()->uri() == 'edit-asset-assignment/{id}')
                                <span class="panel-title hidden-xs" style="color: black;"> Edit Asset Assignment </span>
                            @else
                                <span class="panel-title hidden-xs" style="color: black;"> Assign Asset</span>
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
                                            <label class="col-md-3 control-label"> Select Employee </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="emp_id" required>
                                                    <option value="" selected>Select One</option>
                                                    @foreach($emps as $emp)
                                                        <option value="{{$emp->id}}">{{$emp->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Select Asset </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="asset_id" required>
                                                    <option value="" selected>Select One</option>
                                                    @foreach($assets as $asset)
                                                        <option value="{{$asset->id}}">{{$asset->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"> Select Issuing Authority </label>
                                            <div class="col-md-6">
                                                <select class="select2-multiple form-control select-primary"
                                                        name="authority_id" required>
                                                    <option value="" selected>Select One</option>
                                                    @foreach($emps as $emp)
                                                        <option value="{{$emp->id}}">{{$emp->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="datepicker1" class="col-md-3 control-label"> Date of Assignment </label>
                                            <div class="col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar text-alert pr11"></i>
                                                        </div>
                                                        @if(\Route::getFacadeRoot()->current()->uri() == 'edit-assignment/{id}')
                                                        <input type="text" id="datepicker1" class="select2-single form-control" name="doa" value="@if($emps && $emps->date_of_assignment){{$emps->date_of_assignment}}@endif" required>
                                                        @else
                                                            <input type="text" id="datepicker1" class="select2-single form-control" name="doa" required>
                                                        @endif
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="datepicker4" class="col-md-3 control-label"> Date of Release </label>
                                            <div class="col-md-6">
                                                {{--@if(\Route::getFacadeRoot()->current()->uri() == 'edit-assignment/{id}')

                                                    <input type="date" id="datepicker1" class="select2-single form-control" name="dor" value="@if($emps && $emps->dor){{$emps->dor}}@endif"/>

                                                @else

                                                    <input type="date" id="datepicker1" class="select2-single form-control" name="dor"/>

                                                @endif--}}
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-calendar text-alert pr11"></i>
                                                    </div>
                                                    @if(\Route::getFacadeRoot()->current()->uri() == 'edit-assignment/{id}')
                                                        <input type="text" id="datepicker4" class="select2-single form-control" name="dor" value="@if($emps && $emps->date_of_assignment){{$emps->date_of_assignment}}@endif" required>
                                                    @else
                                                        <input type="text" id="datepicker4" class="select2-single form-control" name="dor" required>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>
                                            <div class="col-md-2">
                                                <input type="submit" class="btn btn-success btn-block" value="Submit"
                                                style="background: radial-gradient(circle at -1% 57.5%, #13AA52 0%, #00662B 90%);">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="/assign-asset" >
                                                    <input type="button" class="btn btn-danger btn-block" value="Reset"
                                                    style="background: linear-gradient(108.4deg, #FD2C38 3.3%, #B0020C 98.4%);">
                                                </a>
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