@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row" id="app">
    <form action="/post" method="POST" class="col-md-6">
        <div class="form-group">
            <label for="formGroupExampleInput">Gönderi Başlığı</label>
            <input type="text" class="form-control" name="title" id="formGroupExampleInput" required="true" placeholder="Gönderi Başlığı">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gönderi İçeriği</label>
            <textarea class="form-control" name="content" id="formGroupExampleInput2" required="true" placeholder="Gönderi İçeriği" rows="5"></textarea>
        </div>
        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
        @csrf
        <button class="btn btn-primary">Gönder</button>
    </form>
  </div>
</div>
@endsection