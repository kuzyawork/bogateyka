@extends('layouts.app')
@section('title-block')Список обращений@endsection

@section('content')
<div class="col-md-8 blog-main">
  <div class="p-3 blog-post bg-color-post mb-4 shadow rounded">
    <h3 class="pb-3 mb-4 font-italic border-bottom">Список обращений</h3>
    @foreach($data as $el)
      <div class="alert alert-info">
        <h3>Тема: {{ $el->subject }}</h3>
        <p>Почта: {{ $el->email }}</p>
        <p>Дата обращения: {{ $el->created_at }}</p>
        <p>
          <a href="{{ route('contact-data-on', $el->id) }}"><button class="btn btn-warning">Детальнее</button></button></a>
        </p>
      </div>
    @endforeach
  </div>
</div>

@endsection
