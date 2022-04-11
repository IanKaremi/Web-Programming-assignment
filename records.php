<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Afya Hospital - Records</title>
        <meta name="description" content="">
        <meta name="theme-color" content="cyan">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="web_assign.css">
        <link rel="stylesheet" href="records.css">
        <style type="text/css">
            table{ border-collapse: collapse; width:100%; border: solid 2px;}
            th {background-color:white; color:black;}
            td {padding:10px; border: solid 2px;}
            tr:nth-of-type(even){background-color:cyan;}
            tr:nth-of-type(odd){background-color:white;}

        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <!--<img src="image3.png">-->
        <div class="banner"><img src="logo.jpg">Afya Hospital</div>
        <header>
            <div><a href="index.html">Home</a></div>
            <div><a href="Registration.html">Registration</a></div>
            <div><a href="/Afya/records.php">Records</a></div>
            <div><a href="about_us.html">About Us</a></div>
            <div><a href="contacts.html">Contacts</a></div>
        </header>
    <div class="main">

        <nav id="sidebar">
            <ul>
            <li class="navbar">Navigation Bar</li>
            <div class="submenu">
            <li class="menu_items" id="sublink"><a href="records.html">Quick Records</a></li>
                <ul class="submenu-links">
                    <li>Patient 1</li>
                    <li>Patient 2</li>
                    <li>Patient 3</li>
                </ul>
            </div>
            <li class="menu_items"><a href="Registration.html">Registration</a></li>
            <li class="menu_items">Contacts</li>
            </ul>
        </nav>

        <div class="content">
            <h1>Patient Records</h1>
            <?php
              echo "<link rel='stylesheet' type='text/css' href='Afya/records.css' />";
            $con= mysqli_connect("localhost","root","","afya_hosp") or die("Failed to connect.");
            
            $read="SELECT * FROM patients";

            $id = $_REQUEST['id'];
            $fname = $_REQUEST['fname'];
            $mname = $_REQUEST['mname'];
            $sname = $_REQUEST['sname'];
            $dob = $_REQUEST['dob'];
            $gender = $_REQUEST['gender'];
            $county = $_REQUEST['county'];
            $kin = $_REQUEST['kin'];
          
            $write = "INSERT INTO patients  VALUES ('$id', '$fname', '$mname','$sname', '$dob','$gender' ,'$county', '$kin')";

            if(mysqli_query($con, $write)){
                echo "<h3>Data stored in database successfully!<br>" 
                    . " Please check the table" 
                    . " to view the updated data.</h3>"; 
    
            }/*else{
                echo("Warning!".mysqli_error($con). "<br>");
            }*/
            
            echo "Displaying data: <br><br>";
            $result = mysqli_query($con, $read) ;

            if(mysqli_num_rows($result) > 0)
            {
                echo"<table><tr><th>Patient ID</th><th>First Name</th><th>Middle Name</th><th>Surname</th><th>DOB</th><th>Gender</th><th>County</th><th>Kin</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>"
                    .$row['Patient_ID']."   "
                    ."</td><td>"
                    .$row['First_Name']."    "
                    ."</td><td>"
                    .$row['Middle_Name']."    "
                    ."</td><td>"
                    .$row['Surname']."    "
                    ."</td><td>"
                    .$row['Date_of_Birth']."    "
                    ."</td><td>"
                    .$row['Gender']."    "
                    ."</td><td>"
                    .$row['County']."    "
                    ."</td><td>"
                    .$row['Next_of_Kin']
                    ."</td></tr>";
                }
                echo"</table><br> <br>";
           }else{
                echo"0 results";
            };
            mysqli_close($con); 

            ?>
           <!-- <table class="table">
                    <tr class="odd" id="head">
                    <td>Patient ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Gender</td>
                    <td>County</td>
                    <td>Age</td>
                    </tr>
                    <tr class="even">
                    <td>Cell 1</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    </tr>
                    <tr class="odd">
                    <td>Cell 2</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    </tr>
                    <tr class="even">
                    <td>Cell 3</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    </tr>
                    <tr class="odd">
                    <td>Cell 4</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    </tr>
                    <tr class="even">
                    <td>Cell 5</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    <td>Cell</td>
                    </tr> -->
                
                </table>
    
    
            
        </div>
        


    </div>
    <footer>
        <div align="center">Ian Karemi | ian.karemi@students.uonbi.ac.ke</div>
        <div align="center">Nairobi</div>
    </footer>
        
        <script src="" async defer></script>
    </body>
</html>