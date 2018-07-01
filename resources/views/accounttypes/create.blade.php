@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('atipos.store') }}">
    <div class="form-group">
      <label>Descrição</label>
      <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
      <label>Classe</label>
      <input type="text" class="form-control" name="class">
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection