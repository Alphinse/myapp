@extends('layout.app')

@section('title', 'Contact')

@section('content')
<div class="container-flex justify-content-center">
    <h1 class=" text-center">Contact Us</h1>
    <form methode="" action="" class="col-md-6 col-lg-8" >
<div class="mb-3">
    <label for="nama" class="form-label">Nama </label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
    <label for="email" class="form-label">Email </label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
<div class="mb-3 form-check">
    <label for="tel" class="form-label">Nomor Telepon</label>
    <input type="tel" class="form-control" id="tel" name="tel" aria-describedby="telHelp">
</div>
<div class="input-group mb-3">
  <input type="file" accept="image/*" capture="environment" class="form-control" id="imageFile">
  <label class="input-group-text" for="imageFile">Upload</label>
</div>
<img id="imagePreview" class="img-thumbnail d-none" alt="Selected Image">
<div class="mb-3">
  <label for="pesan" class="form-label">Pesan</label>
  <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
