@extends('layouts.navbar')
@section('content')
<div class="judul" style=" margin-top: 50px;">
    <div class="col" style="margin-left: 150px;">
      <p id="events" style="margin-left: 550px;">BERITA</p>
      <div class="line4" style="margin-left: 400px;"></div>
    </div>
  </div>
  </div>
<div class="container" style="margin-top: 70px;">
  @foreach ($news as $new)
      
 
<div class="row">
  <div class="col-sm-8">
    <div class="event1" style="width: 600px;">
      <p id="je">{{ $new->judul }}</p>
      <p>{{ $new->deskripsi }}</p>
    </div>
  </div>
  <div class="col-sm-3" style="margin-right: 70px; ">
    <img src="{{ Voyager::image($new->img) }}"width="370" style="margin-bottom: 40px;">
  </div>
</div>
@endforeach
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
