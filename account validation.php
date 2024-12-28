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
    <style type="text/css">
        .p1{
            margin-left: 400px;
            font-size: 50px;
        }
        h2{
            margin-left: 40px;
            font-size: 33px;
            margin-top: 30px;
        }
        h3{
            margin-left: 40px;
            font-size: 25px;
            margin-top: 50px;
            float: left;
            color: blue;
        }
        /*td1{
            font-weight: bold;
        }*/
        td2{
            color: blue;
        }
    </style>
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
      <div style="height: 100vh; width:100%;background-color: rgb(244, 232, 233);">

        <h1 style="color: #964734 ; font-family: 'Brush Script MT', cursive;height: 10vh;width: 100%;padding-left: 25px;padding-top: 15px;font-size: 50px;">Hello Buddy Welcome to our website...</h1>
        <div style="border: 1px solid black;height: 70vh;width: 70%;margin-left: 230px;margin-top: 50px;background-color: whitesmoke;">
            <form action="home page.html">
            <?php
            echo'<p class="p1"><b><i>Your Details</b></i></p>';
            echo'<hr>';
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $gender=$_POST['gender'];
        

        if($_POST["name"]=="")
        {
            $name="name can not be empty";
        }
        else
        {
            if((preg_match("/^[a-zA-Z]+(?:\s+[a-zA-Z]+)*$/",$_POST["name"]))?false:true)
            {
                $name="please enter your name";
            }
        }
        if($_POST["surname"]=="")
        {
            $surname="surname can not be empty";
        }
        else
        {
            if((preg_match("/^[a-zA-Z]+(?:\s+[a-zA-Z]+)*$/",$_POST["name"]))?false:true)
            {
                $surname="please enter your surname";
            }
        }

        if($_POST["email"]=="")
        {
            $email="email can not be empty";
        }
        else
        {
            if((preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))?false:true)
            {
                $email="please enter your email";
            }
        }

        if($_POST["number"]=="")
        {
            $number="Number can not be empty";
        }
        else
        {
            if((preg_match("/^[0-9]{10}$/",$_POST["number"]))?false:true)
            {
                $number="please enter your valid Number";
            }
        }

        if(!isset($_POST["gender"]))
        {
            $gender="please selest your gender";
        }
        //try to write table formate work
        echo"
        <h2>
        <tr>
        <td1>Your Name is :</td1>
        <td2>$name $surname</td2>
        </tr>
        </h2>";
        echo"
        <h2>
        <tr>
        <td1>Your Email is :</td1>
        <td2>$email</td2>
        </tr>
        </h2>";
        echo"
        <h2>
        <tr>
        <td1>Your Mobile No is :</td1>
        <td2>$number</td2>
        </tr>
        </h2>";
        echo"
        <h2>
        <tr>
        <td1>Your Gender is :</td1>
        <td2>$gender</td2>
        </tr>
        </h2>";
        //table formate note work and write simple ,in php html use for echo'' and variable access echo""
        // echo"<h2>Your Name is : $name $surname</h2>";
        // echo"<h2>Your Email is : $email</h2>";
        // echo"<h2>Your Mobile No is : $number</h2>";
        // echo"<h2>Your Gender is : $gender</h2>";
        echo'
        <h3>
        <tr>
            <td><input type="submit" name="sub" value="Done"></td>
        </tr></h3>';

        echo'
        <h3>
        <tr>
            <td><input type="submit" name="sub" value="forgot Password"></td>
        </tr></h3>';
    }
    ?>
</form>
        </div>
      
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