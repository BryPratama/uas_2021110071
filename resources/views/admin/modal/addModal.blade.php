<div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('addData') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="SKU" class="col-sm-3 col-form-label">SKU</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="SKU" name="sku"
                                value="{{ $sku }}" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nameProduct" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nameProduct" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="type" class="col-sm-3 col-form-label">Tipe Barang</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="type" name="type">
                                <option value="">Pilih Tipe</option>
                                <option value="jdm">JDM</option>
                                <option value="european">European</option>
                                <option value="american">American</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-3 col-form-label">Kategori Barang</label>
                        <div class="col-sm-9">
                            <select type="text" class="form-control" id="kategori" name="kategori">
                                <option value="">Pilih Kategori</option>
                                <option value="reguler">Reguler</option>
                                <option value="premium">Premium</option>
                                <option value="rlc">RLC</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga Barang</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="foto" class="col-sm-3 col-form-label">Foto Barang</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" accept=".png, .jpg, .jpeg" id="foto"
                                name="foto">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
