@extends('layouts.navbar')
@section('content')
    
<link rel="stylesheet" href="/css/profil.css">
<div class="container">
    <div class="cont1">
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
    <div class="cont1">
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
    <div class="container-fluid" style="background-color: #000000; color:#ffffff;">
        <div class="container">
            <div class="cont2">
                <div class="row vimi mt-5 text-center">
                    <div class="col-lg-5 my-3 px-5">
                        <h2>VISI</h2>
                        <div class="linevm"></div>
                        <div class="visi">
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-5 my-3 px-5">
                        <div class="misi">
                        <h2>MISI</h2>
                        <div class="linevm"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam eum eveniet quia 
                            illum voluptate cum reiciendis maiores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 100px;">
        <div class="cont-4 mt-5">
            <div class=" mb-5"><h2 class="text-center">FASILITAS</h2>
                <div class="lines" style="margin-left: 460px; margin-top: 20px;"></div>
                <table class="table" style="margin-top: 50px;">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fasilitas as $item)
                            
                        <tr class="mt-3">
                            <th scope="row">1</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td> <img src="{{ Voyager::image($item->img) }}"width="300"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
    </div>
<div class="container-fluid" style="background-color: #000000; color:#ffffff; margin-top: 250px;">
    <div class="cont3 mt-5">
        <div class="row">
            <div class="col-lg-12 text-center py-3">
                <h2>GALERI</h2>
                <hr size="7" width="20%" style="color: #2E99A5; margin-left: 40%;">
            </div>
        </div>
        <div class="row text-center pt-3 pb-5">
            <div class="col-lg-4">
                huhuhu
                
            </div>
            <div class="col-lg-4">
               hhahaha
            </div>
            <div class="col-lg-4">
                uyuyuyu
            </div>
        </div>
    </div>
</div>
<img src="/img/Polygon 1.svg" width="100%" height="100%"/>


@endsection