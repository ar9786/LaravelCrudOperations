<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@if (isset($data['metaContent']['title'])){{ $data['metaContent']['title'] }} @endif</title>
    <link href="{{ asset('public/fonts/stylesheet.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/owl_carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/media.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/images/logo12.ico') }}">
  </head>
  <body data-spy="scroll" data-target=".thesections" data-offset="50" id="section1">
<!-- choose your sport starts here -->
<div class="choose_ur_sport p-sm-5 p-2 pt-5">
    <div class="theForm_wrap">
        <div class="container">
          <form action="POST" id="submit_reset">
            <div class="site_logo text-center mb-5">
              <a href="javascript:void(0);" class="logo d-inline-block">
                <img src="{{ asset('public/images/logo.png') }}" alt="Sport Strive Logo" class="img-fluid">
              </a>
            </div>
            <h3 class="text-center base_color mb-4">Reset My Password</h3>
            <h5 class="text-center base_color mb-5">Enter a New Password for your Account</h5>
            <p id="resetPassErr" class="text-center text-danger"></p>
            <div class="row signup_row gutter_16">
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                <div class="form-group">
                  <input type="password" id="resetPass" name="password" class="form-control rounded-0" placeholder="New Password">
                  <span class="text-danger"></span>
                </div>
              </div>
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                <div class="form-group">
                  <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="Retype Password">
                  <span class="text-danger"></span>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="hidden" name="reset_token" value="{{ Request::get('reset_token') }}">
                  <input type="hidden" name="user_id" value="{{ Request::get('user_id') }}">
                </div>
              </div>
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary rounded-0 themebg_dark text-uppercase">Submit</button>
              </div>
            </div>
          </form>
        </div>
    </div>
</div>
@include('include/footer');