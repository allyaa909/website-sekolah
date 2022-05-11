@extends('layouts.navbar')
@push('css-top')
<link rel="stylesheet" href="/css/profil.css">
@endpush
@section('content')  
<div class="container">
    <div class="cont1"data-aos="fade-left">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <h2>SEJARAH SINGKAT</h2>
               <div class="lines"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quidem vel cum, itaque illo facilis nostrum neque ad incidunt similique possimus necessitatibus! Maxime magnam molestias consequuntur corrupti, placeat reprehenderit, tenetur facilis sit aperiam odio ad officiis rerum dolor provident quos dicta, consectetur ea veritatis harum. Tenetur iste ipsam nam sunt omnis distinctio vitae facere vel. Voluptate, 
                    sunt ullam iste aliquam dolore nostrum. Distinctio ut, quisquam quos aliquid quidem exercitationem accusantium?</p>
            </div>
            <div class="col-lg-6 mt-5">
                <img src="/img/1 1.svg" width="530px">
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 120px;">
    <div class="cont1" data-aos="fade-right">
        <div class="row">
            <div class="col-lg-6 mt-5">
                <img src="/img/2 1.svg" width="550px">
            </div>
            <div class="col-lg-6 mt-5">
                <h2>TUJUAN</h2>
                <div class="lines"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, quidem vel cum, itaque illo facilis nostrum neque ad incidunt similique possimus necessitatibus! Maxime magnam molestias consequuntur corrupti, placeat reprehenderit, tenetur facilis sit aperiam odio ad officiis rerum dolor provident quos dicta, consectetur ea veritatis harum. Tenetur iste ipsam nam sunt omnis distinctio vitae facere vel. Voluptate, 
                    sunt ullam iste aliquam dolore nostrum. Distinctio ut, quisquam quos aliquid quidem exercitationem accusantium?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="quotes">
        <h3 class="text-center">“Bila kaum muda yang telah belajar di sekolah dan menganggap dirinya terlalu tinggi dan pintar untuk melebur dengan masyarakat yang bekerja dengan cangkul dan hanya memiliki cita-cita yang sederhana, maka lebih baik pendidikan itu tidak diberikan sama sekali” - Tan Malaka</h3>
    </div>
    <div class="container" style="margin-top: 100px;">
        <div class="cont4 mt-5">
            <h2 class="text-center">FASILITAS KAMI</h2>
            <div class="lines" style="margin-left: 460px; margin-top: 20px;"></div>
            <p class="text-center" id="fas-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptate eveniet quibusdam ratione placeat temporibus debitis? Beatae!</p>
                        <div class="row">
                @foreach ($fasilitas as $item)
                          <div class="col-md-4" data-aos="zoom-in" style="margin-bottom: 50px;">
                            <img src="{{ Voyager::image($item->img) }}"width="370" style="margin-bottom: 40px;">
                            <div class="dsc d-flex">
                                <i class="fa-regular fa-building fa-3x"></i>
                                <div class="n-fasilitas ms-4">
                                <h5>{{ $item->nama }}</h5>
                                <p>ini adalah {{ $item->nama }} smp mutiara 4 bandung</p>
                            </div>
                            </div>
                        </div>  
                        @endforeach
                    </div>
                </div>
            </div>
    <div class="gallery" style="background-color: #000000; color:#ffffff; margin-top: 50px;">
        <div class="cont3 mt-5">
            <div class="row">
                <div class="col text-center py-3">
                    <h2>GALERI</h2>
                    <hr size="7" width="20%" style="color: #2E99A5; margin-left: 40%;">
                </div>
            </div>
            <div class="container">
           <div class="row">
               @foreach ($galeris as $galeri) 
               <div class="col-md-4">
                   <img src="{{ Voyager::image($galeri->img) }}"width="370" style="margin-bottom: 40px;">
                </div>
                @endforeach
           </div>
        </div>
    </div>
    </div>
    </div>
   <div class="container">
       <div class="visi d-flex" style="margin-top: 70px;">
           <img src="/img/1 1.svg" width="400" alt="">
           <div class="j-visi" style="margin-left: 50px;">
                <h2>VISI</h2>
                <div class="lines" style="margin-top: 20px;"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A repellat nam enim pariatur similique doloribus iusto quasi nisi laudantium quod unde adipisci maxime possimus aliquam, neque corrupti, iure reprehenderit ipsa suscipit optio. Fugit quis aliquid, cumque velit numquam provident rem assumenda mollitia, saepe maxime in nulla atque, tempora corporis blanditiis.</p>
           </div>
        </div>
        <div class="misi d-flex" style="margin-top: 70px; margin-bottom: 100px;">
            <div class="j-misi" style="margin-left: 50px;">
                <h2>MISI</h2>
                <div class="lines" style="margin-top: 20px;"></div>
                <ul style="margin-right: 200px;">
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolore?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolore?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolore?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolore?</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, dolore?</li>
                </ul>
           </div>
           <img src="/img/2 1.svg" width="400" alt="">
        </div>
   </div>
@endsection