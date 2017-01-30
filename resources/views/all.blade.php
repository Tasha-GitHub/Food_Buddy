@extends('layouts.app')

@section('title')
All Meals
@stop

@section('content')
  <h1>All Meals</h1>
  <section class="row mealSection">
    <hr>
    <div class="col-md-12 meals">
      <ul class="list-group">
      @foreach ($meals as $meal)
      <li class="list-group-item">
        <a href="/meals/{{ $meal->id }}">
          {{ $meal->name }}
        </a>
      </li>
      @endforeach
      </ul>      
    </div>
  </section>
@stop
