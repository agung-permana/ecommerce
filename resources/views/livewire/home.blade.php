<div class="container">
    {{-- banner --}}
    <div class="banner text-center">
        <img src="{{ url('assets/slider1.jpg') }}" alt="">
    </div>

    <section class="kategori mt-5">
        <h3 class="mt-3"><strong>Pilih Kategori</strong></h3>
        <div class="row mt-3">
            @foreach ($categories as $category)
            <div class="col">
                <div class="card shadow">
                    <img src="{{ url('assets/kategori') }}/{{ $category->gambar }}" class="img-fluid" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="produk mt-5">
        <h3 class="mt-4">
            <strong>Produk terbaru</strong>
            <a href="{{ url('product') }}" class="btn btn-dark float-right"><strong>Semua Produk</strong></a>
        </h3>
        <div class="row mt-4">
            @foreach ($products as $product)
            <div class="col">
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
                                    <a href="" class="btn btn-dark btn-block"><strong>Detail</strong></a>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>


