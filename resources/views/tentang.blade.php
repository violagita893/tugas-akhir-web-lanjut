@extends('layout.navbar')

@section('konten')

  {{-- <section class="content"> --}}
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>About Us Section</title>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="stylesheet" href="{{asset('build/assets/css/tentang.css')}}">


    </head>
    <body>
      <div class="section">
        <div class="container">
          <div class="content-section">
            <div class="title">
              <h1>Tentang RUMAH PISANG</h1>
            </div>
            <div class="content">
              <h3>RUMAH PISANG NOMER 1 DI INDONESIA</h3>
              <p> Pisang adalah kelompok tanaman herba yang berbuah dan diketahui berasal dari kawasan tropis. Tanaman ini juga tergolong dalam kelompok tumbuhan monokotil atau berbiji tunggal. Pisang bukanlah pohon karena tidak memilki batang berkayu.
              </p>
              <div class="button">
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="social">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="image-section">
            <img src="{{asset('build/assets/img/logoS.png')}}" alt="">
          </div>
        </div>
        
      </div>
    </body>
    </html>
  {{-- </section> --}}

@endsection
