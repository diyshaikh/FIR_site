<?php
	session_start(); // Add this line

	require("db_connect.php");
	

$value = $_SESSION['value'];


$_SESSION['update_FIR'] = $_POST['update_FIR'];
$update_FIR = $_POST['update_FIR'];

$cases = "SELECT * 
		FROM victim_data
		WHERE Victim_FIR = '" . $update_FIR . "' ";
$run_cases = mysqli_query($connect, $cases);
$cases_r = mysqli_fetch_array($run_cases);







//$rows = mysqli_num_rows($run_cases);

?> 

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title> Update Report </title>
        <meta name="description" content="">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
        
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet'>
        
        <!-- Syntax Highlighter -->
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shCore.css" media="all">
        <link rel="stylesheet" type="text/css" href="syntax-highlighter2/styles/shThemeDefault.css" media="all">
		
		<!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css2/font-awesome.min.css">
        <!-- Normalize/Reset CSS-->
		<link rel="stylesheet" href="css2/normalize.min.css">
		<!-- Main CSS-->
        <link rel="stylesheet" href="css2/main.css">
		
    </head>
	
    <body id="welcome">
    
        <aside class="left-sidebar">
            <div class="logo">
                <a href="#welcome">
                    <img src="img/logo.jpg" alt="">
                </a>
            </div>
            <nav class="left-nav">
                <ul id="nav">
                    <li class="current"><a href="#Cases" style="text-decoration: none;"> Cases </a></li>
                </ul>
            </nav>
        </aside>
		
		<div id="main-wrapper">
			
		    <div class="main-content">
				<div class="content-header">
		            <h1> Update Report </h1>
		        </div>
				
				<form action="update.php" method="POST">
					<section id="Cases">  
		            
		            <div class="features">
		                <h2 class="twenty"> FIR </h2>
		                
		                						
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> FIR number </label>
								<div class="col-sm-3"> 
									<input type="text" class="form-control" name="Victim_FIR"  placeholder="<?php echo $update_FIR ?>" >
									
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Name </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="Name" placeholder="<?php echo $cases_r['Name'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Place </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="Place" placeholder="<?php echo $cases_r['Place'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Statement </label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="Statement" placeholder="<?php echo $cases_r['Statement'] ?>">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> District </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="District" placeholder="<?php echo $cases_r['District'] ?>">
								</div>
							</div>
						
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> UID </label>
								<div class="col-sm-6">
									<input type="text" class="form-control" name="UID" placeholder="<?php echo $cases_r['UID'] ?>">
								</div>
							</div>
						
		            </div>

		        </section>
		        		        		        

		        
		        
				</form>
		    </div>
			
	
		</div>
		
		
		
		<!-- Essential JavaScript Libraries
		==============================================-->
        <script type="text/javascript" src="js2/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js2/jquery.nav.js"></script>
        <script type="text/javascript" src="syntax-highlighter2/scripts/shCore.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushXml.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushCss.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushJScript.js"></script> 
        <script type="text/javascript" src="syntax-highlighter2/scripts/shBrushPhp.js"></script> 
        <script type="text/javascript">
            SyntaxHighlighter.all()
        </script>
        <script type="text/javascript" src="js2/custom.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
		
    </body>
</html>