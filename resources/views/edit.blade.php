<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
  <link rel="icon" href="https://www.clipartmax.com/png/middle/217-2173977_number-9-png-group-nine-media-logo.png" type="image/x-icon" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('data.update', $data->kode_bank) }}" method="POST" id="update">
                        
                            @csrf 
                            
                            @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Kode Bank</label>
                                <input type="number" class="form-control @error('kode_bank') is-invalid @enderror" name="kode_bank" value="{{ $data->kode_bank }}" placeholder="Masukan kode bank">
                                @error('kode_bank')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Bank</label>
                                <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" rows="10" value="{{ $data->nama_bank }}"placeholder="Masukkan Nama Bank">
                                @error('nama_bank')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="100" value="{{ $data->alamat }}" placeholder="Masukkan Alamat">
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kota</label>
                                <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" rows="20" value="{{ $data->kota }}" placeholder="Masukkan Kota">
                                @error('kota')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" rows="20" value="{{ $data->provinsi }}" placeholder="Masukkan Provinsi">
                                @error('provinsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Pos</label>
                                <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" rows="5" value="{{ $data->kode_pos }}" placeholder="Masukkan Kode Pos">
                                @error('kode_pos')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomer Telepon</label>
                                <input type="number" class="form-control @error('nomer_telepon') is-invalid @enderror" name="nomer_telepon" rows="10" value="{{ $data->nomer_telepon }}" placeholder="Masukkan Nomer Telepon">
                                @error('nomer_telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" rows="100" value="{{ $data->email }}"placeholder="Masukkan Email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi</label>
                                <input type="textarea" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $data->deskripsi }}"placeholder="Masukkan Deskripsi">
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
                            <a href="/data" class="btn btn-md btn-danger">BATAL</a>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>