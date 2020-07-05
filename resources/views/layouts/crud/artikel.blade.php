@extends('layouts.master')

@section('content')
<a href="{{ url('/artikel/create') }}"class="btn btn-primary btn-lg mb-4">Buat Artikel</a>
<div class="row">
  @foreach ($artikel as $item)
  <div class="card mb-2 col-6">
    <div class="card-body text-center">
      <h4 class="card-title"> {{ $item->judul }} </h5>
      <p class="card-text"> {{ $item->isi }} </p>
      <a href="{{ url('/artikel/'.$item->id) }}"class="btn btn-success">Detail Artikel</a>
      <hr>
      <a href="{{ url('/artikel/'.$item->id.'/edit') }}"class="btn btn-warning">Edit Artikel</a>
      <form action="{{ url('/artikel/'.$item->id) }}" method="post" class="d-inline">
        {{ method_field('delete') }}
        @csrf
        <button type="submit" class="btn btn-danger">Delete Artikel</button>
      </form>
    </div>
  </div>
  @endforeach
</div>
@endsection


@push('scripts')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush