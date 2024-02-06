<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{   
    public function index()
    {
        $contacts = Contact::all();
        return view('home', compact('contacts'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => 'O :attribute é obrigatório!',
            'name.min' => 'É necessário no mínimo 6 caracteres no nome!',
            'contact.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'contact.unique' => 'Este contato já está cadastrado!',
            'email.email' => 'Digite um email válido!',
            'email.unique' => 'Este e-mail já está cadastrado!'
        ];

        $request->validate([
            'name'=>'required|min:6',
            'contact'=>'required|unique:contacts|min:9|max:9',
            'email'=>'required|unique:contacts|email'

        ], $messages);

        $contact = new Contact([
            'name' => $request->get('name'),
            'contact' => $request->get('contact'),
            'email' => $request->get('email'),
        ]);

        $contact->save();
        return redirect()->route('contact.home')->with('success','Contato adicionado com sucesso!');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $messages = [
            'required' => 'O :attribute é obrigatório!',
            'name.min' => 'É necessário no mínimo 6 caracteres no nome!',
            'contact.min' => 'É necessário no mínimo 9 caracteres no nome!',
            'email.email' => 'Digite um email válido!'
        ];

        $request->validate([
            'name'=>'required|min:6',
            'contact'=>'required|min:9|max:9',
            'email'=>'required|email'

        ], $messages);

        $contact = Contact::find($id);
        $contact->name = $request->get('name');
        $contact->contact = $request->get('contact');
        $contact->email = $request->get('email');
        $contact->save();

        return redirect()->route('contact.home')->with('success','Contato atualizado com sucesso!');

    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.home')->with('success','Contato removido com sucesso!');
    }
}
