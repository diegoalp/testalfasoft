@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="card">
            <div class="card-header">
                <h3>Página do Contato</h3>
            </div>
            <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div><span class="fw-bold">Nome:</span> {{ $contact->name }}</div>
            <div><span class="fw-bold">Contato:</span> {{ $contact->contact }}</div>
            <div><span class="fw-bold">E-mail:</span> {{ $contact->email }}</div>
            </div>
        </div>
    </div>
</div>
@endsection