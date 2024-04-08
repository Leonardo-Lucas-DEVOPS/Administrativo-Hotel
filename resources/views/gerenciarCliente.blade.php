@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados do Cliente</h1>

<section class="container m-5">
  <div class="container m-5">
    <form method="get" action="{{route('gerenciar-cliente')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="marca" name="nome" class="form-control" placeholder="Digite dados do Cliente" aria-label="First name">
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
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
      @foreach($registrosClientes as $rcLoop)
      <tr>
        <th scope="row">{{$rcLoop->id}}</th>
        <td>{{$rcLoop->nome}}</td>
        <td>{{$rcLoop->email}}</td>
        <td>
          <a href="{{route('mostrar-cliente', $rcLoop->id)}}">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="post" action="{{route('apagar-cliente', $rcLoop->id)}}">
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
