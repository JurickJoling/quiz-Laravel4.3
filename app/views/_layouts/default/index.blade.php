<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="<?= csrf_token() ?>">
  <meta name="description" content="Laravel Quiz is a student platform where the students can test
  their knowledge in different subjects">
  <meta name="keywords" content="Laravel,Quiz,dimitar032,Open Source Platform">
  <link rel="author" href="http://github.com/dimitar032">
  
  <title>Tesla Deal Alert -
    @section('title')
    @show
  </title>
  
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  
  <link href="{{cdn('css/main/style.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="">
  <script src="{{cdn('js/jquery/jquery.js')}}"></script>
  <script src="{{cdn('js/jquery.tablesorter.min.js')}}"></script>
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   @section('specific-page-addons')@show
</head>
    <body>
      <!-- <header><a href="/"><img src="img/logo.png"></a></header> -->
      <div id="main-container">
        @include('_layouts.default.partials.top_nav')

        @yield('content')

      </div> <!-- end container -->
    </body>
</html>
