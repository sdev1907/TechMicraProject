<!DOCTYPE html>
<html>

<head>
<title>Add Customer</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Add Customer</h2>

<form method="POST" action="/customers">

@csrf

<div class="mb-3">
<label>Customer Name</label>
<input type="text" name="customer_name" class="form-control">
</div>

<div class="mb-3">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<button type="submit" class="btn btn-primary">
Save Customer
</button>

</form>

</body>
</html>