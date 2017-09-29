<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>JPM | Continuous Integration Testing</title>
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
        background: url(stockPhotos/sap1600.jpg) !important;
        background-position:center !important;
        background-attachment:fixed !important;
        background-repeat:no-repeat !important;
        background-color:#000033 !important;
    }
    @media (min-width:1601px){
      body{
          background: url(stockPhotos/sap2000.jpg) !important;
          background-position:center !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#000033 !important;
        }
      }
    @media (max-width:1200px){
      body{
          background: url(stockPhotos/sap1200.jpg) !important;
          background-position:50% 30% !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#000033 !important;
        }
      }
    @media (max-width:960px){
      body{
          background: url(stockPhotos/sap960.jpg) !important;
          background-position:50% 30% !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#000033 !important;
        }
    }
    @media (max-width:800px){
      body{
          background: url(stockPhotos/sap800.jpg) !important;
          background-position: 50% 30% !important;
          background-attachment:fixed !important;
          background-repeat:no-repeat !important;
          background-color:#000033 !important;
        }
    }
    @media (max-width:530px){
        body{
          background: url(images/binding_light.png) !important;
        }
    }
  </style>
</head>

<body>
<?php include('includes/header.inc');?>

  <div id="megaContainer" style="max-width:1400px; position:relative; margin:0 auto">
    <div id="content">
      <h1>Continuous Integration (CI) Testing</h1>
        <div class="half" style="border-right:1px #FFF groove; float:left;">
          <p>
            Continuous integration involves integrating early to detect and fix integration problems continuously and early phases of the development life cycle reducing cost and time.
          </p>
          <h5>CI Testing = Continuous Quality Improvement</h5>
          <p>
            This is achieved by setting up a CI build server automatically building the system and testing it as soon as the changes are committed in a version control system. Continuous checks and balances are exercised on the code quality without any delay which will help reduce uncertainties on application quality.
          </p>
        </div>
        <div class="half">
          <ul>
            <li>Developers commit code => Version control triggers an event to produce a new application build => If application build is successful then
              <ul>
                <li>In response, CI server checks out the latest automation code</li>
                <li>CI server builds code => CI Server triggers test execution</li>
                <li>Sends out notification once complete by publishing the HTML results and detail log</li>
                <li>If build fails => Developers fix the issue(s) and commit code</li>
              </ul>
            </li>
            <li>The cycle repeats …</li>
          </ul>
        </div>
        <p class="sloganLine">
          JPM Bridges the Gap and Get&rsquo;s you there.
        </p>
    </div><!--#content-->
  </div><!--megaContainer-->
<?php include('includes/footer.inc');?>
</body>
</html>