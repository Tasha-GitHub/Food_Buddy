@extends('layouts.app')


@section('title')
Details for {{ $meal->name }}
@stop

@section('content')
  <h1>
    Food Details for {{ $meal->name }} 
  </h1>

    <hr>

  <ul class="list-group">
    <li class="list-group-item">
      <b>Name</b>: {{ $meal->name }}
    </li>
  </ul>

  <hr>

    @if ($meal->food->isEmpty())
    <h3>{{ $meal->name }} has no snippets.</h3>
  @else
    <ul class="form-group">
      @foreach ($meal->food as $food)
      <li class="list-group-item">
        <span><b>{{ $food->name }}</b></span>
        <span>{{ $food->carbs}} : {{$food->fats}} : {{$food->protein }}</span>
      </li>
      @endforeach
    </ul>
  @endif

    <form action="/meals/{{ $meal->id }}/food/" method="post">

    {{ csrf_field() }}
    
    <fieldset class="field-group">
      <label for="title">Food Name</label>
      <input type="input"class="form-control" name="name">
    <fieldset>
    <fieldset class="field-group">
      <label for="input">Carbs</label>
      <input class="form-control" name="carbs"></input>
    <fieldset>
    <fieldset class="field-group">
      <label for="input">Fats</label>
      <input class="form-control" name="fats"></input>
    <fieldset>
    <fieldset class="field-group">
      <label for="input">Protein</label>
      <input class="form-control" name="protein"></input>
    <fieldset>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>


@stop
