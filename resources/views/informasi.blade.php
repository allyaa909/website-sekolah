@extends('layouts.navbar')
@push('css-top')
<link rel="stylesheet" href="/css/informasi.css">
@endpush
@section('content')
      <p id="events" style="margin-left: 700px; margin-top: 40px;">BERITA</p>
      <div class="line4" style="margin-left: 540px;"></div>
   <div class="berita" style="margin-top: 80px;" data-aos="zoom-in">
    <div class="container">
     <div class="row">
       @foreach ($news as $new)
       <div class="col-md-4 text-center">
        <img src="{{ Voyager::image($new->img) }}" style="margin-bottom: 78px;" alt="">
        <h3>{{ $new->judul }}</h3>
        <p>{{ $new->deskripsi }}</p>
      </div>
       @endforeach
     </div>
   </div>
  </div>
<div class="judul" style=" margin-top: 150px;">
  <div class="col" style="margin-left: 150px;">
    <p id="events" style="margin-left: 550px;">DATA GURU</p>
    <div class="line4" style="margin-left: 440px;"></div>
  </div>
</div>
<div class="container" style="margin-bottom: 100px;">
  <table class="table" style="margin-top: 100px; margin-bottom: 100px;">
    <thead>            
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIP</th>
      <th scope="col">Foto</th>
    </tr>
        </thead>
        <tbody>
            @foreach ($gurus as $item)
            <tr>
                <td></td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nip }}</td>
                <td> <img src="{{ Voyager::image($item->img) }}"width="100"></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
    @endsection
