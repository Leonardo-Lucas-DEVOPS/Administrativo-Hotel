@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados das Reservas</h1>

<section class="container m-5">
  <div class="container m-5">
    <form >
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="marca" class="form-control" placeholder="Digite o nome do Cliente" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">situação </th>
        <th scope="col">valor total</th>
        <th scope="col">data Entrada</th>
        <th scope="col">data Saída</th>
        <th scope="col"></th>
        <th scope="col"></th>
    
        
      </tr>
    </thead>
    <tbody>
     
    @foreach($registroReserva as $rrLoop)
      <tr>
        <th scope="row">{{$rrLoop->id}}</th>
        <td>{{$rrLoop->situacao}}</td>
        <td>{{$rrLoop->valortotal}}</td>
        <td>{{$rrLoop->dataEntrada}}</td>
        <td>{{$rrLoop->dataSaida}}</td>

        <td>        
          <a href="{{route('alterar-reserva',$rrLoop->id)}}"><button type="button" class="btn btn-primary">editar</button></a>
        </td>
        <td>
           <form method="post" action="{{route('apagar-reserva',$rrLoop->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">excluir</button>
          </form>
        </td>
      </tr>
    @endforeach


    </tbody>
  </table>
</section>

@endsection
