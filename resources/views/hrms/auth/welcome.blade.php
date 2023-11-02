@extends('hrms.layouts.base')

@section('content')

<style>
    a{
        color: green;
        text-decoration: none;
    }
</style>
<div class="content">
    <section id="content" class="pn animated fadeIn">
    <div class="center-block mt100 mw800 text-center p20">
        <h1 class="mt40 mb10">Welcome!</h1>
        <div>
            <div class="col-md-6">
                <h2 class="mt40 mb20">
                    <a href="/dashboard"><i class="fa fa-arrow-circle-o-left"></i>Dashboard</a>
                </h2>
            </div>
            <div class="col-md-6">
                <h2 class="mt40 mb20">
                    <a href="/profile"><i class="fa fa-arrow-circle-o-right"></i>Profile</a>
                </h2>
            </div>
        </div>
    </div>
   </section>
</div>
@endsection