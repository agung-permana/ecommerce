<div class="container">
    <div class="row mt-3">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('product') }}" class="text-dark">Produk</a></li>
                    <li class="breadcrumb-item active text-dark" aria-current="page"><strong>Detail Produk</strong></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-produk text-center">
                <div class="card-body">
                    <img src="{{ url('assets/baju') }}/{{ $product->gambar }}" class="img-fluid imageProduk" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <h2>
                <strong>{{ $product->nama }}</strong>
                @if ($product->is_ready == 1)
                    <span class="badge badge-sm badge-success"><i class="fas fa-check"></i> Ready Stok</span>    
                @else
                    <span class="badge badge-sm badge-danger"><i class="fas fa-times"></i> Stok Kosong</span>    
                @endif
            </h2>
            <h4>Rp. {{ number_format($product->harga) }}</h4>
            <hr>
            <div class="row">
                <form wire:submit.prevent="masukankeranjang" action="" method="post">
                    <table class="table" style="border-top: hidden">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>{{ $product->category->nama }}</td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td>{{ $product->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ $product->berat }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesanan</td>
                            <td>:</td>
                            <td>
                                <input type="number" wire:model="jumlah_pesanan" class="form-control col-md-3" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-dark btn-block mt-3" @if ($product->is_ready !== 1) disabled @endif>Masukan ke Keranjang</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
