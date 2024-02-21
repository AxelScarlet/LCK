<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="style/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <style>
        .outerbox {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .dark-container {
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 8px;
        }
    </style>
</head>
<body class="orange-container">
    <!-- Navbar -->
    <?php include('partials/navbar.php');?>
 
    <br><br><br><br>
    <!-- Registration form -->
    <div class="outerbox">
        <div class="container-fluid dark-container">
            <form id="registrationForm" action="RegisterProcess.php" method="post">
                <fieldset>
                    <legend>Register</legend>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="custEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name:</label>
                        <input type="text" class="form-control" id="fullname" placeholder="Enter full name" name="custName" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <select class="form-control" id="gender" name="custGender" required>
                            <option value="">Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" name="custPhoneNumber" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="custPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" name="confirmPassword" required>
                    </div>
                </fieldset>
                <div class="text-center mt-4">
                    <button id="registerButton" type="submit" value="submit" class="btn btn-warning">Register</button><br><br>
                    <a href="login.php">Already have an account? Log in</a>
                </div>
            </form>
        </div>
    </div>
    
    <br>

    <script>
        function validateForm(event) {
            event.preventDefault(); // Prevent the form from submitting by default

            // Get the values of the email and password fields
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            // Check if the email contains the "@" symbol
            if (!email.includes("@")) {
                alert("Please enter a valid email address.");
                return;
            }

            // Check if the password has a minimum length of 8 characters
            if (password.length < 8) {
                alert("Password must have a minimum length of 8 characters.");
                return;
            }

            // Check if the passwords match
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return;
            }

            // Check if all fields are filled
            var inputs = document.querySelectorAll("#registrationForm input, #registrationForm select");
            for (var i = 0; i < inputs.length; i++) {
                if (!inputs[i].value) {
                    alert("Please fill in all fields.");
                    return;
                }
            }

            // Check if phone number is numeric
            var phoneNumber = document.getElementById("phone").value;
            if (!/^\d+$/.test(phoneNumber)) {
                alert("Phone number should be numeric only.");
                return;
            }

            // If all validations pass, submit the form
            document.getElementById("registrationForm").submit();
        }

    // Attach the form submission handler to the submit button
    var submitButton = document.getElementById("registerButton");
    submitButton.addEventListener("click", validateForm);

</script>


<?php include('partials/footer.php');?>