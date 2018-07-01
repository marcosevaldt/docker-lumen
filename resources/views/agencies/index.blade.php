@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('agencias.create') }}">Adicionar Agência</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Nome da Agência</th>
          <th scope="col">Cidade</th>
          <th scope="col" width="180px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($agencies as $agency)
      	    <tr>
      	      <td>{{ $agency->name }}</td>
      	      <td>{{ $agency->city->name }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('agencias.edit', ['id' => $agency->id]) }}">Editar</a>
      	      	<a type="button" class="btn btn-danger"  href="{{ route('agencias.destroy', ['id' => $agency->id]) }}">Deletar</a>
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $agencies->links() }}
@endsection