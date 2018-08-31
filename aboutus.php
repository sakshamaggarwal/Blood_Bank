<!DOCTYPE html PUBLIC >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>

    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

  
  
 <script type="text/javascript">
     
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="cont_main">
	<div class="content">
		<img src="Images/about.png" height="70px"  />
			<h4><span class="bold">News Letter from the Founders</span></h4>
			<p><img src="Images/123.jpg" height="200px" style="margin-bottom:40px" /></a>The Blood bank is situated in the hospital Premises in the 1 Floor, very close to the ICU & Haemodialysis unit and it is attached to the Department of Pathology.

The blood Bank was started in June 2009 and the License to prepare whole human blood was received on 03.06.2009and it was renewed in 2014 with a validity period for another 5 years (i.e.up to 02.06.2019)

We received the Camp License in December 2011 to conduct outreach Blood donation Camps and we have conducted 35 Blood donation camps so far.

We got a License to prepare blood components on 13.02.2013 with a validity period of 5 years which has also been renewed up to 02.06.2019. We are preparing the following components since then.

->Packed Red Blood cells
->Fresh Frozen Plasma
->Platelet Concentrate.
->Cryo Precipitate.

Our Blood Bank caters to the needs of the poor and needy people who are admitted to this hospital from Trichy and its surrounding districts. A high quality of service is given to these patients at an affordable cost.

We also issue blood components to outside hospitals in and around Trichy at an affordable cost.

A Medical Officer, a staff nurse and a Blood Bank technician have undergone training at the Tamil Nadu Dr.MGR Medical University Chennai, in basic blood bank techniques for 15 days & in Component Separation for 7 days for which they have received Certificates from this University.</p>
		<p class="top">Thank you and Happy Blood donating!</p>	
        <p class="top"> Saksham (16BCI0077)</p>

        <p class="top">Promoters,</p>
<p>Blood Bank India.</p>
       
	</div>
	<div class="sidebar">
			<div>  
<br /><br /><br /><br /><br />
			       <div>
                       <img src="Images/doc.png" width="250px" height="200px" class="tableborder" />
						<br /><br />
                            <img src="Images/camp1.png" width="250px" height="500px" class="tableborder" />
                            
				  </div>
				 
					 <div class="clear"></div>	
				</div>	
	</div>
	
</div>
</div>
		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© Saksham Aggarwal,VIT University,Vellore</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>


<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>