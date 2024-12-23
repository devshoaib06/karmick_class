<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        table tr td:last-child {
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="create.php" class="btn btn-primary pull-right btn_color"><i class="fa fa-plus"></i> Add New
                            Employee</a>
                            
                    </div>
                    
                    <div class="col-md-12 mb-3">
                                <form name="searchfrm" id="searchfrm" method="get">
                                    <span class="pull-right">Search : <input type="text" name="searchopt" id="searchopt" style="margin: 10px;" value="<?php  if(!empty($_GET['searchopt'])){ echo $_GET['searchopt'];} ?>"><input type="submit" class="btn btn-primary pull-right btn_color" style="margin: 5px;"></span>
                                </form>
                            </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    if(!empty($_GET['searchopt'])){
                        $searchopt = $_GET['searchopt'];
                        $where = " AND (name like '%".$searchopt."%' OR address like '%".$searchopt."%' OR salary like '%".$searchopt."%')"; 
                    }
                    else{
                        $where = " ";
                    }

                    // Attempt select query execution
                    $sql = "SELECT * FROM employees Where status!=3 ".$where." ORDER by salary desc";

                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {

                    ?>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=1;
                                    while ($row = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['salary']; ?></td>
                                            <td>
                                                <a href="read.php?id=<?php echo $row['id']; ?>" class="mr-3" title="" data-toggle="tooltip" data-original-title="View Record"><span class="fa fa-eye"></span></a>
                                                <a href="create.php?id=<?php echo $row['id']; ?>" class="mr-3" title="" data-toggle="tooltip" data-original-title="Update Record"><span class="fa fa-pencil"></span></a>
                                                <a href="delete.php?id=<?php echo $row['id']; ?>" title="" data-toggle="tooltip" data-original-title="Delete Record"><span class="fa fa-trash"></span></a>
                                            </td>
                                        </tr>
                            <?php
                                    $i++;}
                                } else {
                                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                                }
                            } else {
                                echo "Oops! Something went wrong. Please try again later.";
                            }
                            mysqli_close($conn);
                            ?>
                                </tbody>
                            </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>