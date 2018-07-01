@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('contas.store') }}">
    <div class="form-group">
      <label>Agência</label>
      <select class="form-control" name="agency_id">
        @foreach ($agencies as $agency)
          <option value="{{ $agency->id }}">{{ $agency->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Cliente</label>
      <select class="form-control" name="customer_id">
        @foreach ($customers as $customer)
          <option value="{{ $customer->id }}">{{ $customer->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tipo de Conta</label>
      <select class="form-control" name="account_type_id">
        @foreach ($atipos as $atipo)
          <option value="{{ $atipo->id }}">{{ $atipo->description }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Data de Abertura</label>
      <input type="date" class="form-control" name="opening">
    </div>
    <div class="form-group">
      <label>Limite</label>
      <input type="text" class="form-control" name="line">
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection