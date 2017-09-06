@extends('..._layouts.default.index')

@section('title')
    Home @parent
@stop

@section('content')
<div class="container">

  <div class="row">
    <div class="col-lg-12">
      <p>
        <a href="{{ URL::to('/model') }}" class="btn btn-sq-lg">
            <img src="{{asset('img/deal-alert.png')}}" class="first-img"><br/><br/>
            Create a Deal Alert
        </a>
        <a href="#" class="btn btn-sq-lg">
          <img src="{{asset('img/ic_notifications.png')}}" class="first-img"><br/><br/>
          Manage Alert
          
        </a>
        <a href="#" class="btn btn-sq-lg">
          <img src="{{asset('img/account_box.png')}}" class="first-img"><br/><br/>
          Account Details
        </a>
      </p>
    </div>
  </div>  
</div>
@stop
