@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('envia-db-func')}}">

    @csrf

    <div class="col-md-12">
      <label for="inputNome" class="form-label">Nome:</label>
      <input name="nome" type="text" class="form-control" id="inputNome" placeholder="Leonardo Lucas">
    </div>

    <div class="col-12">
      <label for="inputFuncao" class="form-label">Função</label>
      <input name="funcao" type="text" class="form-control" id="inputFuncao" placeholder="Recepcionista">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
  </form>

</section>

@endsection