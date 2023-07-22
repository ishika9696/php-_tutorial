<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="{{url('/customer')}}" method="post">

        @csrf 
            <div class="form-group">
                <label for="nameInput">Name:</label>
                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter your name" >
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select class="form-control" id="country">
                    <option value="">Select country</option>
                    <option value="USA">USA</option>
                    <option value="Canada">Canada</option>
                    <!-- Add more countries here -->
                </select>
            </div>
            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" placeholder="Enter your state">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" id="id" placeholder="Enter your ID">
            </div>
            <div class="form-group">
                <label for="emailInput">Email address:</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                     <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>