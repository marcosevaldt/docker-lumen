@extends('content.index')

@section('content')
	<a type="button" class="btn btn-success" href="{{ route('atipos.create') }}">Adicionar Tipo de Conta</a>
    
    <table class="table table-bordered" style="margin-top: 2%;">
      <thead>
        <tr>
          <th scope="col">Descrição</th>
          <th scope="col">Classe</th>
          <th scope="col" width="180px;">Ações</th>
        </tr>
      </thead>
      <tbody>
      	@foreach ($atipos as $tipo)
      	    <tr>
      	      <td>{{ $tipo->description }}</td>
      	      <td>{{ $tipo->class }}</td>
      	      <td>
      	      	<a type="button" class="btn btn-warning" href="{{ route('atipos.edit', ['id' => $tipo->id]) }}">Editar</a>
      	      	<a type="button" class="btn btn-danger"  href="{{ route('atipos.destroy', ['id' => $tipo->id]) }}">Deletar</a>
      	      </td>
      	    </tr>
      	@endforeach
      </tbody>
    </table>
    {{ $atipos->links() }}
@endsection