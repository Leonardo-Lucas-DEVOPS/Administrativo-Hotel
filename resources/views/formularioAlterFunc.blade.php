@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('alterar-funcionario', $registroFuncionarios->id)}}">
    @method('put')
    @csrf

    <div class="col-md-12">
        <label for="inputNome" class="form-label">Nome:</label>
        <input name="nome" type="text" class="form-control" value="{{old('nome', $registroFuncionarios->nome)}}" id="inputNome" placeholder="Leonardo Lucas">
        @error('nome')
            <div class="text-sm-start text-light">*Preencher o campo Nome.</div>  
        @enderror
    </div>
    
    <div class="col-12">
        <label for="inputFuncao" class="form-label">Função</label>
        <input name="funcao" type="text" class="form-control" value="{{old('funcao', $registroFuncionarios->funcao)}}" id="inputFuncao" placeholder="Recepcionista">
        @error('funcao')
            <div class="text-sm-start text-light">*Preencher o campo Função.</div>  
        @enderror
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
  </form>

</section>

@endsection