<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiles Management System</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
  </head>  
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/prospera-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <?php
		include("Header.php");
		
		?>
    <!-- MAIN -->
    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
          <h1 class="text-white margin-bottom-0 text-size-40 text-thin text-line-height-1">Sign Up</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">

       <form action="" method="POST" style="border:2px solid #ccc" color="red" enctype="multipart/form-data">


                                    <center>
									<div class="container">
									 
                                        <table width=30%>
                                    
										<font size="4" color="red">
                                                <tr><td><center><font size="4" color="red">Company (disabled)</td><td> <input type="text"name="cmpny" class="form-control"  placeholder="Company" value="<?php echo $rs1[1]; ?>"></center></td>
												
                                           <tr><td><center><font size="4" color="red">UserId</td><td><input type="text"name="uid" class="form-control" placeholder="Userid" value="<?php echo $rs1[2];?>"></center></td>
				                               
                                            <tr><td><center><font size="4" color="red">Username</td><td><input type="text"name="uname" class="form-control" placeholder="Username" value="<?php echo $rs1[0];?>"></center></td>
                                          <tr><td><center><font size="4" color="red">Password</td><td><input type="password"name="pass" class="form-control" placeholder="Password" value="<?php echo $rs1[1];?>"></center></td>
                                        
                                                <tr><td><center><font size="4" color="red">Email address</td><td>
                                                <input type="email"name="eadd" class="form-control" placeholder="Email" value="<?php echo $rs1[3]; ?>"></center></td>
                                      
                                              <tr><td><center><font size="4" color="red">First Name</td>
                                                <td>

              <input type="text"name="fname" class="form-control" placeholder="Company" value="<?php echo $rs1[4]; ?>"></center></td>
                                          
							 
                                       
                                             <tr><td><center><font size="4" color="red">Last Name </td><td>
                                                <input type="text"name="lname" class="form-control" placeholder="Last Name" value="<?php echo $rs1[5]; ?>"></center></td>
                                         
                <tr><td><center><font size="4" color="red">Address</td><td><textarea cols=40 rows=4 name="add" value="<?php echo $rs1[6]; ?>"> Enter Add here </textarea> </td>
                                                
                                       
                                                <tr><td><center><font size="4" color="red">City</td><td>
                                                  <select name="city" value="<?php echo $rs1[7]; ?>"> <option value="Patan" > Patan </option>  <option value="Deesa" > Deesa </option>
 <option value="Ahmedabad" > Ahmedabad </option><option value="Palanpur" > Palanpur </option><option value="Mehsana" > Mehsana</option><option value="Vadodara" > Vadodara</option> <option value="Gandhinagar" > Gandhinagar </option></select> </td> 
                                       
                                           <tr><td><center><font size="4" color="red">Country</td><td>
												
                                                <input type="text"name="con" class="form-control" placeholder="Country" value="<?php echo $rs1[8]; ?>"></center></td>
                                          
                                            <tr><td><center><font size="4" color="red">Postal Code</td><td>
                                                <input type="number" name="zcode" class="form-control" placeholder="ZIP Code" value="<?php echo $rs1[9]; ?>"></center></td>
                                         
                                                 <tr><td><center><font size="4" color="red">About Me </td><td>
                                                <textarea rows="5" name="ame" class="form-control" placeholder="Here can be your description"> <?php echo $rs1[10]; ?></textarea></center></td>
                                     
<tr><td><center><font size="4" color="red">Image</td><td><input type="file"name="img" class="form-control" placeholder="Image" value="<?php echo $rs1[2];?>"></center></td>
		<tr> <td><center> <font size="70" color="blue"> <input type="submit" name="reg" value="Registered User"></center></td></tr>							 
                                    
                                              </table>
									
									</center>           
               <script>
							//Email  
 $("#Email").keyup(function() {
                Email();
            });
            function Email() {
               var Email_val=$("#Email").val();
              // alert(user_val);
               if(Email_val.length == "")
               {
                  
                $("#LableEmail").show();
                
                $("#LableEmail").html("please enter Email");
                $("#LableEmail").focus();
                $("#LableEmail").css("color","red");
                
                Email_err=false;
                $("#submit1").attr("disabled",true);
                   
            
                return false;
            }
            else
            {
             $("#LableEmail").hide();
            $("#submit1").attr("disabled",false);
                
            } 
            
            if(EmailId.test(Email_val))
               {
                $("#LableEmail").hide();
                 $("#submit1").attr("disabled",false);
                  
            }
            else
            {
                $('#LableEmail').show();
            
                $("#LableEmail").html("Enter Valid Email Address");
                $("#LableEmail").focus();
                $("#LableEmail").css("color","red");
                Email_err=false;
                $("#submit1").attr("disabled",true);
                 
            return false;
            }
            
            }

           
        
</script>
             </form>
<?php 
 include("Db_Connect.php");
 
 if(isset($_POST['reg']))
 {
	 $Cmpny=$_POST['cmpny'];
	 $Uid=$_POST['uid'];
	 $Uname=$_POST['uname'];
	 $Pass=$_POST['pass'];
     $Eadd=$_POST['eadd'];	 
	 $Fname=$_POST['fname'];
	 $Lname=$_POST['lname'];
	  $Add=$_POST['add'];
     $City=$_POST['city'];
	  $Con=$_POST['con'];  
	  $Zcode=$_POST['zcode'];
	  $Ame=$_POST['ame'];
	  $Simage=$_FILES['img']['name'];
	 $ttimage=$_FILES['img']['tmp_name'];
      move_uploaded_file($ttimage,"image/$Simage");
	  
	  $sql="insert into Login values ('$Uname', '$Pass', 'Client')";
	 mysql_query($sql);
	 $sql="insert into User values ('$Uid','$Cmpny','$Uname','$Eadd','$Fname','$Lname','$Add','$City','$Con','$Zcode','$Ame','$Simage')";
	 mysql_query($sql);
	  
 }


?>
  </div>  
          </div>
        </div> 
      </article>
    </main>

   
    <!-- FOOTER -->
    <?php
	
	include ("Footer.php");
	?>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>   
   </body>
</html>