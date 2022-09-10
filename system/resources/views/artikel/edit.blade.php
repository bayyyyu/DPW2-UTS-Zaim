@extends ('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <a href="{{ url('admin/artikel') }}" class="btn btn-primary btn-sm "><i class="fas fa-arrow-left"> Kembali</i></a>
      <div class="card">
        <div class="card-header">
          <strong>Edit Artikel</strong>
        </div>
        <div class="card-body">
          <form action="{{ url('admin/artikel', $artikel->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
              <label for="" class="control-label">Nama Pemain</label>
              <input type="text" class="form-control" name="namapemain" value="{{ $artikel->namapemain }}">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Posisi</label>
              <input type="text" class="form-control" name="posisi" value="{{ $artikel->posisi }}">
            </div>
            <div class="form-group ">
              <label for="Penulis" class="control-label">Penulis</label>
              <input type="text" class="form-control" name="penulis" value="{{ $artikel->penulis }}">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Deskripsi</label>
              <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"> {{ $artikel->deskripsi }}
              </textarea>
            </div>

            <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
