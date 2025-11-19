<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>

<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $contact->name }}"><br><br>
    <input type="email" name="email" value="{{ $contact->email }}"><br><br>
    <input type="text" name="phone" value="{{ $contact->phone }}"><br><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
