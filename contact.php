<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JPM | Contact Us</title>
	<link rel="shortcut icon" href="images/jpmFavIcon.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
    <style type="text/css">
      body{
          background: url(stockPhotos/contact1600.jpg) !important;
          background-position:center !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#FFF !important;
      }
      @media (min-width:1601px){
      body{
          background: url(stockPhotos/contact2000.jpg) !important;
          background-position:center !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#000033 !important;
        }
      }
      @media (max-width:1200px){
        body{
            background: url(stockPhotos/contact1200.jpg) !important;
            background-position:center !important;
            background-attachment:fixed !important;
            background-repeat:no-repeat !important;
            background-color:#FFF !important;
          }
        }
      @media (max-width:960px){
        body{
            background: url(stockPhotos/contact960.jpg) !important;
            background-position:50% 30% !important;
            background-attachment:fixed !important;
            background-repeat:no-repeat !important;
            background-color:#FFF !important;
          }
      }
      @media (max-width:800px){
        body{
            background: url(stockPhotos/contact800.jpg) !important;
            background-position: 50% 30% !important;
            background-attachment:fixed !important;
            background-repeat:no-repeat !important;
            background-color:#FFF !important;
          }
      }
      @media (max-width:767px){
        iframe{
          margin-top: 20px;
        }
      }
      @media (max-width:530px){
          body{
            background: url(images/binding_light.png) !important;
          }
      }
      input{
        border-radius: 5px;
        font-family: 'Exo', serif;
        font-size:0.8rem;
        font-weight:500;
        letter-spacing:1px;
        width: 60%;
      }
      textarea{
        border-radius: 5px;
        font-family: 'Exo', serif;
        font-size:0.8rem;
        font-weight:500;
        letter-spacing:1px;
        height: 150px;
        width: 90%;
      }
      .form_button{
        border-radius: 5px;
        background-color: #FF6B02;
        color: #FFF;
        font-family: 'Exo', serif;
        font-size:1.0rem;
        font-weight:500;
        letter-spacing:1px; 
      }
      .form_button:hover{
        background-color: #1874CD;
      }
    </style>
</head>

<body>
<?php include('includes/header.inc');?>

<div id="megaContainer" style="max-width:1400px; position:relative; margin:0 auto">
    <div id="content">
	<h1>Contact US</h1>
    	<?php
	if (isset($_POST['send_email'])) {
		//Put form data into variables
		$contName = $_POST['contName'];
		$phone =$_POST['phone'];
		$email = $_POST['email'];
		$service = $_POST['service'];
		$msg = $_POST['msg'];
		
		if ($contName != "" && $email != "") {
			//Set the To and From fields (Note: The header is needed to include the From field since it is optional)
			$to = "sales@jpmus.com";
			$subject = "New $service Request!";
			$body = "From = " . $contName . "( " . $email . ")" . "\n" . "Phone = " . $phone . "\n" . "Message = " . "\n" .  $msg;
			$from = $contName . " at " . $email;
			$headers = "From: $from";
			//Send the email
			mail($to, $subject, $body, $headers);
			
			echo "<p>Thank you, your form has been submited!<p>";
		}
		else
		{
			$error = "<p>Sorry....You must fill in the name and email fields<p>";
		}
	}
	?>
	<?php
	if (isset($error)) {
		echo $error.'<br><br>';
	}
	?>
	<script type="text/javascript">
	function checkForm()
	{
		var contName = document.getElementByID('contName').value;
		var email = document.getElementByID('email').value;
			if (contName == "") {
				alert("Your name cannot be blank");
				return false;
			}
			if (email == "") {
				alert("Your email cannot be blank");
				return false;
			}
	}
	</script>
      <div class="half" style="border-right:1px #FFF groove; float:left;">
      	<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        	<fieldset>
                <label for="contName"><h6>Contact Name: </h6></label><br>
                <input type="text" name="contName" id="contName" placeholder="Enter Full Name" required/><br>
                <label for="email"><h6>Email Address: </h6></label><br>
                <input type="email" name="email" id="email"   placeholder="eg. email@domain.com" required/><br>
                <label for="phone"><h6>Phone Number: </h6></label><br>
                <input type="tel" name="phone" width="60%" placeholder="eg. XXX-XXX-XXXX"><br>
                <label for="service"><h6>Service Required: </h6></label><br>
                <select name="service" name="service">
                	<option value="default" disabled selected>Please select a service</option>
                    <option value="Mortgage">Mortgage Services</option>
                    <option value="Title Search">Title Search</option>
                    <option value="Examination">Examination Services</option>
                    <option value="Retail Banking">Retail Banking</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Finance and Accounting">Finance and Accounting</option>
                    <option value="HR">HR Services</option>
                    <option value="Research & Analytics">Research & Analytics</option>
                    <option value="Logistics">Logistics</option>
                    <option value="SAP">SAP</option>
                    <option value="Mobile App">Mobile App</option>
                    <option value="Web Development">Web Development</option>
                    <option value="Oracle">Oracle</option>
                </select><br>
                <label for="msg"><h6>Message: </h6></label><br>
                <textarea name="msg" placeholder="Please state your company name and describe your service needs." required></textarea><br><br>
                <input type="submit" name="send_email" class="form_button">
        	</fieldset>
    	</form>
      </div>
      <div class="half">
      	<iframe src="https://mapsengine.google.com/map/embed?mid=zZDzO7gtRvTk.k-HT3vD2x5xQ" width="100%" height="310px"></iframe>
        <div style="display: inline-block; padding: 5px;">  
          <h3>Corporate Office:</h3>
          <p>  
            115 W. Main St.<br>
            2nd Flr Ste. D<br>
            Trappe, PA. 19426
          </p>
        </div>
      </div>
      	<p class="sloganLine">
          JPM Bridges the Gap and Get&rsquo;s you there.
        </p>
  </div><!--#content-->
  </div><!--megaContainer-->
<?php include('includes/footer.inc');?>
</body>
</html>