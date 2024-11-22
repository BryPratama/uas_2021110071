@extends('pelanggan.layout.index')

@section('content')
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

    <h3 class="mt-5 mb-5">Keranjang Belanja</h3>

    {{-- Bagian Keranjang Belanja Berdasarkan Variabel $data --}}
    @if (!$data)
    @else
        @foreach ($data as $x)
            <div class="card mb-3">
                <div class="card-body d-flex gap-4">
                    <img src="{{ asset('storage/product/' . $x->product->foto) }}" width="300" alt="">
                    <form action="{{ route('checkout.product', ['id' => $x->id]) }}" method="POST">
                        @csrf
                        <div class="desc w-100">
                            <p style="font-size:24px; font-weight:700;">{{ $x->product->nama_product }}</p>
                            <input type="hidden" name="idBarang" value="{{ $x->product->id }}">
                            <input type="number" class="form-control border-0 fs-1" name="harga" id="harga"
                                value="{{ $x->product->harga }}">
                            <div class="row mb-2">
                                <label for="qty" class="col-sm-2 col-form-label fs-5">Quantity</label>
                                <div class="col-sm-5 d-flex">
                                    <button class="rounded-start bg-secondary p-2 border border-0 plus"
                                        id="plus">+</button>
                                    <input type="number" name="qty" class="form-control w-25 text-center qty"
                                        id="qty" value="{{ $x->qty }}">
                                    <button class="rounded-end bg-secondary p-2 border border-0 minus" id="minus"
                                        disabled>-</button>
                                </div>
                            </div>
                            <div class="row">
                                <label for="price" class="col-sm-2 col-form-label fs-5">Total</label>
                                <input type="text" class="col-sm-2 form-control w-25 border-0 fs-4 total" name="total"
                                    readonly id="total">
                            </div>
                            <div class="row w-50 gap-1">
                                <button type="submit" class="btn btn-success col-sm-5">
                                    <i class="fa fa-shopping-cart"></i>
                                    Checkout
                                </button>
                                <button class="btn btn-danger col-sm-5">
                                    <i class="fa fa-trash-alt"></i>
                                    Delete
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    @endif

    {{-- Bagian Keranjang Belanja Berdasarkan Session --}}
    <h1 class="mt-5">Keranjang Belanja Berdasarkan Session</h1>

    @if (session('cart') && count(session('cart')) > 0)
        <div>
            @foreach (session('cart') as $id => $item)
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <img src="{{ asset('storage/product/' . $item['image']) }}" alt="" style="width: 100px;">
                    <p>{{ $item['name'] }}</p>
                    <p>Rp{{ number_format($item['price']) }}</p>
                    <p>{{ $item['quantity'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>Keranjang Anda kosong</p>
    @endif
@endsection
