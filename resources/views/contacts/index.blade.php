<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>

<h1>All Contacts</h1>

<a href="{{ route('contacts.create') }}">Add Contact</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
    </tr>

    @foreach($contacts as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->phone }}</td>
        <td>
            <a href="{{ route('contacts.edit', $c->id) }}">Edit</a>

            <form action="{{ route('contacts.destroy', $c->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
