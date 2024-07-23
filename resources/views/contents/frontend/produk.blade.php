@extends('layouts.frontend')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                <h4 class="mb-4"><b>{{ $title }}</b></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ url_images('gambar', $edit->gambar) }}" class="img-fluid w-100 mb-3">
                    </div>
                    <div class="col-sm-8 detail-produk">
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Kategori</b></div>
                            <div class="col-sm-8">
                                <a class="text-produk" href="{{ url('kategori/'.$edit->id) }}">
                                    {{ $edit->nama_kategori }}
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Nama Produk</b></div>
                            <div class="col-sm-8"><?= $edit->nama_produk;?></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Harga jual</b></div>
                            <div class="col-sm-8 text-success"><h4><b>Rp<?= number_format($edit->harga_jual);?>,-</b></h4></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b>Deskripsi</b></div>
                            <div class="col-sm-8"><?= $edit->deskripsi;?></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><b></b></div>
                            <div class="col-sm-8">
                                <a class="btn btn-instagram btn-md" 
                                    href="{{ $edit->link_instagram }}" target="_blank" role="button">
                                    <i class="fab fa-instagram"></i> Link Instagram    
                                </a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection

@section('style')
<style>
.btn-instagram {
    background: linear-gradient(45deg, #833ab4, #fd1d1d, #fcb045);
    color: white;
    border: none;
}
.btn-instagram:hover {
    background: linear-gradient(45deg, #833ab4, #fd1d1d, #fcb045);
    opacity: 0.8;
}
</style>
@endsection