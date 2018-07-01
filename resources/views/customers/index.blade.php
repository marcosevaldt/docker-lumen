@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('clientes.create') }}">Adicionar Cliente</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Nome do Cliente</th>
          <th scope="col">Documento</th>
          <th scope="col">Tipo de Cliente</th>
          <th scope="col">Cidade</th>
          <th scope="col" width="180px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($customers as $customer)
      	    <tr>
      	      <td>{{ $customer->name }}</td>
      	      <td>{{ $customer->document }}</td>
              <td>{{ $customer->customer_type }}</td>
              <td>{{ $customer->city->name }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('clientes.edit', ['id' => $customer->id]) }}">Editar</a>
      	      	<a type="button" class="btn btn-danger"  href="{{ route('clientes.destroy', ['id' => $customer->id]) }}">Deletar</a>
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $customers->links() }}
@endsection