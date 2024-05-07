<?php
//include header part of html
 include('header.php')
  ?>
            

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
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
            margin-bottom: 0;
            border-radius: 0;
        }

        h2 {
            margin-bottom: 1.5rem;
            font-weight: bold;
            font-size: 2.5rem;
            text-transform: uppercase;
        }

        .btn {
            border-radius: 25px;
            font-weight: bold;
        }

        .student-info {
            padding: 3rem 0;
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

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .table {
            margin-top: 2rem;
            background-color: #fff;
            border-radius: 15px;
        }

        th, td {
            text-align: center;
            vertical-align: middle !important;
            font-size: 1.1rem;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            border: none !important;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa !important;
        }

        .btn-lg {
            font-size: 1.2rem;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 jumbotron">
                <h2 class="text-center">
                    Welcome to Student Management System
                    <a href="login.php" class="btn btn-lg btn-info float-right">Admin Login</a>
                </h2>
            </div>
        </div>
    </div>

    <div class="student-info text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Student's Information</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="roll" placeholder="Enter Roll Number" class="form-control mb-3">
                        <span>OR</span>
                        <select name="standard" class="btn btn-info ml-3 mb-3">
                            <option>SELECT STANDARD</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                            <option>5th</option>
                        </select>
                        <input type="submit" name="show" value="SHOW INFO" class="btn btn-success ml-3 mb-3">  
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="table table-striped table-bordered table-responsive text-center">
            <thead>
                <tr>
                    <th>Roll No.</th>
                    <th>Standard</th>
                    <th>Full Name</th>
                    <th>City</th>
                    <th>Parent Phone No.</th>
                    <th>Profile Pic</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add table rows dynamically here -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $Standard = $_POST['standard'];
        $RollNo = $_POST['roll'];

        $sql = "SELECT * FROM student WHERE standard = '$Standard' OR rollno='$RollNo'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
                $Id = $DataRows['id'];
                $RollNo = $DataRows['rollno'];
                $Name = $DataRows['name'];
                $City = $DataRows['city'];
                $Pcontact = $DataRows['pcontact'];
                $Standard = $DataRows['standard'];
                $ProfilePic = $DataRows['image'];
                ?>
                <tr>
                    <td><?php echo $RollNo;?></td>
                    <td><?php echo $Standard;?></td>
                    <td><?php echo $Name; ?></td>
                    <td><?php echo $City; ?></td>
                    <td><?php echo $Pcontact; ?></td>
                    <td><img src="databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    


<!--include header part of html-->
<?php include('footer.php')
?>