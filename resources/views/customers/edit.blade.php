@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('clientes.update', ['id' => $customer->id]) }}">
    <div class="form-group">
      <label>Nome do Cliente</label>
      <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
    </div>
    <div class="form-group">
      <label>Documento</label>
      <input type="text" class="form-control" name="document" value="{{ $customer->document }}">
    </div>
    <div class="form-group">
      <label>Tipo de Cliente</label>
      <select class="form-control" name="customer_type">
        @if($customer->customer_type == 'Pessoa Física')
        <option value="Pessoa Física" selected>Pessoa Física</option>
        <option value="Pessoa Jurídica">Pessoa Jurídica</option>
        @else
        <option value="Pessoa Física">Pessoa Física</option>
        <option value="Pessoa Jurídica" selected>Pessoa Jurídica</option>
        @endif
      </select>
    </div>
    <div class="form-group">
      <label>Cidade</label>
      <select class="form-control" name="city_id">
        @foreach ($cities as $city)
          @if($city->id == $customer->city->id)
          <option value="{{ $city->id }}" selected>{{ $city->name }}</option>
          @else
          <option value="{{ $city->id }}">{{ $city->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection