
<nav class="navbar navbar-expand-lg navbar-dark bg-header-nav rounded mb-2 shadow-sm vl">

  <a class="navbar-brand" href="/">BOGATEY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">


@if(Request::is('/'))
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home-link') }}">Главная <span class="sr-only">(current)</span></a>
    </li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ route('home-link') }}">Главная <span class="sr-only">(current)</span></a>
</li>
@endif
@if(Request::is('/contact-data'))
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('contact-data') }}">Список обращений <span class="sr-only">(current)</span></a>
    </li>
@else
<li class="nav-item">
    <a class="nav-link" href="{{ route('contact-data') }}">Список обращений <span class="sr-only">(current)</span></a>
</li>
@endif
@if(Request::is('about'))
<li class="nav-item active">
  <a class="nav-link" href="{{ route('about-link') }}">О нас</a>
</li>
@else
<li class="nav-item">
  <a class="nav-link" href="{{ route('about-link') }}">О нас</a>
</li>
@endif
@if(Request::is('contact'))
<li class="nav-item active">
  <a class="nav-link" href="{{ route('contact-link') }}">Контакты</a>
</li>
@else
<li class="nav-item">
  <a class="nav-link" href="{{ route('contact-link') }}">Контакты</a>
</li>
@endif
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Книги</a>
<div class="dropdown-menu" style="margin-top:8px" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="{{ route('home-link') }}">LARAVEL</a>
  <a class="dropdown-item" href="#">PHP+MySQL</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" style="color:blue" href="#">смотреть все книги</a>
</div>
      </li>
@guest
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }} <span class="caret"></span></a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
{{ __('Logout') }}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
</div>
</li>
@endguest
    </ul>







  </div>
</nav>
