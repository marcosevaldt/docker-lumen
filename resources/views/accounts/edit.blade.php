@extends('content.index')

@section('content')
  <form method="POST" action="{{ route('contas.update', ['id' => $account->id]) }}">
    <div class="form-group">
      <label>Agência</label>
      <select class="form-control" name="agency_id">
        @foreach ($agencies as $agency)
          @if($agency->id == $account->agency->id)
            <option value="{{ $agency->id }}" selected>{{ $agency->name }}</option>
          @else
            <option value="{{ $agency->id }}">{{ $agency->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Cliente</label>
      <select class="form-control" name="customer_id">
        @foreach ($customers as $customer)
          @if($customer->id == $account->customer->id)
            <option value="{{ $customer->id }}" selected>{{ $customer->name }}</option>
          @else
            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
          @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Tipo de Conta</label>
      <select class="form-control" name="account_type_id">
        @foreach ($atipos as $atipo)
        @if($atipo->id == $account->accountType->id)
          <option value="{{ $atipo->id }}" selected>{{ $atipo->description }}</option>
        @else
          <option value="{{ $atipo->id }}">{{ $atipo->description }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Data de Abertura</label>
      <input type="date" class="form-control" name="opening" value="{{ $account->opening }}">
    </div>
    <div class="form-group">
      <label>Limite</label>
      <input type="text" class="form-control" name="line" value="{{ $account->line }}">
    </div>
    <button class="btn btn-primary">Salvar</button>
  </form>
@endsection