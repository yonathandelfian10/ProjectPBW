@extends("layouts.main")
@section("title","form add jogjatrip")
@section("artikel")
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama Destinasi</label>
                <input type="text" name="namadestinasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jenis Destinasi</label>
                <select name="destinasi" class="form-control" required>
                    <option value="">Pilih destinasi</option>
                    <option value="pegunungan">Pegunungan</option>
                    <option value="laut">Laut</option>
                    <option value="daratan">Daratan</option>
                    <option value="pantai">Pantai</option>
                    <option value="museum">Museum</option>
                    <option value="kebunbinatang">Kebun Binatang</option>
                </select>
            </div>
            <div class="form-group">
                <label>HTM</label>
                <input type="number" name="htm" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
