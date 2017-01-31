@extends('layouts.app')


@section('title')
Details for {{ $meal->name }}
@stop

@section('content')
<section class="bodyContainer">
  <section class="row mainTitle">
    <article class="col-md-12"> 
      <h1>
        {{ $meal->name }} 
      </h1>
    </article>
  </section>
  <hr>
  <section class="row recipieName">
    <article class="col-md-12"> 
      <ul class="list-group">
        <li class="list-group-item">
          <b>Name</b>: {{ $meal->name }}
        </li>
      </ul>
      </article>
  </section>
  <section class="row ingredientsTitle">
    <article class="col-md-12">  
      <h3>
        Ingredients 
      </h3>
    </article>
  </section>
  <section class="row ingredientsList">
    <article class="col-md-12">  
      @if ($meal->food->isEmpty())
      <h3>{{ $meal->name }} has no ingredients.</h3>
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
      </article>
  </section>
  <hr>
  <section class="row ingredientsForm">
    <article class="col-md-12">
      <form action="/meals/{{ $meal->id }}/food/" method="post">
        {{ csrf_field() }}
        <fieldset class="field-group">
          <label for="title">Food Name</label>
          <input type="input"class="form-control" name="name"></input>
        </fieldset>
        <fieldset class="field-group">
          <label for="input">Carbs</label>
          <input class="form-control" name="carbs"></input>
        </fieldset>
        <fieldset class="field-group">
          <label for="input">Fats</label>
          <input class="form-control" name="fats"></input>
        </fieldset>
        <fieldset class="field-group">
          <label for="input">Protein</label>
          <input class="form-control" name="protein"></input>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </article>
  </section>
</section>
  
@stop
