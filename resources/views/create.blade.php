@extends('layouts.app')

@section('title')
Add Another Meal
@stop

@section('content')
  <h1>Add Another Meal</h1>
  <hr>
  <section class="row addMeal">
    <article class="col-md-1 mealName">
      <p> name </p>
    </article>
    <article class="col-md-11">
      <form action="{{ url('/meals') }}" method="POST">
        {{ csrf_field() }}
        <fieldset class="form-group">
          <input type="text"
                 name="name"
                 class="form-control"
                 placeholder="Dish Name">
          <input name="invisible" type="hidden" value="{{ $user->id }}" >
        </fieldset> 
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
    </article>     
  </section>

@stop
