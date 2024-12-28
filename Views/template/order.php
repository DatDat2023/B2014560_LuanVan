<!DOCTYPE html>
<html lang="zxx">
  <?php
  include_once('controller/cf.php')
  ?>
<?php

if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";
}
?>
<script type="text/javascript">
	$(document).ready(function(){
		 $(".rslides").responsiveSlides();
	})
</script>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOK</title>
    <base href="<?php echo baseUrl; ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap">
    <!-- Css Styles -->
    <link rel="stylesheet" href="resource/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="resource/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="resource/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="resource/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="resource/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="resource/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="resource/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="resource/css/style.css" type="text/css">
</head>
<body>
  <div style="bordor: 1px solid black"></div>
  
   <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                        <div class="htc__best__product" style="float:right;margin-right:80px; width:320px">
                        <video width="320" height="240" controls>
                        <source src="./img/blog/book.mp4" type="video/mp4">
                        
                        
                        </video>
                        <video width="320" height="240" controls>
                        <source src="./img/shop/li.mp4" type="video/mp4">
                        
                        
                        </video>
</div>
                            
                           
                  
                                         <br>
                                         <!--<p style="color:red; font-size:20px;width:800px;" >𝑵𝒆̂́𝒖 𝒌𝒉𝒐̂𝒏𝒈 𝒕𝒉𝒂̂́𝒚 𝒔𝒂́𝒄𝒉 𝒃𝒂̣𝒏 𝒎𝒖𝒐̂́𝒏 𝒎𝒖𝒂 𝒉𝒂̃𝒚 đ𝒊𝒆̂̀𝒏 𝒗𝒐̂ đ𝒂̂𝒚 𝕋𝔻𝔹𝕆𝕆𝕂 𝒔𝒆̃ 𝒎𝒖𝒂 𝒈𝒊𝒖́𝒑 𝒃𝒂̣𝒏!!!</p></-->
                                         <img style="width:12%;margin-left:250px" src="./img/shop/q.gif"><br>
                                         <br>
                                         
                    <form name="contactus" method="post" style="margin-left:30px;">
                      <div>
                       
                        <span ><input  style="width:600px;" placeholder="Họ và tên" type="text" name="fullname" required="true" value=""></span>
                      </div>
                      <br>
                      <div>
                      
                        <span><input  style="width:600px;" type="email"  placeholder="Email" name="emailid" required="ture" value=""></span>
                      </div>
                      <br>
                      <div>
                        <span><input  style="width:600px;" placeholder="Số điện thoại " type="text" name="mobileno" required="true" value=""></span>
                      </div>
                      <br>
                      <div>
                       
                        <span><textarea   name="description" required="true" style="background-color:white; width:600px;"   > </textarea></span>
                      </div>
                      <br>
                     <div>
                         <span><input type="submit" name="submit" value="Submit" style="background-color:red"></span>
                    </div>
                    </form>
                    
                    
                    
                    
                    </div>
                    </div>
    <body>
      <br>
      <br>