@extends('layouts.navbar')
@section('content')
<link rel="stylesheet" href="/css/kontak.css">  
<div class="kontak">
  <h2 class="text-center">HUBUNGI KAMI</h2>
  <div class="linek"></div>
  <p class="text-center" id="hub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur aliquam dolor, non cum repellendus nobis blanditiis eius!</p>
<div class="container">
  <div class="row mt-5">
  <div class="col ms-5">
    <div class="contact shadow " data-aos="zoom-in">
      <i class="fa-solid fa-location-dot fa-3x" style="color:#2E99A5; margin-left: 120px;"></i>
      <h5 style="margin-left: 103px;">ALAMAT</h5>
      <p class="text-center" style="margin-left: 10px;">Jl. Raya Cibeureum No.10, RT.01/RW.01, Campaka, Kec. Andir, Kota Bandung, Jawa Barat 40184</p>
    </div>
  </div>
  <div class="col ms-5">
    <div class="contact shadow" data-aos="zoom-in">
      <i class="fa-solid fa-phone fa-3x" style="color:#2E99A5; margin-left: 120px;"></i>
      <h5 class="text-center">TELEPON</h5>
      <div class="telp">
      <p class="text-center">(022) 86062886</p>
      <p class="text-center"> (022) 86062886</p>
    </div>
    </div>
  </div>
  <div class="col ms-3">
    <div class="contact shadow" data-aos="zoom-in">
      <i class="fa-solid fa-envelope fa-3x" style="color:#2E99A5;  margin-left: 120px;"></i>
      <h5 class="text-center" style="margin-left: 10px;">EMAIL</h5>
      <p class="text-center" style="margin-left: 15px; font-size: 17px;">smpmutiara4@gmail.com</p>
    </div>
  </div>
</div>
<div class="r-sosmed d-flex">
<div class="c-sosmed"><a href=""><i class="fa-brands fa-facebook-f fa-1x" style="color: white; margin-left: 20px; margin-top: 16px;"></i></a></div>
<div class="c-sosmed"><a href=""><i class="fa-brands fa-twitter" style="color: white; margin-left: 18px; margin-top: 17px;"></i></a></div>
<div class="c-sosmed"><a href=""><i class="fa-brands fa-instagram" style="color: white; margin-left: 18px; margin-top: 17px;"></i></a></div>
<div class="c-sosmed"><a href=""><i class="fa-brands fa-youtube" style="color: white; margin-left: 16px; margin-top: 17px;"></i></a></div>
</div>
</div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.850597733346!2d107.5663549144797!3d-6.908461795008216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e612db415533%3A0x87cd10011dc2a713!2sSekolah%20Menengah%20Pertama%20Mutiara%204%20Bandung!5e0!3m2!1sid!2sid!4v1652151158931!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    @endsection