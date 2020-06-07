<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="http://bogatey.com.ua/resources/css/style.css">
    <link rel="stylesheet" href="http://bogatey.com.ua/resources/css/bootstrap.min.css">
</head>

<body class="bg-dark-body">
  <div class="container">
@include('inc.header')
</div>
<div class="container">
@if(Request::is('/'))
      @include('inc.hero')
    @endif
    <!--- /.container --->
</div>

@include('inc.messages')
<div class="container">
    <div class="row">

      <!--- blog-content --->
      @yield('content')
      <!-- /.blog-content -->
      <!--- Sidebar-Right --->
      @include('inc.aside')
      <!-- /.Sidebar-Right -->
    </div>
    <!-- /.row -->
  </div>
@include('inc.footer')
</body>
</html>
