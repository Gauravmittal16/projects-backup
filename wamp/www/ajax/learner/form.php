<html>

<head><title>my form</title>

<script src="form_script.js"></script>

</head>
<body>
<form action="#" method="post">
<div>
<label>Name</label>
<input type="text" name="name"/></div>
<div>
<label>Select state</label>
<select onchange="fetchCities(this.value)">
<option>select state</option>
<option>Punjab</option>
<option>Haryana</option>
<option>Uttar Pradesh</option>
</select>
</div>
<div>
<label>Select city</label>
<select id="cities">
<option>select state first</option>
</select>
</div>
<div ></div>
</form>



</body>
</html>