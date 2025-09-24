<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>nama lengkap</th>
            <th>jenis kelamin</th>
            <th>tgl lahir</th>
            <th>kelas</th>
        </tr>
        @foreach($siswa as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_lengkap}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->tgl_lahir}}</td>
            <td>{{$data->kelas}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>