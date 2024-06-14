@extends("layouts/main")
@section("title","jogjatrip")
@section("artikel")
   <div class="card">
    <div class="card-header">
        <a href="/jogjatrip/add-form" class="btn btn-primary"><i class="bi bi-plus-square"></i> Tambahkan Destinasi</a>
    </div>
    <div class="card-body">
        @if(session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" 
        role="alert">
            <strong>{{session("alert") }}</strong>
            <button type="button" class="close" data-dismiss="alert" 
            aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Destinasi</th>
                    <th>Destinasi</th>
                    <th>HTM</th>
                    <th>Alamat</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mv as $idx=>$m)
                <tr>
                    <td>{{ $idx+1 }}</td>
                    <td>{{ $m->namadestinasi }}</td> 
                    <td>{{ $m->destinasi }}</td>
                    <td>{{ $m->htm }}</td>
                    <td>{{ $m->alamat }}</td>
                    <td><img src="{{ asset('/storage//'.$m->gambar) }}" 
                    alt="{{ $m->gambar }}" height="80" width="80">
                    </td>
                    <td>
                        <a href="/form-edit/{{ $m->id }}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                        <a href="/delete/{{ $m->id}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
@endsection