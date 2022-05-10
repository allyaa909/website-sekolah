@extends('layouts.navbar')
@push('css-top')
<link rel="stylesheet" href="/css/ekskull.css">
@endpush
@section('content')
<div class="ekskull text-center" style="margin-top: 50px;">
<h2>EKSTRAKULIKULLER</h2>
<div class="linek" style="margin-left: 500px; margin-top: 30px;"></div>
</div>
<div class="containerA">
    <div class="ekskul">
        @foreach ($ekskulls as $ekskull)    
        <div class="ekskul-1 text-center">
            <img src="{{ Voyager::image($ekskull->img) }}" width="70" class="mt-4 mb-3" style="color: #2E99A5;">
            <h2>{{ $ekskull->nama }}</h2>
        </div>
        @endforeach
    </div>
</div>
@endsection