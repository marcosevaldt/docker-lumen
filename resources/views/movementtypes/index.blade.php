@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('mtipos.create') }}">Adicionar Tipo de Movimentação</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Descrição</th>
          <th scope="col">Tipo de Movimentação</th>
          <th scope="col" width="180px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($mtipos as $tipo)
      	    <tr>
      	      <td>{{ $tipo->description }}</td>
      	      <td>{{ $tipo->debit_credit }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('mtipos.edit', ['id' => $tipo->id]) }}">Editar</a>
      	      	<a type="button" class="btn btn-danger"  href="{{ route('mtipos.destroy', ['id' => $tipo->id]) }}">Deletar</a>
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $mtipos->links() }}
@endsection