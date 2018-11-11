@extends('layouts.place.app')

@section('content')


    @foreach($MyPlaces as $MyPlace)
        <div class="container-fluid" >
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        @if (Auth::user()->id == $MyPlace->id_user)
                        <div class="header">
                            <h2> <strong>Notification</strong> Positions</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <div class="body">
                            <div class="row clearfix jsdemo-notification-button">
                                <p class="text-white">{{$MyPlace->body}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endforeach

    <div class="chat-launcher active"></div>
    <div class="chat-wrapper is-open pullUp">
        <div class="card">
            <div class="header">
                <span class="text-white">Инфо о месте</span>
            </div>
            <div class="body">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="chat-widget" style="overflow: hidden; width: auto; height: 300px;">
                        <ul class="chat-scroll-list clearfix">
                            <li class="right">
                                <div class="chat-info"><span class="datetime">6:15</span> <span class="message">четыре рубля</span> </div>
                            </li>
                            <li class="right">
                                <div class="chat-info"><span class="datetime">6:16</span> <span class="message">Восемь рублей</span> </div>
                            </li>

                        </ul>
                    </div><div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.4); width: 2px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 3px; z-index: 99; right: 1px; height: 151.515px;"></div><div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 2px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                <div class="input-group p-t-15">
                    <div class="links">
                        <a href="{{ url('pay') }}">
                            <button class="btn btn-primary">Dmrse</button>
                        </a>
                    </div>
                </span>
                </div>
            </div>
        </div>
    </div>

@endsection

