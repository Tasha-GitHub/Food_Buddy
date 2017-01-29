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
        <span><b>{{ $food->title }}</b></span>
        <pre>{{ $food->text }}</pre>
          <form action="" 
                method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button 
              type="submit"
              class="btn btn-danger" 
              formmethod="post" 
              >
              Delete
            </button>
          </form>
      </li>
      @endforeach
    </ul>
  @endif

    <form action="/meals/{{ $meal->id }}/food/" method="post">

    {{ csrf_field() }}
    
    <fieldset class="field-group">
      <label for="title">Food Name</label>
      <input type="text"class="form-control" name="name" rows="5">
    <fieldset>
    <fieldset class="field-group">
      <label for="text">Carbs</label>
      <textarea class="form-control" name="carbs" rows="5"></textarea>
    <fieldset>
    <fieldset class="field-group">
      <label for="text">Fats</label>
      <textarea class="form-control" name="fats" rows="5"></textarea>
    <fieldset>
    <fieldset class="field-group">
      <label for="text">Protein</label>
      <textarea class="form-control" name="protein" rows="5"></textarea>
    <fieldset>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>


@stop
