@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados dos Quartos</h1>

<section class="container m-5">
  <div class="container m-5">
    <form method="get" action="{{route('gerenciar-quarto')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="numero" name="numero" class="form-control" placeholder="Digite o número do Quarto" aria-label="First name">
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
        <th scope="col">Número quarto</th>
        <th scope="col">Tipo do quarto</th>
        <th scope="col">Preço</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registroQuartos as $rqLoop)
      <tr>
        <th scope="row">{{$rqLoop->id}}</th>
        <td>{{$rqLoop->numeroQuarto}}</td>
        <td>{{$rqLoop->tipoQuarto}}</td>
        <td>{{$rqLoop->valorDiario}}</td>
        <td>        
          <a href="{{route('editar-quarto', $rqLoop->id)}}"><button type="button" class="btn btn-primary">X</button></a>
        </td>
        <td>
           <form method="post" action="{{route('apagar-quarto', $rqLoop->id)}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">X</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</section>

@endsection
