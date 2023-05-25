<?php

// require_once("job_connection.php");
// $query = " select * from post_jobs ";
// $result = mysqli_query($con, $query);

require_once 'job_connection.php';
require_once 'functions.php';
$result = display_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" a href="CSS/bootstrap.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>View Posted Jobs</title>
    <style>
        #header {
            color: white;
        }
    </style>
</head>

<body class="viewjobs bg-dark">

    <div class="container">
        <div class="card-header">
            <h2 class="display-6 text-center" id="header"> Posted Jobs List</h2>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <!-- <td> Job Number </td> -->
                            <td> Job Title </td>
                            <td> Description </td>
                            <td> Location </td>
                            <td> Salary </td>
                            <td> Edit </td>
                            <td> Delete </td>
                        </tr>

                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            // $jobnumber = $row['Job Number'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $location = $row['location'];
                            $salary = $row['salary'];
                            ?>
                            <tr>
                                <td>
                                    <?php echo $title ?>
                                </td>
                                <td>
                                    <?php echo $description ?>
                                </td>
                                <td>
                                    <?php echo $location ?>
                                </td>
                                <td>
                                    <?php echo $salary ?>
                                </td>
                                <td><a href="#" class="btn btn-primary">Edit</a></td>
                                <td><a href="#" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                        }
                        ?>


                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>