<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
</head>
<body>

    <h2>User Profile</h2>

    <div id="profile-data">
        <p>Loading...</p>
    </div>

    <button onclick="logout()">Logout</button>

    <script>
        // 1. Get the token from LocalStorage (we will save it here during login)
        const token = localStorage.getItem('api_token');

        // If no token, kick them back to login
        if (!token) {
            window.location.href = '/login';
        }

        // 2. Fetch the data from your API
        fetch('/user-profile', {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token, // <--- This is the key part!
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Unauthorized');
            return response.json();
        })
        .then(user => {
            // 3. Print the UI
            const html = `
                <p><strong>ID:</strong> ${user.id}</p>
                <p><strong>Name:</strong> ${user.name}</p>
                <p><strong>Email:</strong> ${user.email}</p>
                <p><strong>Joined:</strong> ${new Date(user.created_at).toLocaleDateString()}</p>
            `;
            document.getElementById('profile-data').innerHTML = html;
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Session expired or invalid token');
            window.location.href = '/login';
        });

        function logout() {
            localStorage.removeItem('api_token');
            window.location.href = '/login';
        }
    </script>

</body>
</html>