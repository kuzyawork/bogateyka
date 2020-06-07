@extends('layouts.app')
@section('title-block')Главная страница@endsection

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif
<div class="col-md-8 blog-main">
  <div class="p-1 blog-post bg-color-post mb-4 shadow rounded">
   <div class="d-flex flex-wrap-reverse flex-md-nowrap justify-content-center">
     <div class="mr-auto p-2">
       <h4 class="blog-post-title">Laravel. Полное руководство</h4>
       <p class="blog-post-meta">3 июня, 2020 by <a href="#">Кузя</a></p>
       <hr class="mb-3">
       <p>Что отличает Laravel от других PHP-фреймворков? Скорость и простота. Стремительная разработка приложений, обширная экосистема и набор инструментов Laravel позволяют быстро создавать сайты и приложения, отличающиеся чистым удобочитаемым кодом.</p>
     </div>
     <div class="d-flex">
      <img class="d-md-block mb-1 shadow" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="/images/books/laravel/laravel-1.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
     </div>
   </div>
      <button type="button" onclick="window.location.href='/post-full';" class="btn btn-primary btn-sm btn-block">Подробнее/Скачать</button>
   </div>
   <div class="p-1 blog-post bg-color-post mb-4 shadow rounded">
    <div class="d-flex flex-wrap-reverse flex-md-nowrap justify-content-center">
      <div class="mr-auto p-2">
        <h4 class="blog-post-title">Laravel. Полное руководство</h4>
        <p class="blog-post-meta">3 июня, 2020 by <a href="#">Кузя</a></p>
        <hr class="mb-3">
        <p>Что отличает Laravel от других PHP-фреймворков? Скорость и простота. Стремительная разработка приложений, обширная экосистема и набор инструментов Laravel позволяют быстро создавать сайты и приложения, отличающиеся чистым удобочитаемым кодом.</p>
      </div>
      <div class="d-flex">
       <img class="d-md-block mb-1 shadow" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="/images/books/laravel/laravel-1.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
      </div>
    </div>
       <button type="button" onclick="window.location.href='/post-full';" class="btn btn-primary btn-sm btn-block">Подробнее/Скачать</button>
    </div>
</div>
@endsection
