@extends('layouts.app')
@section('title-block'){{ $data->subject }}@endsection

@section('content')
<div class="col-md-8 blog-main">
  <div class="p-3 blog-post bg-color-post mb-4 shadow rounded">
    <h3 class="pb-3 mb-4 font-italic border-bottom">{{ $data->subject }}</h3>
      <div class="alert alert-info">
        <p>Почта: {{ $data->name }}</p>
        <p>Почта: {{ $data->email }}</p>
        <p>Дата обращения: {{ $data->created_at }}</p>
        <p>Почта: {{ $data->message }}</p>
        <p>
          <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-warning">Редактировать</button></button></a>
          <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></button></a>
        </p>
      </div>
  </div>
</div>
@endsection
