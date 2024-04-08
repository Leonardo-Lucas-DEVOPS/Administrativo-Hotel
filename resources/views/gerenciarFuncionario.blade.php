@extends('layout')
@section('content')

<h1 class="text-center">Gerenciar dados do Funcionario</h1>

<section class="container m-5">
  <div class="container m-5">
    <form method="get" action="{{route('gerenciar-funcionario')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite dados do Funcionário" aria-label="First name">
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
        <th scope="col">Função</th>
        <th scope="col">Editar</th>
        <th scope="col">Exluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($registroFuncionarios as $rfLoop)
      <tr>
        <th scope="row">{{$rfLoop->id}}</th>
        <td>{{$rfLoop->nome}}</td>
        <td>{{$rfLoop->funcao}}</td>
        <td>
          <a href="{{route('editar-funcionario', $rfLoop->id)}}">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <form method="post" action="{{route('apagar-funcionario', $rfLoop->id)}}">
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
