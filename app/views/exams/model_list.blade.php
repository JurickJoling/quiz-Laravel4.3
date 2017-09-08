@extends('..._layouts.default.index')

@section('title')
    Home @parent
@stop

@section('content')
<section class="section-all-deals">
  <div class="row">
    <div class="container">
      <div class="main-section">
      	<h1>Create a Deal Alert</h1>
       	<div class="col-md-6 model-list">
          <div class="clearfix">
         		<img src="{{asset('img/model-s.png')}}">
         		<a href="{{ URL::to('/exam/1') }}"><h2>Model S</h2></a>
          </div>
        </div>
        <div class="col-md-6 model-list">
          <div class="clearfix">
         		<img src="{{asset('img/model-x.png')}}">
         		<a href="{{ URL::to('/exam/2') }}"><h2>Model x</h2></a>
          </div>
        </div>
     	</div>
    </div>
  </div>
</section>
@stop
