@extends('layout.navbar')

@section('konten')
<link rel="stylesheet" href="{{asset('build/assets/css/card.css')}}">



  <section class="content">
   
    <div class="container my-5">
      {{-- <h1 class="text-center">Prodak RUMAH PISANG</h1> --}}
      <div class="row row-cols-1 row-cols-md-3 g-4 py-2">
        @foreach ($prodak as $prd )
      <div class="col">
      <div class="card" style="width: 18rem; ">
        <img src="storage/prodak_gambar/{{$prd->gambar}}" class="gambar" name="gambar" id="gambar" alt="...">
        <div class="card-body">
          
          <h5 class="card-title" name="nama_prodak"><td>{{$prd->nama_prodak}}</td></h5>
          <p class="card-text" name="keterangan"><td>{{$prd->keterangan}}</td></p>
          <div class="d-flex justify-content-around mb-2 ">
          <a href="{{ url('edit-prodak/'. $prd->ID)}}" class="btn btn-primary">Edit</a> 
          <a href="{{ url('hapus-prodak/'. $prd->ID)}}" class="btn btn-primary">Delete</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    
    </div> 
    <a href="/tambah-prodak" class="btn btn-primary">tambah</a>

      
    </div>
  </section>

  {{-- <div class="modal fade" id="modalDelete">
      <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Yakin akan menghapus data ini?</h4>
              </div>
              <div class="modal-footer">
                <form id="formDelete" action="" method="post">
                  <a href="{{ url('edit-prodak/'. $prd->ID)}}" class="btn btn-primary">Tidak</a> 
                  <a href="{{ url('hapus-prodak/'. $prd->ID)}}" class="btn btn-primary">Ya</a>
                </form>
              </div>
            </div>
      </div>
  </div> --}}

@endsection
