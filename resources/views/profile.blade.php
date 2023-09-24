@extends('layouts.main')

@section('container')
    <h1>Profile</h1>

    <div class="card" style="width: 18rem; height: 18rem">
        <img src="img/{{ $image }}" alt="{{ $name }}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{ $name }}</h5>
          <p class="card-text">Undergraduate informatics at Jember University</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $email }}</li>
          <li class="list-group-item">{{ $subject }}</li>
        </ul>
    </div>
@endsection