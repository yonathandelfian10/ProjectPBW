@extends("layouts.main")
@section("title", "Form Edit Jogjatrip")
@section("artikel")
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <form action="/update/{{$jt->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Destinasi</label>
                <input type="text" name="namadestinasi" class="form-control" value="{{ $jt->namadestinasi }}" required>
            </div>
            <div class="form-group">
                <label>Jenis Destinasi</label>
                <select name="destinasi" class="form-control" required>
                    <option value="">Pilih destinasi</option>
                    <option value="pegunungan" {{ $jt->destinasi == 'pegunungan' ? 'selected' : '' }}>Pegunungan</option>
                    <option value="laut" {{ $jt->destinasi == 'laut' ? 'selected' : '' }}>Laut</option>
                    <option value="daratan" {{ $jt->destinasi == 'daratan' ? 'selected' : '' }}>Daratan</option>
                    <option value="pantai" {{ $jt->destinasi == 'pantai' ? 'selected' : '' }}>Pantai</option>
                    <option value="museum" {{ $jt->destinasi == 'museum' ? 'selected' : '' }}>Museum</option>
                    <option value="kebunbinatang" {{ $jt->destinasi == 'kebunbinatang' ? 'selected' : '' }}>Kebun Binatang</option>
                </select>
            </div>
            <div class="form-group">
                <label>HTM</label>
                <input type="number" name="htm" class="form-control" value="{{ $jt->htm }}" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ $jt->alamat }}" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control-file" accept="image/*">
                <img src="{{ asset('storage/' . $jt->gambar) }}" alt="{{ $jt->gambar }}" height="80" width="80">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

