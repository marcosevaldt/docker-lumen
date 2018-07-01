@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('movimentacoes.store') }}">
    <div class="form-group">
      <label>Número da Conta</label>
      <select class="form-control" name="account_id">
        @foreach ($accounts as $account)
          <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->customer->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tipo de Movimentação</label>
      <select class="form-control" name="movement_type_id">
        @foreach ($mtipos as $mtipo)
          <option value="{{ $mtipo->id }}">{{ $mtipo->description }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Data da Movimentação</label>
      <input type="date" class="form-control" name="movement_date">
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input type="text" class="form-control" name="value">
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection