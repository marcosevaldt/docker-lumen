@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('agencias.store') }}">
    <div class="form-group">
      <label>Nome da Agência</label>
      <input type="text" class="form-control" name="name">
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