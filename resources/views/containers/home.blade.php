@extends('layouts.app')
@section('title'|'Home Page')
@section('content')
@include('includes.carousel')
<div class="container-fluid">
    <div class="row section-1">
        <div class="col-md-12 wrapper-section-1">
            <div class="title title-section-1">Start Helping</div>
            <div class="body body-section-1">Every child needs love. You can help by blah blah blah</div>
            <a href="/adopt" role="button" class="btn btn-adopt">Adopt Now</a>
        </div>
    </div>
    <div class="row section-2">
        <div class="col-md-12 container-section-2">
            <div class="row">
                <div class="col-md-6 reset">
                    <img class="image-section-2" src="images/homepage/section-2.jpg" alt="register_img">
                </div>
                <div class="col-md-6 reset right-section-2">
                    <div class="title title-section-2">Can{{"'"}}t Adopt?</div>
                    <div class="body body-section-2">If you see a child who you think needs to be adopted, you can register them here!</div>
                    <div>
                        <a href="/register" role="button" class="btn btn-register">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .reset {
        padding: 0;
        margin: 0;
    }
    .section-1 {
        height: 500px;
        background: #03A9F4;
    }
    .section-2 {
        min-height: 500px;
    }
    .title {
        font-size: 40px;
        font-weight: 600;
    }
    .body {
        font-size: 24px;
    }
    .wrapper-section-1 {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .title-section-1, .body-section-1 {
        color: #fff;
    }
    .title-section-2, .body-section-2 {
        color: #03A9F4;
    }
    .btn-adopt {
        margin: 20px 0;
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        background: transparent;
        border: 2px solid #fff;
    }
    .btn-adopt:hover, .btn-adopt:active, .btn-adopt:focus {
        color: #03A9F4;
        background: #fff;
    }
    .btn-adopt, .btn-adopt:hover, .btn-adopt:active, .btn-adopt:focus {
        outline: none;    
    }
    .btn-register {
        margin: 20px 0;
        color: #03A9F4;
        font-size: 24px;
        font-weight: 600;
        background: transparent;
        border: 2px solid #03A9F4;
    }
    .btn-register:hover, .btn-register:active, .btn-register:focus {
        color: #fff;
        background: #03A9F4;
    }
    .btn-register, .btn-register:hover, .btn-register:active, .btn-register:focus {
        outline: none;    
    }
    .image-section-2 {
        width: 100%;
    }
    .right-section-2 {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 24px;
        text-align: center;
    }
</style>
@endsection