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
        <a href="/create" class="btn btn-danger">Create Event</a>
      </p>
    </div>
  </div>
  <div class="row">
    @foreach($events as $event)
    <div class="col-sm-4">
      <div class="card">
        <div class="card-block">
          <h3 class="card-title">{{ $event->event_name }}</h3>
          <p class="card-text">{{ str_limit($event->event_desc, 70) }}</p>
          <a href="{{ $event->id }}" class="btn btn-primary">View More.</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@endsection