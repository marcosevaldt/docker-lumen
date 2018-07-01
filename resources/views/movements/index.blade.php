@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('movimentacoes.create') }}">Adicionar Movimentação</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Número da Conta</th>
          <th scope="col">Cliente da Conta</th>
          <th scope="col">Tipo de Movimentação</th>
          <th scope="col">Data da Movimentação</th>
          <th scope="col">Valor da Movimentação</th>
          <th scope="col" width="100px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($movements as $movement)
      	    <tr>
      	      <td>{{ $movement->account->id }}</td>
              <td>{{ $movement->account->customer->name }}</td>
      	      <td>{{ $movement->movementType->description }}</td>
              <td>{{ date('d/m/Y', strtotime($movement->movement_date)) }}</td>
              <td>{{ number_format($movement->value, 2) }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('movimentacoes.edit', ['id' => $movement->id]) }}">Editar</a>
      	      	<!-- <a type="button" class="btn btn-danger"  href="{{ route('movimentacoes.destroy', ['id' => $movement->id]) }}">Deletar</a> -->
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $movements->links() }}
@endsection