@extends('pelanggan.layout.index')

@section('content')
<h4 class="mt-5">Item Terbaru</h4>
<div class="content mt-5 d-flex flex-wrap gap-4">
    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/r35lbwk.jpg') }}" alt="r35" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Nissan GT-R LBWK </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.100.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/22b.jpg') }}" alt="22b" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels 98 Subaru Impreza 22B </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.80.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/s15.jpg') }}" alt="s15" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Nissan Silvia S15 LBWK </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.120.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/sthcivic.jpg') }}" alt="ek9" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Super Treasure Hunt Honda Civic EK9 </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.800.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/r33premium.jpg') }}" alt="r33" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Boulevard Nissan Skyline R33 Nismo </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.700.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/r34ff.jpg') }}" alt="r34" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Fast and Furious Nissan Skyline R34 GTR </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.750.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/celica.jpg') }}" alt="celica" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Boulevard Toyota Celica </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.180.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/787b.jpg') }}" alt="787b" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Gran Turismo Mazda 787B </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.350.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/962double.jpg') }}" alt="962" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Team Transport Porsche 962 </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.400.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>

    <div class="card" style="width:220px;">
        <div class="card-header m-auto" style="border-radius:5px; height: 180px;">
            <img src="{{ asset('assets/images/430.jpg') }}" alt="430" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="card-body">
            <p class="m-0 text-center"> HotWheels Ferrari Racer Ferrari 430 Scuderia </p>
        </div>
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <p class="m-0" style="font-size: 16px; font-weight:600;">Rp.500.000</p>
            <button class="btn btn-outline-primary" style="font-size:24px;">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </div>
    </div>
@endsection
