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
        <h1>Create Contact</h1>
        <!-- Form to create a new contact -->
        <form>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Update Contact</h1>
        <!-- Form to update an existing contact -->
        <form>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter first name">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter last name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Get Contact</h1>
        <!-- Display details of a single contact -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact Details</h5>
                <p class="card-text">First Name: John<br>Last Name: Doe<br>Email: john@example.com<br>Phone: 123456789</p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h1>Search Contact</h1>
        <!-- Form to search for contacts -->
        <form>
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control" id="search" placeholder="Enter first name, last name, email, or phone">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <!-- Display search results in a table -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>123456789</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>Jane</td>
                    <td>Smith</td>
                    <td>jane@example.com</td>
                    <td>987654321</td>
                    <td><a href="#">View</a></td>
                </tr>
                <!-- Add more rows for search results -->
            </tbody>
        </table>
    </div><br><br>

    <div class="container">
        <h1>Remove Contact</h1>
        <!-- Button or form to delete a contact -->
        <button class="btn btn-danger">Delete Contact</button>
    </div><br><br>

</body>

</html>