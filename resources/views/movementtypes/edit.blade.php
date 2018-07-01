@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('mtipos.update', ['id' => $mtipo->id]) }}">
    <div class="form-group">
      <label>Descrição</label>
      <input type="text" class="form-control" name="description" value="{{ $mtipo->description }}">
    </div>
    <div class="form-group">
      <label>Débito/Crédito</label>
      <select class="form-control" name="debit_credit">
      @if($mtipo->debit_credit == 'Débito')
        <option value="Débito" selected>Débito</option>
        <option value="Crédito">Crédito</option>
      @else
        <option value="Débito">Débito</option>
        <option value="Crédito" selected>Crédito</option>
      @endif
      </select>
    </div>
    <button class="btn btn-primary">Atualizar</button>
  </form>
@endsection