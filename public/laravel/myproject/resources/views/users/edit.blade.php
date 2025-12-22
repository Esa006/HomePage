<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

    <h2>Edit User: {{ $user->name }}</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Point to the UPDATE route --}}
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Critical for Updates --}}

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required><br><br>

        <label>New Password (Optional):</label><br>
        <input type="password" name="password" placeholder="Leave blank to keep current"><br><br>

        <button type="submit">Update User</button>
    </form>

    <br>
    <a href="{{ route('users.index') }}">Back to List</a>

</body>
</html>