@extends('layouts.app')
@section('title', 'Мої вміння та захоплення')
@section('content')
    <div class="home-photography">
        <div class="head-photo"
             style="background-image: url(/img/main.jpg);"></div>
        <div class="title-holder">
            <div class="page-title machinery-text">
                <h2>Тетяна Ковальчук</h2>
                <span>митець &amp; педагог</span>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 about-info">
                    <h2>Про мене</h2>
                    @foreach($infos as $info)
                        <blockquote>
                            {!! $info->text !!}
                        </blockquote>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection