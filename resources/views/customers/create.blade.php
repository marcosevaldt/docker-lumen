@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('clientes.store') }}">
    <div class="form-group">
      <label>Nome do Cliente</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>Documento</label>
      <input type="text" class="form-control" name="document">
    </div>
    <div class="form-group">
      <label>Tipo de Cliente</label>
      <select class="form-control" name="customer_type">
        <option value="Pessoa Física">Pessoa Física</option>
        <option value="Pessoa Jurídica">Pessoa Jurídica</option>
      </select>
    </div>
    <div class="form-group">
      <label>Cidade</label>
      <select class="form-control" name="city_id">
      	@foreach ($cities as $city)
      		<option value="{{ $city->id }}">{{ $city->name }}</option>
      	@endforeach
      </select>
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection