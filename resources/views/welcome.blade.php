@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <h3 class='mssg'>{{ session('msg') }}</h3>
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            The North's Best Pizzas
        </div>
        <a href="/pizzas/create">-- order a pizza --</a>
    </div>
</div>
@endsection
