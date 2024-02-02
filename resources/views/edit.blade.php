@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3>Atualizar Contato</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{  route('contacts.update', $contact->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group mb-2">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value={{ $contact->name }} />
            </div>

            <div class="form-group mb-2">
                <label for="contact">Contato:</label>
                <input type="text" class="form-control" name="contact" value={{ $contact->contact }} />
            </div>

            <div class="form-group mb-2">
                <label for="email">E-mail:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>

            <button type="submit mty-4" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection