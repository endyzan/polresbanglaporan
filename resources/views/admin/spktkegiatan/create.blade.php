@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Tambah Foto Kegiatan</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.spktkegiatan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Input Foto Sarana -->
                        <div class="mb-3">
                            <label for="foto_sarana" class="form-label">Foto Kegiatan</label>
                            <input type="file" class="form-control @error('foto_spktkegiatan') is-invalid @enderror" 
                                id="foto_spktkegiatan" name="foto_spktkegiatan" accept="image/*" required>
                            @error('foto_spktkegiatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tombol Simpan & Batal di Samping -->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-save">Simpan</button>
                            <a href="{{ route('admin.spktkegiatan.index') }}" class="btn btn-cancel">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
