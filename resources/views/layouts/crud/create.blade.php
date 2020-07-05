@extends('layouts.master')

@section('content')
    <div class="card">
      <form action="{{ url('/artikel') }}" method="POST" class="m-3">
        @csrf
        <label for="judulartikel">Judul Artikel</label>
        <input type="text" name="judul" class="form-control mb-3">
        <label for="isiartikel">Isi Artikel</label>
        <textarea name="isi" id="" cols="30" rows="10" class="form-control mb-3"></textarea>
        <label for="tagartikel">Tag Artikel</label>
        <input type="text" name="tag" class="form-control mb-3">
        <br>
        <button class="btn btn-primary" type="submit">Upload Artikel</button>
      </form>
    </div>
@endsection