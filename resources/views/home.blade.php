@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div>
        @endif
    </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Contatos</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Contato</th>
                                <th>E-mail</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->contact }}</td>
                                <td>{{ $c->email }}</td>
                                <td class="d-flex gap-2 justify-content-end">
                                    <a href="{{ route('contacts.show',$c->id)}}" class="btn btn-primary rounded-pill btn-sm text-uppercase">ver</a>
                                    <a href="{{ route('contacts.edit',$c->id)}}" class="btn btn-primary rounded-pill btn-sm text-uppercase">Editar</a>
                                    <form action="{{ route('contacts.destroy', $c->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger rounded-pill btn-sm text-uppercase">Remover</button>
                                    </form>
                                </td>
                            </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a class="btn btn-primary btn-sm text-uppercase" href="{{route('contact.new')}}">+ novo</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
