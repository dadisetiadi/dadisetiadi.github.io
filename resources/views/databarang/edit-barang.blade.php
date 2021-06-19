<div class="modal-body">
               
    <div class="form-group col-12">
    <label>Pilih Gambar (jpg or png) </label>
    <input type="file" id="foto" name="foto" required="required" class="form-control @error('foto') is-invalid @enderror">
    @error('foto')
    <span class="text-danger">{{$message}}</span> 
    @enderror
    </div>

    <div class="form-group col-12">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" required="required" class="form-control input-flat" placeholder="" value="$data" />
        <span class="text-danger">{{ $errors->first('nama_barang')}}</span>
    </div>

    <div class="form-group col-12">
        <label>Harga Beli</label>
        <input type="number" name="harga_beli" required="required" class="form-control input-flat" placeholder="" value="" />
        <span class="text-danger">{{ $errors->first('harga_beli')}}</span>
    </div>

    <div class="form-group col-12">
        <label>Harga Jual</label>
        <input type="number" name="harga_jual" required="required" class="form-control input-flat" placeholder="" value="" />
        <span class="text-danger">{{ $errors->first('harga_jual')}}</span>
    </div>

    <div class="form-group col-12">
        <label>Stok</label>
        <input type="number" name="stok" required="required" class="form-control input-flat" placeholder="" value="" />
        <span class="text-danger">{{ $errors->first('stok')}}</span>
    </div>


 
</div>