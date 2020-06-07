<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
  return view('home'); }
  )->name('home-link');

// Страница о нас
Route::get('/about', function () {
  return view('about'); }
  )->name('about-link');

// Страница контакты
Route::get('/contact', function () {
  return view('contact'); }
  )->name('contact-link');

// Обработчик формы
Route::post(
  '/contact/submit',
  'ContactController@submit'
  )->name('contact-form');

Route::get(
  '/contact/all',
  'ContactController@allData'
  )->name('contact-data');

Route::get(
  '/contact/all/{id}',
  'ContactController@showOneMessage'
  )->name('contact-data-on');

Route::get(
  '/contact/all/{id}/update',
  'ContactController@updateMessage'
  )->name('contact-update');

Route::post(
  '/contact/all/{id}/update',
  'ContactController@updateMessageSubmit'
  )->name('contact-update-submit');

Route::get(
  '/contact/all/{id}/delete',
  'ContactController@deleteMessage'
  )->name('contact-delete');

// Страница книги
Route::get('/books', function () {
  return view('book'); }
  )->name('books-link');

// Ссылка на полный просмотр новости
Route::get('/post-full', function () {
  return view('post-full'); }
  )->name('post-link');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
