
@vite(['resources/sass/app.scss','resources/js/app.js'])
<link rel="stylesheet" href="{{asset('build/assets/css/form.css')}}">


  <h1>Tambah Prodak</h1>
<div class="container">
<form action="#" method="POST" enctype="multipart/form-data">
   {{ csrf_field() }}

  <div class="mb-3">
    <label for="nama_prodak" class="form-label">Nama Prodak</label>
    <input type="text" class="form-control" name="nama_prodak" id="nama_prodak">
  
  </div>
  <div class="mb-3">
    <label for="keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" name="keterangan" id="keterangan">
  </div>  
  <div class="input-group mb-3">
    <input type="file" class="form-control" id="gambar" name="gambar">
    <label class="input-group-text" for="gambar">Upload</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>