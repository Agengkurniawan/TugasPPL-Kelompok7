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
        <h1>Create Address</h1>
        <!-- Form to create a new address -->
        <form>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" placeholder="Enter street">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter city">
            </div>
            <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" id="province" placeholder="Enter province">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" placeholder="Enter country">
            </div>
            <div class="form-group">
                <label for="postal_code">Postal Code:</label>
                <input type="text" class="form-control" id="postal_code" placeholder="Enter postal code">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Update Address</h1>
        <!-- Form to update an existing address -->
        <form>
            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" placeholder="Enter street">
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter city">
            </div>
            <div class="form-group">
                <label for="province">Province:</label>
                <input type="text" class="form-control" id="province" placeholder="Enter province">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" placeholder="Enter country">
            </div>
            <div class="form-group">
                <label for="postal_code">Postal Code:</label>
                <input type="text" class="form-control" id="postal_code" placeholder="Enter postal code">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div><br><br>

    <div class="container">
        <h1>Get Address</h1>
        <!-- Display details of a single address -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Address Details</h5>
                <p class="card-text">Street: 123 Main St<br>City: Anytown<br>Province: XYZ<br>Country: ABC<br>Postal Code: 12345</p>
            </div>
        </div>
    </div><br><br>

    <div class="container">
        <h1>Search Address</h1>
        <!-- Form to search for addresses -->
        <form>
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control" id="search" placeholder="Enter street, city, province, country, or postal code">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <!-- Display search results in a table -->
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Street</th>
                    <th>City</th>
                    <th>Province</th>
                    <th>Country</th>
                    <th>Postal Code</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>123 Main St</td>
                    <td>Anytown</td>
                    <td>XYZ</td>
                    <td>ABC</td>
                    <td>12345</td>
                    <td><a href="#">View</a></td>
                </tr>
                <tr>
                    <td>456 Oak Ave</td>
                    <td>Another City</td>
                    <td>LMN</td>
                    <td>DEF</td>
                    <td>67890</td>
                    <td><a href="#">View</a></td>
                </tr>
                <!-- Add more rows for search results -->
            </tbody>
        </table>
    </div><br><br>

    <div class="container">
        <h1>Remove Address</h1>
        <!-- Button or form to delete an address -->
        <button class="btn btn-danger">Delete Address</button>
    </div><br><br>
</body>

</html>