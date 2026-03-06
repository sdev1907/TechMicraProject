<!DOCTYPE html>
<html>

<head>
<title>Customers</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Customers</h2>

<a href="/customers/create" class="btn btn-success mb-3">
Add Customer
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
</tr>

@foreach($customers as $customer)

<tr>
<td>{{ $customer->id }}</td>
<td>{{ $customer->customer_name }}</td>
<td>{{ $customer->mobile }}</td>
<td>{{ $customer->email }}</td>
</tr>

@endforeach

</table>

</body>
</html>