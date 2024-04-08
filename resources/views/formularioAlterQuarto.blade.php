@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('alterar-quarto', $registroQuartos->id)}}">
  @method('put')
  @csrf  

    <div class="col-md-12">
        <label for="inputNumero" class="form-label">Número:</label>
        <input name="numeroQuarto" type="number" class="form-control" value="{{old('numeroQuarto', $registroQuartos->numeroQuarto)}}" id="inputNumero" placeholder="136">
        @error('numero')
            <div class="text-sm-start text-light">*Preencher o campo Número.</div>  
        @enderror
    </div>

    <label for="tipo">Tipo:</label>
    <select name="tipoQuarto" class="form-select form-select-md mb-3" value="{{old('tipoQuarto', $registroQuartos->tipoQuarto)}}" aria-label="Large select example">
        <option value="classe A+">Classe A+</option>
        <option value="comercial">Comercial</option>
        <option value="suite">Suíte</option>
        @error('tipo')
            <div class="text-sm-start text-light">*Preencher o campo Tipo.</div>  
        @enderror
    </select>

    <div class="col-md-6">
        <label for="inputValor" class="form-label">Valor:</label>
        <input name="valorDiario" type="number" class="form-control" value="{{old('valorDiario', $registroQuartos->valorDiario)}}" id="inputValor" placeholder="200,00">
        @error('valor')
            <div class="text-sm-start text-light">*Preencher o campo Valor.</div>  
        @enderror
    </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
  </form>

</section>

@endsection