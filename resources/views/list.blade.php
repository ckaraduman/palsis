@extends('layouts.temp')
@section('title','Müşteri Listeleme Sayfası')
@section('content')

    <!-- iki taraftan dar-ortada sütunların ve tablonun oluşmasını sağlar -->
    <div class="container mt-4">

        <div class="col-md-12">
        <h1>Müşteri Listesi - Cem İlker Karaduman</h1>
        <div align="right">
          <a href="#">
            <button class="btn btn-success">Yeni Ekle</button>
          </a>
        </div>
        <br>
          <table class="table table-striped">
            <thead>
              <tr><tr>

                <th>TC Kimlik No</th>

              </tr>
            </thead>
            <tbody>
              @foreach($data as $key)
              <tr>

                <th>{{$key->TcKimlik}}</th>

              </tr>
              @endforeach
            </tbody>

          </div>
        </div>
@endsection
