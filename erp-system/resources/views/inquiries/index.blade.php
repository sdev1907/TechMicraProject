<h2>Customers</h2>

<a href="/customers/create">Add Customer</a>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile</th>
</tr>

@foreach($customers as $customer)

<tr>
<td>{{ $customer->id }}</td>
<td>{{ $customer->customer_name }}</td>
<td>{{ $customer->mobile }}</td>
</tr>

@endforeach

</table>