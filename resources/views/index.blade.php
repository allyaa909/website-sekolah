<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <div class="background">
            <div class="list d-flex">
            <div class="logo mt-3">
                <img src="/img/logo.svg" style="width: 63px; height: 63px; margin-right: 700px; margin-left: 50px;" alt="">
            </div>
            <a href="">HOME</a>
            <a href="/profil">PROFIL</a> 
            <a href="/kesiswaan">KESISWAAN</a>
            <a href="/informasi">INFORMASI</a>
            <a href="/kontak">KONTAK</a>
        </div>
            <img src="/img/mt1.png" alt="">
        <h1>SMP MUTIARA 4 BANDUNG</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias rem quis architecto.</p>
    </div>
    <div class="informasi">
    <div class="container">
        <div class="row">
            <div class="col">
                 <div class="info shadow-lg p-3 mb-5 text-center" data-aos="zoom-in">
                    <a href="/informasi"><img src="/img/gu.svg" alt=""></a>
                    <h3>DATA GURU</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus id obcaecati voluptatem?</p>
                </div>
            </div>
            <div class="col">
                <div class="info shadow-lg p-3 mb-5 text-center" data-aos="zoom-in">
                    <a href="/profil"><img src="/img/ga.svg" alt=""></a>
                    <h3>GALLERY</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus id obcaecati voluptatem?</p>
                </div>
            </div>
            <div class="col">
                <div class="info shadow-lg p-3 mb-5 text-center" data-aos="zoom-in">
                    <a href="/profil"><img src="/img/f.svg" alt=""></a>
                    <h3>FASILITAS</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus id obcaecati voluptatem?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
  <div class="tentang" data-aos="fade-up" data-aos-duration="3000"style="margin-top: 100px;">
    <div class="row">
      <div class="col">
        <img src="/img/img1.png" alt="">
      </div>
      <div class="col">
        <h2>TENTANG KAMI</h2>
        <div class="line" style="margin-top: 20px;"></div>
        <p>SMP MUTIARA 4 adalah salah satu satuan pendidikan dengan jenjang SMP di CAMPAKA, Kec. Andir, Kota Bandung, Jawa Barat. Dalam menjalankan kegiatannya, SMP MUTIARA 4 berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>
        <div class="btn btn-dark" style="background-color:  #2E99A5; color: white; margin-top: 10px;">READ MORE</div>
    </div>
  </div>
 </div>
</div>
<div class="presentase">
  <div class="container text-center">
    <div class="row">
      <div class="col mt-4">
        <h2>43</h2>
        <p>JUMLAH GURU</p>
      </div>
    <div class="col mt-4">
        <h2>807</h2>
        <p>JUMLAH PESERTA DIDIK</p>
    </div>
    <div class="col mt-4">
        <h2>21</h2>
        <p>JUMLAH KELAS</p>
    </div>
    </div>
  </div>
</div>
<div class="judul" style="margin-left: 50px; margin-top: 70px;">
    <div class="row" style="">
      <div class="col" style="margin-left: 150px;">
        <p id="events">BERITA</p>
        <div class="line4"></div>
      </div>
      <div class="col" style="margin-left: 500px;">
        <a href="/informasi" class="btn btn-dark" id="btn4" style="margin-top: 50px; width: 170px;">SEE ALL POST</a>
      </div>
    </div>
    </div>
    <div class="line5"></div>
<div class="container" style="margin-top: 70px;">
  @foreach ($news as $new)  
    <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="col-sm-8">
        <div class="event1" style="width: 600px;">
          <p id="je">{{ $new->judul }}</p>
          <p>{{ $new->deskripsi }}</p>
          <a href="/informasi" class="btn btn-dark bg-dark mt-3">READ MORE</a>
        </div>
      </div>
      <div class="col-sm-3" style="margin-right: 70px;">
        <img src="{{ Voyager::image($new->img) }}" style="margin-bottom: 78px;" alt="">
      </div>
    </div>
  @endforeach
</div>
<footer class="bg-dark text-center text-white" style="margin-top: 100px;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Smpn mutiara 4</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>