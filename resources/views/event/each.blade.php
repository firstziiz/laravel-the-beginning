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
    <div class="col-sm-12" style="padding-bottom: 20px;">
      <div class="card">
        <h3 class="card-header">{{ $event->event_name }}</h3>
        <div class="card-block">
          <p class="card-text">{{ $event->event_desc }}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-7">
      <div class="card">
        <h3 class="card-header">Attendee</h3>
        <ul class="list-group list-group-flush">
          @foreach($attendees as $attendee)
            <li class="list-group-item">
              <b>{{ $attendee->atd_name }} {{ $attendee->atd_sname }}</b>,
              <b>Tel:</b> {{ $attendee->atd_tel }},
              <b>Email:</b> {{ $attendee->atd_email }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="card">
        <h3 class="card-header">JOIN</h3>
        <div class="card-block">
          <form action="/{{ $event_id }}/join/" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name:</label>
              <input name="name" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="sname">Surname:</label>
              <input name="sname" type="text" class="form-control" id="sname">
            </div>
            <div class="form-group">
              <label for="tel">Tel:</label>
              <input name="tel" type="number" class="form-control" id="tel">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input name="email" type="email" class="form-control" id="email">
            </div>
            <button class="btn btn-block btn-primary" type="submit" role="button">JOIN</button></form>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection