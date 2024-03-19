<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Register User</h1>
        <!-- Form to register a new user -->
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Login User</h1>
        <!-- Form to login an existing user -->
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Update User</h1>
        <!-- Form to update an existing user -->
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter new password">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter new name">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Get User</h1>
        <!-- Display details of a single user -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Details</h5>
                <p class="card-text">Username: exampleuser<br>Name: John Doe</p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h1>Logout User</h1>
        <!-- Button or link to logout the user -->
        <a href="#" class="btn btn-primary">Logout</a>
    </div><br><br>
</body>

</html>