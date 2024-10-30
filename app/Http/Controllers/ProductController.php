<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::get();
        return view('admin.page.product',[
            'name' => "Product",
            'title'=> 'Admin Product',
            'data'=> $data,
        ]);
    }

    public function addModal()
    {
        return view('admin.modal.addModal', [
            'title' => 'Tambah Data Product',
            'sku' => 'BRG' . rand(10000, 99999),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = new Product();
        $data->sku          = $request->sku;
        $data->nama_product = $request->nama;
        $data->type         = $request->type;
        $data->kategory     = $request->kategori;
        $data->harga        = $request->harga;
        $data->quantity     = $request->input('quantity', 0); // Set default ke 0 jika tidak ada input
        $data->discount     = 10; // Atur diskon sesuai kebutuhan
        $data->is_active    = 1;

        // Menangani upload foto
        if ($request->hasFile('foto')) {
            $photo = $request->file('foto');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/product'), $filename);
            $data->foto = $filename;
        }

        // Simpan data produk ke database
        $data->save();

        // Menampilkan pesan sukses
        Alert::toast('Data Telah Disimpan', 'success');
        return redirect()->route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // Anda bisa menambahkan logika untuk menampilkan detail produk di sini
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Anda bisa menambahkan logika untuk menampilkan form edit produk di sini
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // Anda bisa menambahkan logika untuk memperbarui data produk di sini
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Anda bisa menambahkan logika untuk menghapus produk di sini
    }
}
