<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<table>
  <tr>
    <th>product ID</th>
    <th>Name</th>
    <th>Image</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Description</th>
    <th>Category ID</th>
  </tr>
  @foreach($data as $d)
  <tr>
   <td>{{ $d->id }}</td>
   <td>{{ $d->name }}</td>
   <td>{{ $d->image }}</td>
   <td>{{ $d->price }}</td>
   <td>{{ $d->stock_quantity }}</td>
   <td>{{ $d->description }}</td>
   <td>{{ $d->category_id }}</td>
  </tr>
  @endforeach
  
  
</table>

</body>
</html>

