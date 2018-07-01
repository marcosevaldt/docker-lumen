@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('atipos.update', ['id' => $atipo->id]) }}">
    <div class="form-group">
      <label>Descrição</label>
      <input type="text" class="form-control" name="description" value="{{ $atipo->description }}">
    </div>
    <div class="form-group">
      <label>Classe</label>
      <input type="text" class="form-control" name="class" value="{{ $atipo->class }}">
    </div>
    <button class="btn btn-primary">Atualizar</button>
  </form>
@endsection