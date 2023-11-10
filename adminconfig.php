<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Funda Of Web IT</title>
</head>
<body>
<a href="logout.php"><i class="fa fa-fw fa-user"></i> Log Out</a> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                               
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control" placeholder="Search data">
                                        &nbsp;
                                        &nbsp;
                                        <select name ="category" <?php if(isset($_GET['category'])){echo $_GET['category'];} ?> class="form-select">
                                  <option value="">Select Status: </option>
                                  <option value="Product Info"> <? isset($_GET['category']) == true ? ($_GET['category'] =='Product Info' ? 'selected':'') :''?>>  Product Info</option>
                                  <option value="Complain" <? isset($_GET['category']) == true ? ($_GET['category'] =='Complain' ? 'selected':'') :''?>> Complain </option>
                                 </select>
                                 &nbsp;
                                 &nbsp;
                                 <button type="submit" class="btn btn-primary">Search Email</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
           


            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Complete Name</th>
                                    <th>Email</th>
                                    <th>Date and Time</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","contactform");

                                

                                    if(isset($_GET['search']) && isset($_GET['category']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $filtercategory = $_GET['category'];
                                        $query = "SELECT * FROM contactlist WHERE CONCAT(category,email) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['firstname']; ?><?= $items['lastname']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td>
                                                    <?php
echo  date("Y/m/d") . "<br>";
?> </td>
<td></td>
                                            
                                                    </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>