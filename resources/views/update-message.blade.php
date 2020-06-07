@extends('layouts.app')
@section('title-block')Редактирование записи@endsection

@section('content')
<div class="col-md-8 blog-main">
  <div class="p-3 blog-post bg-color-post mb-4 shadow rounded">
    <h3 class="pb-3 mb-4 font-italic border-bottom">Редактирование записи</h3>

      <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Введите имя:</label>
          <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Введите Email:</label>
          <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="subject">Тема сообщения:</label>
          <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Введите тему сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
          <label for="message">Сообщение:</label>
          <textarea type="text" name="message" value="" placeholder="Введите сообщение" id="message" class="form-control">{{ $data->message }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
      </form>
    </div>
</div>
@endsection
