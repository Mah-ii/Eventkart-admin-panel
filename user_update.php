<?php
include 'config/dbconn.php';

$id = $_GET['id'];


$insert="SELECT * FROM users WHERE id='$id' ";
$result = mysqli_query($connection, $insert);

$row = mysqli_fetch_assoc($result);



?> 


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update User Details</title>
    





<style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .login {
            padding-top: 1rem;
        }

        .login img {
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            height: 40rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .login h1 {
            font-size: 3rem;
            font-weight: 700;
            text-align: center;
           
        }

        .input-box {
            height: 50px;
            width: 70%;
            border-radius: 60px;
        }

        .btn {
            height: 50px;
            width: 50%;
            background: rgba(186, 176, 176, 0.6);
            border-radius: 50px;
            color: teal;
            font-size: 18px;
        }

        @media (max-width: 576px) {
            .login img {
                display: none;
            }

            .login {
                padding-top: 0;
                
            }

            .login h1 {
                font-size: 2rem;
            
            }

            .input-box,
            .btn {
                width: 100%;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .form-row {
                max-width: 400px;
                margin: 0 auto;
            }

            .input-box {
                width: calc(100% - 20px);
                margin: 10px;
            }

            .btn {
                width: 100%;
            }
        }

        @media (min-width: 769px) {
            .form-row {
                max-width: 600px;
                margin: 0 auto;
            }

            .input-box {
                width: calc(100% - 20px);
                margin: 10px;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<section class="login">
        <div class="container">
            <h1 style="margin-bottom:10px">Update User information</h1>
            <form action="" method="post">
                <div class="form-row py-3">
                    <div class="col-lg-12 py-2">
                        <label for="reguname"><i><b>Full Name :</b></i></label>
                        <input type="text" class="input-box" name="reguname" value="<?php echo $row['user_name'] ?>" required>
                    </div>
                    <div class="col-lg-12 py-2">
                        <label for="regEmail"><i><b>Email Address :</b></i></label>
                        <input type="email" class="input-box" name="regEmail" value="<?php echo $row['user_email'] ?>" required>
                    </div>
                    <div class="col-lg-12 py-2">
                        <label for="regNum"><i><b>Phone Number:</b></i></label>
                        <input type="number" class="input-box" name="regNum" value="<?php echo $row['user_number'] ?>" required>
                    </div>
                    <div class="col-lg-12 py-2">
                        <button type="submit" id="login" class="btn" name="update" value="update">Update Info</button>
                    </div>
                </div>
            </form>
        </div>
    </section>



</body>
</html>


<?php


if (isset($_POST['update'])) {
    $regEmail = $_GET['updateemail'];
    $reguname = $_REQUEST["reguname"];
    $regEmail = $_REQUEST["regEmail"];
    $regNum = $_REQUEST["regNum"];
    $regpass = $_REQUEST["regpass"];
    $regcpass = $_REQUEST["regcpass"];
    
    
    
      $insert = "update users set user_name='$reguname', user_email='$regEmail', user_number='$regNum', pass='$regpass', conpass='$regcpass' where user_email='$regEmail'";
    
    
    
      $query = mysqli_query($connection, $insert);
    
      if(!$query){
       // echo "<script> alert('not inserted!!')</script>";
        echo "<script> location.href = 'user_update.php'</script>";
    
      }
      else{
      //  echo "<script> alert('SUCCESSFULLY Updated')</script>";
        echo "<script> location.href = 'client.php'</script>";
        
      }
    }
    


?>