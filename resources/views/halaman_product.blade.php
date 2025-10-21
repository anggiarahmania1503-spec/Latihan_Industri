<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(#cf5252, #e0f7fa, #c0243e);
      margin: 0;
      padding: 150px;
    }
    
    table {
      width: 80%;
      margin: 20px auto;
      background: #fff;
      border-collapse: collapse;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      overflow: hidden;
    }

    th,td {
      padding: 12px 15px;
      text-align: center;
    }

    th {
      background: #ad1313;
      color: #fff;
      text-transform: uppercase;
    }

    td {
      color: #333;
    }

    tr:nth-child(even) {
      background: #f9f9f9;
    }
  </style>
</head>
<body>
  <center>
    <h2>PRODUCT</h2>
    <table border="1">
      <tr>
        <th>id</th>
        <th>name</th>
        <th>description</th>
        <th>price</th>
        <th>stock</th>
      </tr>
      @foreach($product as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->description }}</td>
        <td>{{ $data->price }}</td>
        <td>{{ $data->stock }}</td>
      </tr>
      @endforeach
    </table>
  </center>
</body>
</html>
