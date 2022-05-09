@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="/css/kontak.css">
    <div class="container">
        <div class="row">
          <div class="col">
              <div class="kiri text-center">
                <h2>SMP MUTIARA 4 BANDUNG</h2>
                
                <img src="/img/logo.svg" alt="">
            </div>
          </div>
          <div class="col">
            <div class="kanan">
                <h2 class="text-center">KONTAK</h2>
                <div class="telepon" style="margin-left: 175px; margin-top: 35px;">
                    <p>TELEPON</p>
                    <div class="garis"></div>
                    <p>FAX</p>
                </div>
                <div class="socialmedia" style="margin-left: 175px;">
                  <P>SOCIAL MEDIA</P>
                  <div class="list">
                    <a href="#"><i class="fa-solid fa-envelope"></i>example@gmail.com</a>
                    <a href="#"><i class="fa-brands fa-instagram"></i>exampleofficial</a>
                    <a href="#"><i class="fa-brands fa-facebook"></i>exampleFB</a>
                    <a href="#"><i class="fa-brands fa-twitter"></i>exampleTW</a>
                  </div>
                  <div class="Alamat">
                    <p>ALAMAT</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, sapiente?</p>
                  </div>
                </div>
            </div>
          </div>
          <div class="form">
            <h1 class="text-center">HUBUNGI KAMI</h1>
            <div class="form-name">
              <input type="text" class="form-control " placeholder="Nama">
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <input type="text" class="form-control mt-3" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" class="form-control mt-3" placeholder="Body"></textarea>
          </div>
        </div>
    </div>
    @endsection