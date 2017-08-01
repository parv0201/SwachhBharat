<?php
    include("header.php");
    $url = 'images\cimages1.png';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Complaints</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\userstyle.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="../favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="Login_css/style2.css" />
	<link rel="stylesheet" type="text/css" href="Login_css/animate-custom.css" />
    <style type="text/css">
        body{
            background-image: url('<?php echo $url ?>');
        }
    </style>
    <script type="text/javascript">
        function admSelectCheck(areaselect){
            if(areaselect){
                admOptionValue=document.getElementById("admOption").value;
                if(admOptionValue==areaselect.value){
                    document.getElementById("check").style.display="none";
                }
                else{
                    document.getElementById("check").style.display="block";
                }
            }
            else{
               document.getElementById("check").style.display="none"; 
            }
        }
         function emailvalid()
         {
            var email=document.getElementById("user_id").value;
            var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.match(mailformat))
            {
                return true;
            }
            else
            {
                alert("You have not given proper email-id");
                document.getElementById("user_id").value="";
            }
                                    
         }


    </script>
</head>
<body >
    <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="complaintregsiter.php" method="post" name="form1"> 
                                <h1>Complaint</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u"> Username : </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Enter username"/>
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Email-id :</label>
                                    <input id="user_id" name="userid" required="required" type="text" placeholder="Enter mail-id" onchange="emailvalid()"/>
                                </p>
                                <select onchange="admSelectCheck(this)">
                                    <option value="0" id="admOption">None</option>
                                    <option value="1">Mota-Bazar</option>
                                    <option value="2">Iscon</option>
                                </select>
                                <div id="check" style="display: none">
                                <p> 
                                    <label for="username" class="uname"> Address :</label>
                                    <textarea id="useradd" name="useradd" style="height: 50px; width: 370px;" placeholder="Enter Address..."></textarea>
                                </p> 
                                <p> 
                                    <label for="username" class="uname"> Subject of Complaint :</label>
                                    <input id="usercomplaint" name="usercomplaint" required="required" type="text" placeholder="about Subject"/>
                                </p> 
                                <p> 
                                    <label for="username" class="uname"> Description : </label>
                                    <textarea style="height: 100px; width: 370px;" placeholder="Description of Complaint...." name="description"></textarea>
                                </p>
                                <form action="Upload.php" method="post" enctype="multipart/form-data"></form> 
                                <p> 
                                    <label for="username" class="uname" required> Upload image: </label>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                    <input type="submit" value="Upload Image" name="submit" style=" width: 40%; text-align: center; margin-left: 100px;">
                                    <br>
                                    <br>
                                      <iframe src="//www.google.com/maps/embed/v1/place?q=Harrods,Brompton%20Rd,%20UK
                                         &zoom=17
                                         &key=AIzaSyCep-bvQstaclh6kpp-oQH-D9MC6lZHC2Y" align="center">
                                      </iframe>
                                </p> 
                                </form>                        
                                <p class="login button">
                                    <input type="submit" value="Submit" onclick="emailvalid()" /> 
								</p>
                                </div>
                                <br>
                                <p class="change_link">
                                    
                                    <a href="viewcomplaints.php">Show complaints</a>
                                </p>
                            </form>
                       </div>
                    </div>
                </div>  
            </section>
        </div>
</body>
</html>

