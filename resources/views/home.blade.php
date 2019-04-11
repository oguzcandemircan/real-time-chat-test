@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <div class="row" id="app">
    <div class="col-lg-6 col-12">
      <example-component><example-component/>
    </div>
    <div class="col-lg-6 col-12">
      @foreach(App\Post::all() as $post)
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <a href="#" class="btn btn-primary">{{ $post->user->name }}</a>
            </div>
        </div>
      @endforeach
    </div>
  </div>
  <br>
  <hr>
  <div class="row">
    <div class="card col-4" style="border: solid #38c172;">
        <div class="card-body text-center">
            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
            <h4 class="card-title">Sara Rose</h4>
            <p class="card-text">This is basic card with image on top, title, description and button.</p>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <hr>
            <a href="#" class="btn btn-success btn-sm">99+ soruyu doğru cevapladı</a>
            <br>
            <hr>
            <span class="badge badge-secondry">Sanat</span>
            <span class="badge badge-warning">Edebiyat</span>
            <span class="badge badge-primary">Genel Kültür</span>
        </div>
    </div>
    <div class="card col-4">
        <div class="card-body text-center">
            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
            <h4 class="card-title">Hakkı Cloud</h4>
            <p class="card-text">This is basic card with image on top, title, description and button.</p>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <hr>
            <a href="#" class="btn btn-warning btn-sm">2+ soruyu doğru cevapladı</a>
            <hr>
            <span class="badge badge-danger">abaza</span>
            <span class="badge badge-danger">ağzı bozuk</span>
            <span class="badge badge-success">teknoloji</span>
        </div>
    </div>

    <div class="card col-4">
        <div class="card-body text-center">
            <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p>
            <h4 class="card-title">Alexina Graham</h4>
            <p class="card-text">This is basic card with image on top, title, description and button.</p>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star text-warning"></span>
            <span class="fa fa-star"></span>
            <hr>
            <a href="#" class="btn btn-success btn-sm">14+ soruyu doğru cevapladı</a>
            <hr>
            <span class="badge badge-warning">Güzellik Makyaj</span>
            <span class="badge badge-primary">Sağlık</span>
        </div>
    </div>
  </div>
  <hr>
  <div class="card-body text-center bg-white">
      <!-- <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_03.png" alt="card image"></p> -->
      <h4 class="card-title">Türkiyenin Başkenti Neresidir ?</h4>
      <p class="card-text">This is basic card with image on top, title, description and button.</p>
      <span class="fa fa-star text-warning"></span>
      <span class="fa fa-star text-warning"></span>
      <span class="fa fa-star text-warning"></span>
      <span class="fa fa-star text-warning"></span>
      <span class="fa fa-star"></span>
      <hr>
      <a href="#" class="btn btn-success btn-sm">14+ soruyu doğru cevapladı</a>
      <hr>
      <span class="badge badge-warning">Güzellik Makyaj</span>
      <span class="badge badge-primary">Sağlık</span>
  </div>
</div>
@endsection