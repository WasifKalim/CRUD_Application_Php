<?php //echo $id = $_GET['id']; die();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dtechdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// User group list
$sql = "SELECT * FROM test";
$res = mysqli_query($conn,$sql);
$results = mysqli_fetch_all($res,MYSQLI_ASSOC);

if(isset($_GET['id'])){
$sqls = "SELECT * FROM test WHERE id =".$_GET['id']."";
$result = mysqli_query($conn,$sqls);
$result_row = mysqli_fetch_assoc($result);
 //echo '<pre>';print_r($result_row);die();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login 2</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/style1.css">

</head>
<body>
<div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
        <form action="submit.php" method="post" class="form-register" type="submit" id="vd">
                <div class="AppForm shadow-lg">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="AppFormRight position-relative d-flex justify-content-center flex-column align-items-center text-center p-5 text-white">
                                <h2 class="position-relative px-4 pb-3 mb-4"><a href="index.html"><img class="logo" src="img/logo_light.png"></a></h2>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <div class="AppFormLeft">

                            <!-- <h1>Register</h1>  -->
                                
                                <div class="form-group position-relative mb-4">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputname" name="Full_Name" placeholder="Full Name">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputEmail" name="Email_Id" placeholder="Email id">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputNumber" name="Phone_Number" placeholder="Phone Number">
                                        <i class="fa fa-user-o"></i>
                                </div>
                                <div class="form-group position-relative mb-4">
                                    <input type="password" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 shadow-none" id="inputPassword" name="Password" placeholder="Password">
                                        <i class="fa fa-key"></i>
                                </div>
                                <button class="btn btn-success btn-block shadow border-0 py-2 text-uppercase ">
                                    Register
                                </button>

                                <p class="text-center mt-5">
                                    Already have an account?
                                    <a href="login.php">
                                        <span>
                                            Login Now
                                        </span>
                                    </a>
                                </p>

                            </div>

                        </div> 
                    </div>
                </div>

            </form>
        </div>
    </div>
<!-- Jquery for validation -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> // cdn
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript"src="css/valid.js"></script>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
</body>
</html>
