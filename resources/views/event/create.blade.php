@extends('layout')

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <h1>Eventist</h1>
      <p class="lead">Just a Event Platform.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <p>
        <a href="/" class="btn btn-danger">Back</a>
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <h3 class="card-header">Create Event.</h3>
        <div class="card-block">
          <form action="/createEvent" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="event_name">Event Name:</label>
              <input name="event_name" type="text" class="form-control" id="event_name" placeholder="...">
            </div>
            <div class="form-group">
              <label for="event_desc">Event Description:</label>
              <textarea name="event_desc" class="form-control" id="event_desc"></textarea>
            </div>
            <button class="btn btn-block btn-primary" type="submit" role="button">CREATE</button></form>
        </div>
      </div>
    </div>
  </div>
@endsection