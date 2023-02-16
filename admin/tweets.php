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
                <h1 class="h2">Tweets Management</h1>
                <p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-lg-0 w-100">
                        <div class="card">
                            <h5 class="card-header">New Users</h5>
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
                                         $q = "SELECT tweets.*,users.username , users.email, categories.name FROM `tweets` LEFT OUTER join users on tweets.uid=users.id JOIN categories on tweets.cid=categories.id ORDER BY tweets.created DESC";
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
                                <a href="#" class="btn btn-block btn-light">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
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


    </script>
</body>
</html>