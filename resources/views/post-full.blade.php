@extends('layouts.app')

@section('title-block')Детальное просмотр поста@endsection

@section('content')

<div class="col-md-8 blog-main">
  <div class="p-3 blog-post bg-color-post mb-4 shadow rounded">
    <h3 class="pb-3 mb-4 font-italic border-bottom">Laravel. Полное руководство</h3>
      <div class="d-flex flex-wrap-reverse flex-md-nowrap justify-content-center">
        <div class="mr-auto p-2">
          <p>Мэтт Стаффер, известный преподаватель и ведущий разработчик, предлагает как общий обзор фреймворка, так и конкретные примеры работы с ним. Опытным PHP-разработчикам книга поможет быстро войти в новую тему, чтобы реализовать проект на Laravel. В издании также раскрыты темы Laravel Dusk и Horizon, собрана информация о ресурсах сообщества и других пакетах, не входящих в ядро Laravel.
          В этой книге вы найдете:
          Инструменты для сбора, проверки, нормализации, фильтрации данных пользователя
          Blade, мощный пользовательский шаблонизатор Laravel
          Выразительная модель Eloquent ORM для работы с базами данных приложений
          Информация о роли объекта Illuminate Request в жизненном цикле приложения
          PHPUnit, Mockery и Dusk для тестирования вашего PHP-кода
          Инструменты для написания JSON и RESTful API
          Интерфейсы для доступа к файловой системе, сессиям, куки, кэшам и поиску
          Реализации очередей, заданий, событий и публикации событий WebSocket.</p>
        </div>
        <div class="d-flex align-items-start flex-column bd-highlight mb-5" style="height: 250px;">
          <img class="d-md-block shadow" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="/images/books/laravel/laravel-1.jpg" data-holder-rendered="true" style="width: 200px; height: 250px;">
          <nav class="navbar">
            <!-- Bootstrap 4 -->
            <div class="btn-group dropup" style="margin-left:-5%">
              <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-md">Скачать в формате<span class="caret"></span></button>
              <!-- Выпадающее меню -->
              <ul class="dropdown-menu">
                <!-- Пункты меню -->
                <a class="dropdown-item" href="#">PDF</a>
                <a class="dropdown-item" href="#">FB2</a>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  <div class="p-3 blog-post bg-color-post mb-4 shadow rounded">
    <h3>Комментарии</h3>
  </div>
</div>
@endsection
