<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Admin Settings</h1>

    <h2>General Settings</h2>
    <form>
        <label for="site-title">Site Title:</label>
        <input type="text" id="site-title" name="site-title" value="My Awesome Site">
        <br>
        <label for="site-logo">Site Logo:</label>
        <input type="file" id="site-logo" name="site-logo">
        <br>
        <input type="submit" value="Save Changes">
    </form>

    <h2>User Management</h2>
    <p>Manage user accounts and permissions:</p>
    <ul>
        <li><a href="#">Add User</a></li>
        <li><a href="#">Edit User</a></li>
        <li><a href="#">Delete User</a></li>
        <li><a href="#">Assign Permissions</a></li>
    </ul>

    <h2>Security Settings</h2>
    <p>Configure website security settings:</p>
    <form>
        <label for="password-policy">Password Policy:</label>
        <textarea id="password-policy" name="password-policy"
            rows="3">Passwords must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.</textarea>
        <br>
        <label for="two-factor-auth">Two-Factor Authentication:</label>
        <input type="checkbox" id="two-factor-auth" name="two-factor-auth">
        <br>
        <input type="submit" value="Save Changes">
    </form>

    <h2>Analytics and Tracking</h2>
    <p>Configure website analytics and tracking settings:</p>
    <form>
        <label for="analytics-code">Analytics Code:</label>
        <textarea id="analytics-code" name="analytics-code"
            rows="3">&lt;script&gt; /* Paste your Google Analytics code here */ &lt;/script&gt;</textarea>
        <br>
        <input type="submit" value="Save Changes">
    </form>
</body>

</html>