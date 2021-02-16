<?php 
ob_start(); 
include 'db/db_connection.php';
include 'db/entity/shorter.php';

$actual_link = $_SERVER["REQUEST_URI"];
$actual_link = substr($actual_link,1);



	if($actual_link != 0){
	  $shorter = new Shorter();
	  $query = "";
	  $query = $query."SELECT * FROM `shorter` WHERE SHORTER_URL = '".$actual_link."';";

	  $conn = new DBConnection();
	  $conn -> get_connetion();
	  $result =  $conn -> execute_query($query);

	  
	  if ($result->num_rows > 0) {

	    $shorter -> auto_set($result);

	    header('Location: //'.$shorter->get_url());
	  }
	  $conn -> close_connetion();
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>MyURL</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="/css/bootstrap.min.css">
     <link rel="stylesheet" href="/css/font-awesome.min.css">
     <link rel="stylesheet" href="/css/aos.css">
     <link rel="stylesheet" href="/css/owl.carousel.min.css">
     <link rel="stylesheet" href="/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/css/templatemo-digital-trend.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
      
    </nav>
    <script type="text/javascript">
    	function gotohome() {
    		window.location.replace("/");
    	}
    </script>

     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Page Not Found</h1>
                                    <button type="button"  data-aos="fade-up" data-aos-delay="250" onclick="gotohome()" class="btn  btn-lg btn-success btn-flat">Back to Home</button>
                                  
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="/images/404.svg" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


 



     <!-- SCRIPTS -->
     <script src="/js/jquery.min.js"></script>
     <script src="/js/bootstrap.min.js"></script>
     <script src="/js/aos.js"></script>
     <script src="/js/owl.carousel.min.js"></script>
     <script src="/js/smoothscroll.js"></script>
     <script src="/js/custom.js"></script>

</body>
</html>