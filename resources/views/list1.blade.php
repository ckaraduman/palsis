@extends('layouts.temp')
@section('title','Müşteri Listeleme Sayfası')
@section('content')

    <!-- iki taraftan dar-ortada sütunların ve tablonun oluşmasını sağlar -->
    <div class="container mt-4">

        <div class="col-md-12">
        <h1>Müşteri Listesi - Palmet</h1>
        <div align="right">
          <!-- <a href="{{route('book')}}"> -->
          <a href="#">
            <button class="btn btn-success">Yeni Ekle</button>
          </a>
        </div>
        <br>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Kitap Adı</th>
                <th>Yazar</th>
                <th>Konu</th>
                <th>Kitap Türü</th>
                <th>Sayfa Sayısı</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($books as $key)
              <tr>
                <th>{{$loop->iteration}}</th>
                <th>{{$key->book_name}}</th>
                <th>{{$key->author}}</th>
                <th>{{$key->content}}</th>
                <th>{{$key->type}}</th>
                <th>{{$key->number_of_pages}}</th>
                <th width="10"><a href=""><button class="btn btn-primary">Düzenle</button></th>
                <th width="10"><a href=""><button class="btn btn-primary">Sil</button></th>
              </tr>
              @endforeach
            </tbody>

          </div>
        </div>
@endsection
