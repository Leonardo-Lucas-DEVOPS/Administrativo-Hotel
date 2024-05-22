@extends('layout')
@section('content')

<section class="container mt-5">

  <form class="row g-3" method="post" action="{{route('edit-reserva',$registroReserva->id )}}">
  @method('put')
    @csrf

    <div class="col-md-3">
      <label for="idcliente" class="form-label">Código do Cliente:</label>
      <input value="{{old('idcliente', $registroReserva->idcliente)}}" name="idcliente" type="number" class="form-control" id="idcliente" placeholder="101">
    </div>

    <div class="col-md-9">
      <label for="inputnomeclie" class="form-label">Nome do cliente::</label>
      <input name="nomeclieR" disabled type="text" class="form-control" id="inputnomeclie">
    </div>

    <div class="col-md-3">
      <label for="idfuncionario" class="form-label">Código do Funcionario:</label>
      <input  value="{{old('idfuncionario', $registroReserva->idfuncionario)}}" name="idfuncionario" type="number" class="form-control" id="idfuncionario" placeholder="101">
    </div>

    <div class="col-md-9">
      <label for="inputnomeclie" class="form-label">Nome do Funcionario::</label>
      <input  name="nomeFunR" disabled type="text" class="form-control" id="inputnomeclie">
    </div>

    <div class="col-md-3">
      <label for="numeroquarto" class="form-label">Número do Quarto:</label>
      <input value="{{old('numeroquarto', $registroReserva->numeroquarto)}}" name="numeroquarto" type="text" class="form-control" id="numeroquarto" placeholder="306">
    </div>
    
    <div class="col-md-3">
      <label for="vdiaria" class="form-label">Valor da diária</label>
      <input  name="vdiaria" type="text" disabled class="form-control" id="vdiaria" placeholder="R$">
    </div>
    
    <div class="col-md-6">
      <label for="tipoquarto" class="form-label">Tipo do quarto:</label>
      <input  disabled name="tipoquarto" type="text" class="form-control" id="inputTipoQuarto" placeholder="...">
    </div>

    <div class="col-md-6">
      <label for="inputEntrada" class="form-label">Data entrada:</label>
      <input value="{{old('dataEntrada', $registroReserva->dataEntrada)}}" name="dataEntrada" type="date" class="form-control" id="inputEntrada" placeholder="Leonardo Lucas">
    </div>

    <div class="col-6">
      <label for="inputSaida" class="form-label">Data saída:</label>
      <input value="{{old('dataSaida', $registroReserva->dataSaida)}}" name="dataSaida" type="date" class="form-control" id="inputSaida" placeholder="leo007@gmail.com">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">R$</span>
      <input value="{{old('valortotal', $registroReserva->valortotal)}}" type="text" class="form-control" name="valortotal" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>

    <div class="col-md-12">
      <label for="Situacao" class="form-label">Situação:</label>
      <select value="{{old('situacao', $registroReserva->situacao)}}" name=situacao class="form-select form-select-md mb-3" aria-label="Large select example">
        <option value="pago">Pago</option>
        <option value="pendente">Pendente</option>
        <option value="devendo">Devendo</option>
      </select>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </form>

</section>

@endsection
