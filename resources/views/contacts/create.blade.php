<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>

<h1>Add New Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <button type="submit">Save</button>
</form>

</body>
</html>
