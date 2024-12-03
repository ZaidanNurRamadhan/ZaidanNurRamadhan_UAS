@extends('layouts')
@section('content')
<h2>Tambah Transaksi</h2>
<div class="card">
    <div class="card-header bg-white">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-danger">Kembali</a>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('transaksi.store') }}">
            @csrf
            <div class="d-flex flex-column gap-4 mb-4">
                <div class="form-group">
                    <label for="tanggal_pembelian">Tanggal Pembelian</label>
                    <input type="date" class="form-control" name="tanggal_pembelian" value="{{ old('tanggal_pembelian') }}" required>
                </div>
            </div>
            <h6>Produk yang dibeli</h6>
            <div class="accordion mb-4" id="accordionItem">
                <!-- Item #1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="true">
                            Item #1
                        </button>
                    </h2>
                    <div id="item1" class="accordion-collapse collapse show" data-bs-parent="#accordionItem">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4 mb-4">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk1" value="{{ old('nama_produk1') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" name="harga_satuan1" value="{{ old('harga_satuan1') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">x</span>
                                        <input type="number" class="form-control" name="jumlah1" value="{{ old('jumlah1') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subtotal</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="subtotal1" value="{{ old('subtotal1') }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item #2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">
                            Item #2
                        </button>
                    </h2>
                    <div id="item2" class="accordion-collapse collapse" data-bs-parent="#accordionItem">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4 mb-4">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk2" value="{{ old('nama_produk2') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" name="harga_satuan2" value="{{ old('harga_satuan2') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">x</span>
                                        <input type="number" class="form-control" name="jumlah2" value="{{ old('jumlah2') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subtotal</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="subtotal2" value="{{ old('subtotal2') }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item #3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">
                            Item #3
                        </button>
                    </h2>
                    <div id="item3" class="accordion-collapse collapse" data-bs-parent="#accordionItem">
                        <div class="accordion-body">
                            <div class="d-flex flex-column gap-4 mb-4">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk3" value="{{ old('nama_produk3') }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="number" class="form-control" name="harga_satuan3" value="{{ old('harga_satuan3') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">x</span>
                                        <input type="number" class="form-control" name="jumlah3" value="{{ old('jumlah3') }}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Subtotal</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" name="subtotal3" value="{{ old('subtotal3') }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Harga Total</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" name="total_harga" value="{{ old('total_harga') }}" readonly>
                </div>
            </div>
            <div class="form-group">
                <label>Bayar</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control" name="bayar" value="{{ old('bayar') }}" required>
                </div>
            </div>
            <div class="form-group">
                <label>Kembalian</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="kembalian" value="{{ old('kembalian') }}" readonly>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

{{-- customjs --}}
<script>
$(document).ready(function() {
    function calculateSubtotal(item) {
        const hargaSatuan = parseInt($('input[name="harga_satuan'+item+'"]').val()) || 0;
        const jumlah = parseInt($('input[name="jumlah'+item+'"]').val()) || 0;
        const subtotal = hargaSatuan * jumlah;
        $('input[name="subtotal'+item+'"]').val(subtotal);
        calculateTotal();
    }

    function calculateTotal() {
        let total = 0;
        for (let i = 1; i <= 3; i++) {
            total += parseInt($('input[name="subtotal'+i+'"]').val()) || 0;
        }
        $('input[name="total_harga"]').val(total);
    }

    $('input[name="harga_satuan1"], input[name="jumlah1"], input[name="harga_satuan2"], input[name="jumlah2"], input[name="harga_satuan3"], input[name="jumlah3"]').on('input', function() {
        calculateSubtotal(1);
        calculateSubtotal(2);
        calculateSubtotal(3);
    });

    $('input[name="bayar"]').on('input', function() {
        const totalHarga = parseInt($('input[name="total_harga"]').val()) || 0;
        const bayar = parseInt($('input[name="bayar"]').val()) || 0;
        const kembalian = bayar - totalHarga;
        $('input[name="kembalian"]').val(kembalian);
    });
});
</script>
@endsection
