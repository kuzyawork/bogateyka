<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(ContactRequest $req) {
      $contact = new Contact();
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->subject = $req->input('subject');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('home-link')->with('success', 'Ваше сообщение успешно отправлено');
    }

    public function allData() {
      //return view('contact-list', ['data' => orderBy('id', 'asc')->skip()->take()->get()]);
      /*$contact = new Contact;
      return view('contact-list', ['data' => $contact->where('subject', '=', 'Проверка страницы')->get()]);*/
      /*return view('contact-list', ['data' => $contact->all()]);*/
      $contact = new Contact;
      return view('contact-list', ['data' => $contact->orderBy('id', 'desc')->get()]);
    }

    public function showOneMessage($id) {
      $contact = new Contact;
      return view('one-message', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
      $contact = new Contact;
      return view('update-message', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req) {
      $contact = Contact::find($id);
      $contact->name = $req->input('name');
      $contact->email = $req->input('email');
      $contact->subject = $req->input('subject');
      $contact->message = $req->input('message');

      $contact->save();

      return redirect()->route('contact-data-on', $id)->with('success', 'Запись обновлена');
    }

    public function deleteMessage($id) {
      Contact::find($id)->delete();

      return redirect()->route('contact-data')->with('success', 'Запись удалена');
    }
}
