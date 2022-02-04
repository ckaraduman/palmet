@extends("layouts.temp")
@section("title","Karaduman")
@section("content")
        <div class="container mt-4">
<h1>CEM İLKER KARADUMAN</h1>
<hr>
<h2>Kişi Ekle</h2>
  <div class="col-md-6">
<form action="{{route('kisiekle')}}" method="post">
  @CSRF
  <div class="mb-3">
  <input class="form-control" type="text" name="name" placeholder="Name">
  </div>
  <div class="mb-3">
  <input class="form-control" type="text" name="surname" placeholder="Surname">
  </div>
  <div class="mb-3">
  <input class="form-control" type="number" name="phone" placeholder="Phone">
  </div>
  <input class="form-control" type="submit" value="Kaydet">
</form>
  </div>

@endsection
