<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page"><strong>List Semua Produk</strong></li>
            </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Cari Fashion mu...">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>

    <section class="produk mt-4">
        <div class="row mt-3">
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card text-center">
                        <img src="{{ url('assets/baju') }}/{{ $product->gambar }}" class="img-fluid imageProduk" alt="">
                        <div class="card-body">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <h5><strong>{{ $product->nama }}</strong></h5>
                                <p>Rp. {{ number_format($product->harga) }}</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="" class="btn btn-dark btn-block">Detail</a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
                <div class="col">
                    {{ $products->links() }}
                </div>
            </div>
    </section>
</div>
