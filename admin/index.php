<?php
use App\classes\Session;
use App\classes\Database;
require __DIR__ . '/../vendor/autoload.php';
if(!Session::getSessionData("adminloggedin")){
    header("Location:login.php");
}
$conn= new Database;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Simple Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/adminbootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/chartist.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css"> -->
    <style>
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 90px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            z-index: 99;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                top: 11.5rem;
                padding: 0;
            }
        }
            
        .navbar {
            box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .1);
        }

        @media (min-width: 767.98px) {
            .navbar {
                top: 0;
                position: sticky;
                z-index: 999;
            }
        }

        .sidebar .nav-link {
            color: #333;
        }

        .sidebar .nav-link.active {
            color: #0d6efd;
        }
    </style>
</head>
<body>
<?php include "partials/topnavbar.php"; ?>
    <div class="container-fluid">
        <div class="row">
<?php include "partials/sidebar.php"; ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Users</h5>
                            <?php
                            $q = "SELECT count(*) as total FROM users";
                            $queryResult = $conn->db->query($q);
                            
                            if($queryResult->num_rows>0){
                              $total = $queryResult->fetch_assoc();
                             
                           
                            
                             ?>
                            <div class="card-body">
                              <h5 class="card-title"> <?php  echo $total['total']; ?></h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">18.2% increase since last month</p>
                            </div>
                          </div>
                          <?php  }?>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Tweets</h5>
                            <?php
                            $q = "SELECT count(*) as totaltweets FROM tweets";
                            $queryResult = $conn->db->query($q);
                            
                            if($queryResult->num_rows>0){
                              $total = $queryResult->fetch_assoc();
                             
                            
                            
                             ?>
                            <div class="card-body">
                              <h5 class="card-title"><?php  echo $total['totaltweets']; ?></h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">4.6% increase since last month</p>
                            </div>
                          </div>
                          <?php } ?>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                        <?php
                            $q = "SELECT count(*) as totalComments FROM comments";
                            $queryResult = $conn->db->query($q);
                            
                            if($queryResult->num_rows>0){
                              $total = $queryResult->fetch_assoc();
                              
                           
                            
                             ?>
                            <h5 class="card-header">Comments</h5>
                            <div class="card-body">
                              <h5 class="card-title"><?php echo $total['totalComments']; ?></h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-danger">2.6% decrease since last month</p>
                            </div>
                          </div>
                          <?php  } ?>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Traffic</h5>
                            <div class="card-body">
                              <h5 class="card-title">64k</h5>
                              <p class="card-text">Feb 1 - Apr 1, United States</p>
                              <p class="card-text text-success">2.5% increase since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0 w-100">
                        <div class="card">
                            <h5 class="card-header">Latest Tweets</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="bg-dark text-white">
                                          <tr>
                                            <th scope="col">User</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">images</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Categories</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         $q = "SELECT tweets.*,users.username , users.email, categories.name FROM `tweets` LEFT OUTER join users on tweets.uid=users.id JOIN categories on tweets.cid=categories.id ORDER BY tweets.created DESC LIMIT 10";
                                        $tweetsQuery = $conn->db->query($q);
                                        if ($tweetsQuery->num_rows>0) {
                                          while ($row= $tweetsQuery->fetch_assoc()) {
                                            // echo $row['username'];

                                            echo ' <tr>
                                            <td>'.$row['username'].'</td>
                                            <td>'.$row['title'].'</td>
                                            <td style="width:80px"><img style="width:50px" src="../assets/tweetimage/'.$row['image'].'" alt="'.$row['title'].'"></td>
                                            <td>'.$row['email'].'</td>
                                            <td>'.$row['name'].'</td>
                                            <td>'.$row['created'].'</td>
                                            <td><a href="#" class="btn btn-sm btn-primary">View</a> <a href="#" class="btn btn-sm btn-warning">Edit</a> <a href="#" class="btn btn-sm btn-danger">Delete</a> </td>
                                          </tr>';
                                          }
                                      
                                      
                                        }
                                        
                                        ?>
                                         
                                          
                                        </tbody>
                                      </table>
                                </div>
                                <a href="tweets.php" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row ">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0 w-100">
                        <div class="card">
                            <h5 class="card-header">New Users</h5>
                            <h1><?php Session::getSessionData('msg') ?></h1>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                      
                                        <thead class="bg-dark text-white">
                                          <tr>
                                            <th scope="col">#ID</th>
                                            <th scope="col">username</th>
                                            <th scope="col">Email</th>
                                            <!-- <th scope="col">Total</th> -->
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                          </tr>

                                        </thead>

                                        <tbody>
                                        <?php
                                        $q = "SELECT * FROM users order by users.created desc limit 10";
                                        $tweetsQuery = $conn->db->query($q);
                                        if ($tweetsQuery->num_rows>0) {
                                          while ($row= $tweetsQuery->fetch_assoc()) {
                                            // echo $row['username'];

                                            echo ' <tr>
                                            <td>'.$row['id'].'</td>
                                            <td>'.$row['username'].'</td>
                                            <td>'.$row['email'].'</td>
                                             <td>'.$row['created'].'</td>
                                            <td><a href="?id='.$row['id'].'" class="btn btn-sm btn-primary">View</a> <a href="?id='.$row['id'].'" class="btn btn-sm btn-warning">Edit</a> <a href="?id='.$row['id'].'" class="btn btn-sm btn-danger">Delete</a>
                                        
                                            </td>
                                          </tr>';
                                          }
                                      
                                      
                                        }
                                        
                                        ?>
                                         
                                        </tbody>
                                      </table>
                                </div>
                                <a href="users.php" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-xl-4">
                        <div class="card">
                            <h5 class="card-header">Traffic last 6 months</h5>
                            <div class="card-body">
                                <div id="traffic-chart1"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
<?php include "partials/footer.php";?>
            </main>
        </div>
    </div>
    <script src="../assets/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../assets/js/adminbootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script> -->
    <script src="../assets/js/chartist.min.js"></script>
    <!-- Github buttons -->
    <script async defer src="../assets/js/buttons.js"></script>
    <script>
        new Chartist.Line('#traffic-chart', {
            labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
            series: [
                [23000, 25000, 19000, 34000, 56000, 64000]
            ]
            }, {
            low: 0,
            showArea: true
        });
        new Chartist.Line('#traffic-chart1', {
            labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
            series: [
                [23000, 25000, 19000, 34000, 56000, 64000]
            ]
            }, {
            low: 0,
            showArea: true
        });
    </script>
</body>
</html>