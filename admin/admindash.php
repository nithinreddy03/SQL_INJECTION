<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

        .admin-dashboard {
            padding: 3rem 0;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: #fff;
            margin-bottom: 1rem;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-lg {
            font-size: 1.5rem;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="header-section jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">
                        WELCOME TO ADMIN DASHBOARD
                        <a href="logout.php" class="btn btn-success" style="float: right;">LOGOUT</a>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="admin-dashboard text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 jumbotron">
                    <a href="addstudent.php" class="btn btn-info btn-lg btn-block">INSERT STUDENT DETAIL</a>
                    <a href="updatestudent.php" class="btn btn-info btn-lg btn-block">UPDATE STUDENT DETAIL</a>
                    <a href="deletestudent.php" class="btn btn-info btn-lg btn-block">DELETE STUDENT DETAIL</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


<?php include('../footer.php') ?>
