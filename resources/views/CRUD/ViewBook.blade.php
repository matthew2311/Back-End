@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 25px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <img src="{{('/storage/').$book->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$book->nama}} - <span>({{$book->stock}})</span></h5>
                  <p class="card-text">Harga: Rp.{{$book->harga}}</p>
                  <p class="card-text">Penulis: {{$book->penulis}}</p>
                  <p class="card-text"><small class="text-muted"><a href="{{route('ViewAll')}}">CLICK ME TO RETURN</a></small></p>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection
