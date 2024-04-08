@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('envia-db-quarto')}}">
  
  @csrf  



      <div class="col-md-12">
        <label for="inputNumero" class="form-label">Número:</label>
        <input name="numeroQuarto" type="number" class="form-control" id="inputNumero" placeholder="136">
      </div>

      <label for="tipo">Tipo:</label>
      <select name="tipoQuarto" class="form-select form-select-md mb-3" aria-label="Large select example">
        <option value="classe A+">Classe A+</option>
        <option value="comercial">Comercial</option>
        <option value="suite">Suíte</option>
      </select>

      <div class="col-md-6">
        <label for="inputValor" class="form-label">Valor:</label>
        <input name="valorDiario" type="number" class="form-control" id="inputValor" placeholder="200,00">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
  </form>

</section>

@endsection