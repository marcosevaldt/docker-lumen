@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('mtipos.store') }}">
    <div class="form-group">
      <label>Descrição</label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
      <label>Tipo de Movimentação</label>
      <select class="form-control" name="debit_credit">
        <option value="Débito">Débito</option>
        <option value="Crédito">Crédito</option>
      </select>
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection