@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('contas.create') }}">Adicionar Conta</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Número</th>
          <th scope="col">Cliente</th>
          <th scope="col">Agência</th>
          <th scope="col">Tipo de Conta</th>
          <th scope="col">Limite</th>
          <th scope="col">Data de Abertura</th>
          <th scope="col" width="180px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($accounts as $account)
      	    <tr>
              <td>{{ $account->id }}</td>
              <td>{{ $account->customer->name }}</td>
      	      <td>{{ $account->agency->name }}</td>
              <td>{{ $account->accountType->description }}</td>
              <td>{{ number_format($account->line, 2) }}</td>
              <td>{{ date('d/m/Y', strtotime($account->opening)) }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('contas.edit', ['id' => $account->id]) }}">Editar</a>
      	      	<a type="button" class="btn btn-danger"  href="{{ route('contas.destroy', ['id' => $account->id]) }}">Deletar</a>
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $accounts->links() }}
@endsection