<?php
    // Include the necessary file for database connectivity
    include('config/constants.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="style/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .outerbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
        }
        .dark-container {
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #333;
            border-radius: 8px;
        }
    </style>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</head>
<body class="orange-container">
    
    <?php include('partials/navbar.php');?>

    <!-- Log in form -->
    <div class="outerbox">
        <div class="container-fluid dark-container">
            <form action="" method="post">
                <fieldset>
                    <legend>Login</legend>
                    <?php
                        if(isset($_SESSION['login'])){
                            echo $_SESSION['login'];
                            unset ($_SESSION['login']);
                        }
                        if(isset($_SESSION['register'])){
                            echo $_SESSION['register'];
                            unset ($_SESSION['register']);
                        }
                        
                    ?>
                    <div class="d-flex justify-content-center mb-3">
                        <!-- login option -->
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="loginType" id="customerRadio" value="customer" checked>
                            <label class="form-check-label" for="customerRadio">
                                Customer
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="loginType" id="staffRadio" value="staff">
                            <label class="form-check-label" for="staffRadio">
                                Staff
                            </label>
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>
                    <div class="form-check mb-5">
                        <label class="form-check-label">
                            <input class = "form-check-input" type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()">Show password
                        </label>
                    </div>
                </fieldset>
                <button name = "loginBtn" type="submit" value="submit" class="btn btn-warning">Submit</button><br><br>
                <a href="register.php">Don't have a customer account yet?</a>

            </form>
        </div>
    </div>
<?php include('partials/footer.php');?>
<?php 
if (isset($_POST['loginBtn'])) {
    $loginType = $_POST['loginType'];

    if ($loginType == 'customer') {
        $email = $_POST['email'];
        $password = md5($_POST['password']); // Note: Using md5($_POST['password']); for demonstration purposes only, not recommended for real-world applications
        // Prepare the SQL query to check customer credentials
        $sql = "SELECT * FROM customer WHERE custEmail = '$email' AND custPassword = '$password'";
        $res = mysqli_query($conn, $sql); // Execute the query

        if ($res) {
            // Check if a matching user is found
            $count = mysqli_num_rows($res);
            $row = mysqli_fetch_assoc($res);
            $custID = $row['custID'];
            if ($count == 1) {
                $_SESSION['login'] = "<div class='alert alert-success alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Login Success Succeussfully</div>";
                header('Location:'.SITEURL.'Cust_Page/order.php?id='.$custID);
                exit();
            } else {
                $_SESSION['login'] = "<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Login Failed</div>";
                header('Location:'.SITEURL.'login.php');
                exit();
            }
        } else {
            echo "Query Error: " . mysqli_error($conn);
        }
    } else {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        // Prepare the SQL query to check staff credentials
        $sql = "SELECT * FROM staff WHERE staffEmail = '$email' AND staffPassword = '$password'";
        $res = mysqli_query($conn, $sql);

        // Check if a matching user is found
        if ($res) {
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                $_SESSION['login'] = "<div class='alert alert-success alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Login Success Successfully</div>";
                header('Location:'.SITEURL.'Staff_Page/index.php');
                exit();
            } else {
                $_SESSION['login'] = "<div class='alert alert-danger alert-dismissible'><button type='button' class='btn-close' data-bs-dismiss='alert'></button>Login Failed</div>";
                header('Location:'.SITEURL.'login.php');
                exit();
            }
        } else {
            echo "Query Error: " . mysqli_error($conn);
        }
    }
}
?>

