@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('movimentacoes.update', ['id' => $movement->id ]) }}">
    <div class="form-group">
      <label>Número da Conta</label>
      <select class="form-control" name="account_id" disabled>
        @foreach ($accounts as $account)
          @if($account->id == $movement->account->id)
            <option value="{{ $account->id }}" selected>{{ $account->id }} - {{ $account->customer->name }}</option>
          @else
            <option value="{{ $account->id }}">{{ $account->id }} - {{ $account->customer->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tipo de Movimentação</label>
      <select class="form-control" name="movement_type_id">
        @foreach ($mtipos as $mtipo)
          @if($mtipo->id == $movement->movementType->id)
            <option value="{{ $mtipo->id }}" selected>{{ $mtipo->description }}</option>
          @else
            <option value="{{ $mtipo->id }}">{{ $mtipo->description }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Data da Movimentação</label>
      <input type="date" class="form-control" name="movement_date" value="{{ $movement->movement_date }}">
    </div>
    <div class="form-group">
      <label>Valor</label>
      <input type="text" class="form-control" name="value" value="{{ $movement->value }}">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="account_id" value="{{ $movement->account->id }}">
    </div>

    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection