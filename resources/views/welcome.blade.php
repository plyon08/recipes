@extends('layouts.app')

@section('content')
  <div class='row justify-content-center'>
    <div class='col-10'>
      <div class='welcome-heading'>Welcome!</div>
      <div class='welcome-subheading'>
        <p>
          We will need to see those credentials before we show you anything delicious to make...so please sign in!
        </p>
        <p>
          I will leave you with this image of amazing looking pasta though!
        </p>
      </div>
    </div>
  </div>
  <div class='row justify-content-center'>
    <div class='col-10 col-md-6'>
      <img src="{{ asset('storage/bg-image.jpg') }}" alt="Pasta Pic" width='100%' height='auto' />
    </div>
  </div>
@endsection
