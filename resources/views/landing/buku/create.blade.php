@extends('main')

@section('content')
    <div class="container my-5">
        <div class="form">
            <h2>Create Buku</h2>
        </div>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Judul</label>
                <input type="text" class="form-control" id="" aria-describedby="" name="judul">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="" name="penulis">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="" name="penerbit">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Tahun Terbit</label>
                <input type="number" class="form-control" id="" name="tahun_terbit">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cover</label>
                <input type="text" class="form-control" id="" name="cover">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
