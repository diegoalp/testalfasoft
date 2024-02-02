@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-sm-6 offset-sm-3">
    <h3>Adicionar contato</h3>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group mb-2">    
              <label for="name">Nome:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group mb-2">
              <label for="contact">Contato:</label>
              <input type="text" class="form-control" maxlength="9" name="contact"/>
          </div>

          <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
                             
          <button type="submit" class="btn btn-outline-primary my-4">Adicionar</button>
      </form>
  </div>
</div>
</div>
@endsection