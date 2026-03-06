<form method="POST" action="/customers">
@csrf

<label>Customer Name</label>
<input type="text" name="customer_name">

<label>Mobile</label>
<input type="text" name="mobile">

<label>Email</label>
<input type="text" name="email">

<button type="submit">Save</button>

</form>