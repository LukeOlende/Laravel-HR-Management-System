@extends('hrms.layouts.base')

@section('content')
<style>
    /* .panel-body{
        border: 2px solid black;
    } */
</style>
<!-- -------------- Topbar -------------- -->
<header id="topbar" class="alt">
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="breadcrumb-icon">
                <a href="/dashboard">
                    <span class="fa fa-home"></span>
                </a>
            </li>
            <li class="breadcrumb-active">
                <a href="/dashboard">Dashboard</a>
            </li>
            <li class="breadcrumb-link" style="font-size: 18px;">
                <a href="/dashboard" style="color: black;">Home</a>
            </li>
            <li class="breadcrumb-current-item" style="font-size: 18px; color: black;">Dashboard</li>
        </ol>
    </div>
</header>

<section id="content" class="table-layout animated fadeIn">
    <div class="chute chute-center">
        <div class="row">
            @if(Auth::user()->isHR())
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body" style="border: 2px solid black;">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="{{ URL::asset('assets/img/pages/employee-management.png') }}" 
                                style="width: 85px;" class="img-responsive mauto" alt=""/>
                            </div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted">
                                    <a href="{{route('employee-manager')}}" class="text-dark"> EMPLOYEE MANAGER</a>
                                </h3>
                                <!-- {{--<h2 class="fs50 mt5 mbn">385</h2>--}} -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body" style="border: 2px solid black;">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="{{ URL::asset('assets/img/pages/leave.png') }}" 
                                style="width: 85px;" class="img-responsive mauto" alt=""/>
                            </div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted"> 
                                    <a href="{{route('total-leave-list')}}" class="text-dark"> LEAVE MANAGER </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body" style="border: 2px solid black;">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10">
                                    <img src="{{ URL::asset('assets/img/pages/assets.png') }}"
                                    class="img-responsive mauto" style="width: 85px;"  alt=""/>
                                </div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> 
                                        <a href="{{route('asset-listing')}}" class="text-dark"> ASSET MANAGER </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body" style="border: 2px solid black;">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10">
                                    <img src="{{ URL::asset('assets/img/pages/expense.png') }}"
                                    class="img-responsive mauto" style="width: 85px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted"> 
                                        <a href="{{route('expense-list')}}" class="text-dark"> EXPENSE MANAGER </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body" style="border: 2px solid black;">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="{{ URL::asset('assets/img/pages/time.png') }}"
                                class="img-responsive mauto" style="width: 85px;" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted">
                                    <a href="{{route('attendance-manager')}}" class="text-dark"> ATTENDANCE MANAGER </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endif
                @if(!Auth::user()->isHR())
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body" style="border: 2px solid black;">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10">
                                    <img src="{{ URL::asset('assets/img/pages/leave.png') }}"
                                    class="img-responsive mauto" style="width: 85px;" alt=""/></div>
                                <div class="col-xs-7 pl5">
                                    <h3 class="text-muted">
                                        <a href="{{route('my-leave-list')}}" class="text-dark"> LEAVES </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            <div class="col-sm-6 col-xl-3">
                <div class="panel panel-tile">
                    <div class="panel-body" style="border: 2px solid black;">
                        <div class="row pv10">
                            <div class="col-xs-5 ph10">
                                <img src="{{ URL::asset('assets/img/pages/policy.png') }}"
                                class="img-responsive mauto" style="width: 85px;" alt=""/></div>
                            <div class="col-xs-7 pl5">
                                <h3 class="text-muted">
                                    <a href="{{route('hr-policy')}}" class="text-dark"> HR POLICIES </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                @if($events)
                <div class="col-md-12">
                    <h3 class="mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise">Latest &nbsp; Events </h3>
                @foreach (array_chunk($events, 3, true) as $results)
                    <table class="table">
                        <tr>
                            @foreach($results as $event)
                            <td>
                                <div class='fc-event fc-event-primary' data-event="primary">
                                <div class="fc-event-icon" style="color: darkslateblue">
                                    <span class="fa fa-exclamation"></span>
                                </div>
                                <div class="fc-event-desc blink" id="blink">
                                    <a href="{{route('create-event')}}" ><b>{{ \Carbon\Carbon::createFromTimestamp(strtotime($event->date))->diffForHumans()}} </b> {{$event->name}}</a>
                                </div>
                                    </div>
                            </td>
                            @endforeach
                        </tr>
                    </table>
                    @endforeach
               </div>
                @endif

                @if($meetings)
                <div class="col-md-12">
                    <h3 class=" mb10 mr5 notification" data-note-style="primary" style="color: darkturquoise"> Latest &nbsp;&nbsp; Meetings </h3>
                    @foreach (array_chunk($meetings, 3, true) as $results)
                        <table class="table">
                            <tr>
                                @foreach($results as $meeting)
                                    <td>
                                        <div class='fc-event fc-event-primary' data-event="primary">
                                            <div class="fc-event-icon" style="color: darkslateblue">
                                                <span class="fa fa-exclamation"></span>
                                            </div>
                                            <div class="fc-event-desc blink" id="blink">
                                                <b>{{ \Carbon\Carbon::createFromTimestamp(strtotime($meeting->date))->diffForHumans()}} </b> {{$meeting->name}}
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        </table>
                    @endforeach
                </div>
                    @endif


             </div>
           </div>
         </section>
    @endsection