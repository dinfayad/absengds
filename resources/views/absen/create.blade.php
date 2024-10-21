<!-- resources/views/medicine/create.blade.php -->

@extends('template.app')

@section('content')
  <form method="POST" action="{{ route('gds.store') }}" class="card p-5">
    @csrf

    @if(Session::get('success'))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
      @endif
      @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif

    <div class="mb-3 row">
      <label for="name" class="col-sm-2 col-form-label">Nama:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
      <div class="col-sm-10">
        <select class="form-select" id="divisi" name="divisi" required>
          <option selected disabled hidden>Pilih</option>
          <option value="dh">DH</option>
          <option value="mpr">MPR</option>
          <option value="div 1">Div 1</option>
          <option value="div 2">Div 2</option>
          <option value="div 3">Div 3</option>
          <option value="div 4">Div 4</option>
          <option value="div 5">Div 5</option>
          <option value="div 6">Div 6</option>
          <option value="div 7">Div 7</option>
          <option value="div 8">Div 8</option>
          <option value="div 9">Div 9</option>
          <option value="div 10">Div 10</option>
        </select>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
      <div class="col-sm-10">
        <select class="form-select" id="posisi" name="posisi" required>
          <option selected disabled hidden>Pilih</option>
          <option value="depan">Depan</option>
          <option value="belakang">Belakang</option>
        </select>
      </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
  </form>
@endsection