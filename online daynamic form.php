
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</head>
<body style="background-color: rgb(244, 232, 233);">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="background-color: black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="col" style="margin-left: 55px;"><img src="./photos/logo.jpg" alt="COMPANY Logo" style="width:50px;" class="rounded-pill"></div>
                    <div class="col" style="margin-top: 13px; padding-left: 0%;"><h5>THE MAN COMPANY</h5></div>
                </div>
              </a>    
              <a class="nav-link active text-white" aria-current="page" href="./home page.html">Back to Home</a>
          </div>
      </nav>
    <div style="height: 90vh;width: 100%;">
       <div style="height: 65vh;width: 18%;border: 1px solid black; float: inline-start;margin-top: 70px;margin-left: 130px; border-radius: 8%;background-color: white;">
        <div style="height: 12vh;width: 95%;border: 1px solid white; margin-top: 20px;margin-left: 7.5px;">
            <div style="float: left;margin-left: 15px;"><img src="photos/logo1.jpg" height="40px" width="40px" style="border-radius: 50%;margin-top: 20px;background-color: black;"></div>
            <div style="margin-left: 20px;"><p style="font-size: 25px;margin-top: 20px;margin-left: 20px;font-family: Algerian;"><b>Nirav kariya</b></p></div>
          <div style="margin-left: 15px;"><P><b>&#9755 My Profile<br>&#9755 Delivry Address<hr> &#9755 My Orders<br><hr>&#9755 Recently Viwed<br><hr>&#9755 My Credits<br><hr>&#9755 Change Password<br><br><br>Log out</b></P></div>
        </div>
      </div>
      <form method="post" action="online daynamic form.php">
       <div style="height: 55vh;width: 60%;border: 1px solid black; float:inline-start;margin-left: 30px;margin-top: 120px;background-color: white;">
        <div style="height: 40vh;width: 90%;border: 1px solid rgb(255, 255, 255);margin-left: 34px;margin-top: 30px;background-color: white;">
       <b><div class="row" style="margin-top: 20px;">
            <div class="col"><label>First Name</label><br><input type="text" name="name"></div>
            <div class="col"><label>Last Name</label><br><input type="text" name="surname"></div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col"><label>Email</label><br><input type="email" name="email"></div>
            <div class="col"><label>Contact Number</label><br><input type="text" max="13" name="number"></div>
        </div>
       
        <div class="row" style="margin-top: 30px;margin-left: 0px;">
            <table>
                <tr>
                    <td>Gender:</td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="Male">Male &nbsp &nbsp
                        <input type="radio" name="gender" value="Female">Female &nbsp &nbsp
                        <input type="radio" name="gender" value="other">other
                        </td>
                </tr>
        </table>
        </div></b><br><br><br>
        <tr>
            <td><input type="submit" name="sub"></td>
        </tr>
        </div>
       </div>
    </form>
    </div>

	<?php
    if(isset($_POST['sub'])){
	$servername="localhost";
	$username="root";
	$password="";
	$database="onlinepractice";

    $fname=$_POST['name'];
    $lname=$_POST['surname'];
    $email=$_POST['email'];
    $no=$_POST['number'];
    $gender=$_POST['gender'];
	
	$con=mysqli_connect($servername,$username,$password,$database);
	
	if($con){
		echo"Database Connection successfully";
	}
	else{
        echo"Connection Unsuccessfull";
	}
    $sql = "INSERT INTO  userdatails(?,?,?,?,?)";
    $ps = $con->prepare($sql);
    $ps->bind_param("sssis",$fname,$lname,$email,$no,$gender);
    $ps->execute();
    if($ps){
        echo"Data Inserted";
    }
    else{
        echo"Data Not Inserted";
    }   
}
	?>


      </div>
      <footer style="height: 130vh;width: 100%;background-color: black;">
        <img src="./photos/brand.png" width="100%" height="280vh">
        <img src="./photos/more.png" width="100%" height="350vh">
        
        <p style="color: white; width: 85%;margin-left: 100px;"><b>MOST SEARCHED</b></p>
        <p style="color: white; width: 85%;margin-left: 100px;">summer skin care | sunscreen for men | best face wash for men | vitamin c serumlip balm for mengrey hair 
          treatmentpersonalised gift for meneau de parfumeau de toilettedeo for menhair removal spraygrey remedyperfume for menprivilege perfumederma rollerface 
          serum for mengifts for menbeard oilhair removal creamderma roller for beardbest soap for menbest body wash for menface scrub for menpolo woods perfumethe 
          man company black perfumeintimate wash for menbest lip balm for menface cream for mentan removal for menbeardnose stripsacne face washhair wax for menskin 
          brightening creamcharcoal face washmoisturizer creamcharcoal soapshaving kit for mensignature perfumebody lotion for menredensylbest face wash for men oily 
          skinfast hair growth oilshampoo for mencharcoal face mask for menhair conditioner for menbody mist for menvitamin c face wash benefitsafter shave lotion for 
          mengift hampers for menwinter skin care</p> <hr>
          <center><p style="color: white;">Copyright © Helios Lifestyle Private Limited. All rights reserved.</p></center>
      </footer>
</body>
</html>