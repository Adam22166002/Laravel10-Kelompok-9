<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
<div class="container">
    <h1>Detail Data bank <b>{{ $data->kode_bank }}</b></h1>
    <ul>
        <li>Kode Bank: <b>{{ $data->kode_bank }}</b></li>
        <li>Nama Bank: <b>{{ $data->nama_bank }}</b></li>
        <li>Alamat: <b>{{ $data->alamat }}</b></li>
        <li>Kota: <b>{{ $data->kota }}</b></li>
        <li>Provinsi: <b>{{ $data->provinsi }}</b></li>
        <li>Kode pos: <b>{{ $data->kode_pos }}</b></li>
        <li>Nomer Telepon: <b>{{ $data->nomer_telepon }}</b></li>
        <li>Email: <b>{{ $data->email }}</b></li>
        <li>Deskripsi: <b>{{ $data->deskripsi }}</b></li>
    </ul>
    <a href="/data" class="btn btn-md btn-primary">Kembali</a>
</div>
</body>
</html>
