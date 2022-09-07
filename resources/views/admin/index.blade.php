@extends('layouts/'.$template)

@section('content')
    <section class="content">
        <div class="page-announce valign-wrapper">
            <a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only">
                <i class="material-icons">menu</i>
            </a>
            <h1 class="page-announce-text valign">// Dashboard </h1>
        </div>
        <!-- Stat Boxes -->
        <div class="row">
            <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>420</h3>
                        <p>Accounts</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>69</h3>
                        <p>New Toons</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>36</h3>
                        <p>Support Emails</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-email"></i>
                    </div>
                    <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>1337</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="container">
                <div class="quick-links center-align">
                    <h3>Quick Links</h3>
                    <div class="row">
                        <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Mod Handbook"><a class="waves-effect waves-light btn-large" href="#">Mod Handbook</a></div>
                        <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Staff Applications"><a class="waves-effect waves-light btn-large" href="#">Staff Applications</a></div>
                        <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Name Guidelines"><a class="waves-effect waves-light btn-large" href="#">User Guidelines</a></div>
                        <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Issue Tracker"><a class="waves-effect waves-light btn-large" href="#">Issue Tracker</a></div>
                        <div class="col l4 offset-l4 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="OTRS Support Site"><a class="waves-effect waves-light btn-large" href="#">Support Site</a></div>
                    </div>
                </div>

                <h3 class="center-align">Current Staff Members</h3>
            </div>
        </div>
    </section>
@endsection
