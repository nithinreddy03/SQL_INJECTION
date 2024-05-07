<?php session_start();?>

<?php include('header.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .jumbotron {
            background-color: #007bff;
            color: #fff;
            padding: 2rem 1rem;
            border-radius: 0;
            margin-bottom: 0;
        }

        h2 {
            margin: 0;
            font-weight: bold;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .btn {
            border-radius: 25px;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
        }

        .form-control {
            border-radius: 25px;
            height: 50px;
            font-size: 1.1rem;
            padding: 0 20px;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        <a href="index.php" class="btn btn-success" style="float: left;">HOME</a>
                        ADMIN LOGIN
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="jumbotron">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



            <?php
    include ('dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];


//Defensive code to prevent SQL Injection Attack

                    $user=stripcslashes($user);
                    $password=stripcslashes($password);

/*stripcslashes() function removes backslashes added by the addcslashes()
function.This function can be used to clean up data retrieved from a database or from an HTML form.*/


 //$result =get_result();
 $student_name= $_POST["user"];
 $studentid= "SELECT * FROM admin WHERE username='$user'";

$student_password= $_POST["password"];
$student_password= "SELECT * FROM admin WHERE password='$password' "; 

            $user=mysqli_real_escape_string($conn,$user);
            $password=mysqli_real_escape_string($conn,$password);


/*mysqli_real_escape_string() function is an inbuilt function in PHP which is used to
escape all special characters for use in an SQL query. It is used before inserting a string
in a database, as it removes any special characters that may interfere with the query operations. 
*/








        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);




        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    header('location:admin/admindash.php');

           
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>

<?php include('footer.php')
?>