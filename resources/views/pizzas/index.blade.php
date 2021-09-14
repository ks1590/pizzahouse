@extends('layouts.app')
@section('content')            
<div class="weapper pizza-index">
  <h1>Pizzza Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/{{ $pizza->id }}"></a>{{ $pizza->name }}</h4>
    </div>
  @endforeach
</div>
@endsection