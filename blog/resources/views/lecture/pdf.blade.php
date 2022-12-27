<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1 class="text-center">Data Dosen</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIDN</th>
                <th>NAMA</th>
                <th>STATUS</th>
                <th>PROGRAM STUDI</th>
            </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach($lectures as $lecture)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $lecture->nidn }}</td>
                <td>{{ $lecture->nama }}</td>
                <td>{{ ($lecture->status == 1)? 'Aktif' : 'Tidak Aktif' }}</td>
                <td>{{ $lecture->department->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>