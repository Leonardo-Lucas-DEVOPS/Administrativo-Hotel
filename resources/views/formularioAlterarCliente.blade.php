@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('alterar-cliente', $registrosClientes->id)}}">
    @method('put')
    @csrf  

        <div class="col-md-12">
            <label for="inputNome" class="form-label">Nome:</label>
            <input name="nome" type="text" class="form-control" value="{{old('nome', $registrosClientes->nome)}}" id="inputNome" placeholder="Leonardo Lucas">
            @error('nome')
            <div class="text-sm-start text-light">*Preencher o campo Nome.</div>  
            @enderror
        </div>
    
        <div class="col-12">
            <label for="inputEmail" class="form-label">E-mail:</label>
            <input name="email" type="email" class="form-control" value="{{old('nome', $registrosClientes->email)}}" id="inputEmail" placeholder="leo007@gmail.com">
            @error('email')
            <div class="text-sm-start text-light">*Preencher o campo E-mail.</div>  
            @enderror
        </div>
    
        <div class="col-md-6">
            <label for="inputFone" class="form-label">Fone:</label>
            <input name="fone" type="tel" class="form-control" value="{{old('nome', $registrosClientes->fone)}}" id="inputAddress" placeholder="11 95478-9654">
            @error('fone')
            <div class="text-sm-start text-light">*Preencher o campo Fone.</div>  
            @enderror
        </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>

</section>

@endsection