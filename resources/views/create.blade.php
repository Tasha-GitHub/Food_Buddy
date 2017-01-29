@extends('layouts.app')

@section('title')
Add Another Meal
@stop

@section('content')
  <h1>Add Another Meal</h1>

  <hr>

  <form action="/meals" method="post">

    {{ csrf_field() }}

    <fieldset class="form-group">
      <label for="name" >Dish Name</label>
      <input type="text"
             name="name"
             class="form-control"
             placeholder="Dish Name">
    </fieldset> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@stop
