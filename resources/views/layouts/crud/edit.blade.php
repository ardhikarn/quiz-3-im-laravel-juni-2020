@extends('layouts.master')

@section('content')
    <h1>EDIT ARTIKEL</h1>
    <div class="card">
      <form action="{{ url('/artikel/'.$id) }}" method="POST" class="m-3">
        {{ method_field('put') }}
        @csrf
        <input hidden name="id" value={{ $id }}>
        <label for="judulartikel">Judul Artikel</label>
        <input type="text" name="judul" class="form-control mb-3" value="{{ $output->judul }}">
        <label for="isiartikel">Isi Artikel</label>
        <input name="isi" id="" cols="30" rows="10" class="form-control mb-3" value="{{ $output->isi }}" type="text">
        <label for="tagartikel">Tag Artikel</label>
        <input type="text" name="tag" class="form-control mb-3" value="{{ $output->tag }}">
        <br>
        <button class="btn btn-warning" type="submit">Update Artikel</button>
      </form>
    </div>
@endsection