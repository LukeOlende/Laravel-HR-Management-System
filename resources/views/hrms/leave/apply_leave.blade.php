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
            <ol class="breadcrumb">
                <li class="breadcrumb-icon">
                    <a href="/dashboard">
                        <span class="fa fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-active">
                    <a href="/dashboard"> Dashboard </a>
                </li>
                <li class="breadcrumb-link" style="color:black; font-size:16px;">Leave</li>
                <li class="breadcrumb-current-item" style="color:black; font-size:16px;"> Apply Leave</li>
            </ol>
        </div>
    </header>
    
    <section id="content" class="table-layout animated fadeIn">
        <div class="chute-affix" data-spy="affix" data-offset-top="200">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title hidden-xs" style="color:black"> Apply for Leave</span>
                        </div>
                    <div class="text-center" id="show-leave-count"></div>
                        <div class="panel-body pn">
                            <div class="table-responsive">
                                <div class="panel-body p25 pb10">
                                    @if(session('message'))
                                        {{session('message')}}
                                    @endif
                                    @if(Session::has('flash_message'))
                                        <div class="alert alert-success">
                                            {{ session::get('flash_message') }}
                                        </div>
                                    @endif
                                    {!! Form::open(['class' => 'form-horizontal', 'method' => 'post']) !!}

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"> Leave Type </label>
                                        <div class="col-md-10">
                                            <input type="hidden" value="{!! csrf_token() !!}" id="token">
                                            <input type="hidden" value="{{\Auth::user()->id}}" id="user_id">
                                            <select class="select2-multiple form-control select-primary leave_type"
                                                    name="leave_type" required>
                                                <option value="" selected>Select One</option>
                                                @foreach($leaves as $leave)
                                                    <option value="{{$leave->id}}">{{$leave->leave_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="date_from" class="col-md-2 control-label"> Date From </label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar text-alert pr10"></i>
                                                </div>
                                                <input type="text" id="datepicker1" class="select2-single form-control"
                                                       name="dateFrom" required>
                                            </div>
                                        </div>
                                        <label for="date_to" class="col-md-2 control-label"> Date To </label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar text-alert pr10"></i>
                                                </div>
                                                <input type="text" id="datepicker4" class="select2-single form-control"
                                                       name="dateTo" required>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="time_from" class=" col-md-2 control-label  "> Time From </label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="imoon imoon-clock text-alert pr10"></i>
                                                </div>
                                                <input type="text" id="timepicker1" class="select2-single form-control" value="9:30"
                                                       name="time_from" required>
                                            </div>
                                        </div>
                                        <label for="time_to" class="col-md-2 control-label"> Time To </label>
                                        <div class="col-md-3">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="imoon imoon-clock text-alert pr10"></i>
                                                </div>
                                                <input type="text" id="timepicker4" class="select2-single form-control" value="18:00"
                                                       name="time_to" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input002" class="col-md-2 control-label"> Days </label>
                                        <div class="col-md-10">
                                            <input id="total_days" name="number_of_days" value="" readonly="readonly"
                                                   type="text" size="90" class="select2-single form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="input002" class="col-md-2 control-label"> Reason </label>
                                        <div class="col-md-10">
                                            <input type="text" id="textarea1" class="select2-single form-control"
                                                   name="reason" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label"></label>
                                        <div class="col-md-2">
                                            <input type="submit" class="btn btn-success btn-block" value="Submit"
                                            style="background: radial-gradient(circle at -1% 57.5%, #13AA52 0%, #00662B 90%);">
                                        </div>
                                        <div class="col-md-2"><a href="/apply-leave" >
                                            <input type="button" class="btn btn-danger btn-block" value="Reset"
                                            style="background: linear-gradient(108.4deg, #FD2C38 3.3%, #B0020C 98.4%);"></a>
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
      </div>
    </section>

</div>
</div>
@endsection