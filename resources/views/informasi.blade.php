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
<div class="row">
  <div class="col-sm-8">
    <div class="event1" style="width: 600px;">
      <p id="je">LOREM IPSUM</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus alias eius mollitia animi, aliquid cum tempore deleniti ab quisquam excepturi, et corrupti vero incidunt nemo! Enim eveniet necessitatibus tenetur sed!</p>
      <a href="" class="btn btn-dark bg-dark mt-3">READ MORE</a>
    </div>
    <div class="event1" style="width: 600px; margin-top: 100px;">
      <p id="je">LOREM IPSUM</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae eos dolorem, sapiente cupiditate dicta rem aut nam, facere incidunt natus neque ab? Deserunt, veniam in? Dolores vero harum maiores consequuntur accusantium hic iure mollitia omnis quisquam.</p>
      <a href="" class="btn btn-dark bg-dark mt-3">READ MORE</a>
    </div>
  </div>
  <div class="col-sm-3" style="margin-right: 70px;">
    <img src="/img/e1.png" style="margin-bottom: 78px;" alt="">
    <img src="/img/e2.png" style="width: 377px;" alt="">
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
