
@extends('layouts.master')


@section('content')
<body style="background-image: url('{{ asset('img/background.jpg')}}'); ">
<section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <br><br>
      <h1 style= "color:white; text-decoration-style: double; font-style: oblique; font-size: 80px">Welcome </h1>
      <h2 style= "color:white; text-decoration-style: double; font-style: oblique; font-size: 40px">Join us</h2>
      <p style= "color:aqua; text-decoration-style: double; font-style: italic; font-size: 14px; text-align: left;">
        This is a Laravel demo project for Stock Management. This project is developed by Sumaiya Tarannum Noor.
      </p>
    </div>
  </section>
</body>

@endsection  
