@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('agencias.update', ['id' => $agency->id]) }}">
    <div class="form-group">
      <label>Nome da Agência</label>
      <input type="text" class="form-control" name="name" value="{{ $agency->name }}">
    </div>
    <div class="form-group">
      <label>Cidade</label>
      <select class="form-control" name="city_id">
      	@foreach ($cities as $city)
          @if($city->id == $agency->city->id)
      		<option value="{{ $city->id }}" selected>{{ $city->name }}</option>
          @else
          <option value="{{ $city->id }}">{{ $city->name }}</option>
          @endif
      	@endforeach
      </select>
    </div>
    <button class="btn btn-primary">Atualizar</button>
  </form>
@endsection