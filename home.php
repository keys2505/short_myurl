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

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="stylesheet" href="css/templatemo-digital-trend.css">
     <link rel="stylesheet" href="css/sweetalert2.css"  >

</head>
<script type="text/javascript">
  function shorter() {
  var parameter= "?URL="+document.getElementById("URL").value;
 
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText == "INVALID"){
          urlInvalid()
        }else if(this.responseText == "FALSE"){

        }else{
        document.getElementById("URL").value   = this.responseText;
        document.getElementById("btn_copy").style.display  =  "block";
        document.getElementById("btn_clear").style.display  =  "block";
        document.getElementById("btn_shorter").style.display  =  "none";
        }
      }
    };
    xmlhttp.open("GET", "ajax/ajax_shorter"+parameter , true);
    xmlhttp.send();
  
}

  function clearURL() {
  var parameter= document.getElementById("URL").value = "";
    document.getElementById("btn_copy").style.display  =  "none";
    document.getElementById("btn_clear").style.display  =  "none";
    document.getElementById("btn_shorter").style.display  =  "block";
  }

  function  copyText(){
      var copyText = document.getElementById("URL");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      Swal.fire({
      icon: 'success',
      title: 'URL Copied',
    })
  }

  function urlInvalid(){
    Swal.fire({
      icon: 'error',
      title: 'URL Invalid',
      text: 'Make sure you input the correct url',
      
    })
  }

</script>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="width: 70%">
              
              <img src="images/favicon.png" style="width: 10% ; height:auto;">
              MyURL
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Developer" class="nav-link smoothScroll">Developer</a>
                    </li>
                  <!--   <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="#contact" class="nav-link contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                           <div id="ajax_result" > </div>
                          
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">We are make your URL shorter</h1>
                                  
                                   <div class="input-group input-group-lg" data-aos="fade-up" data-aos-delay="200">

                                    <input type="text" class="form-control"  id="URL" placeholder="paste your link here">
                                    <span class="input-group-append" id="btn_shorter">
                                      <a type="button" href="javascript:shorter();" class="btn  btn-lg btn-success btn-flat">Shorten</a>
                                    </span>
                                    <span class="input-group-append" id="btn_copy" style="display: none;" >
                                      <a type="button" href="javascript:copyText();" class="btn  btn-lg btn-success btn-flat">Copy</a>
                                    </span>
                                    <span class="input-group-append" id="btn_clear"  style="display: none;">
                                      <a type="button" href="javascript:clearURL();" class="btn  btn-lg btn-danger btn-flat">Clear</a>
                                    </span>
                                    
                                  </div>
                                 
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="images/home.svg" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">MyURL is <strong>Very Usefull Tool </strong> for sharing your URL</h2>

                              <p class="mb-0" data-aos="fade-up">MyURL is a URL shortener that makes a site's pages can be accessed by using a URL that is extremely shorter than the original address
                              <br><br>You are allowed to use this tool for <strong>free</strong> and without limitations</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                          <br>
                          <br>
                          <br>
                          <img src="images/about.svg" style="width: 80%;" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>

     <section class="testimonial section-padding" id="Developer">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="images/dev.png"  class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Developer</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">This web tool is a simple project that I created to enhance my ability in conding and I hope this web page can be useful tools for many people either.</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <strong>Kade Eri Yudisastrawan</strong>

                        <span class="mx-1">/</span>

                        <small>Newbie Programmer</small>
                      </p>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Contact <strong>Us </strong> </h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +62 857 395 2115
            </p>

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                keys2505@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Our Office</h4>

            <p class="mb-1">
              <i class="fa fa-home mr-2 footer-icon"></i> 
              Jalan Penebel - Senganan, Penebel, Tabanan Regency, Bali
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
          
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
          
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="https://www.instagram.com/eri_ys01/" class="fa fa-instagram"></a></li>
              <li><a href="https://twitter.com/eri_ys01" class="fa fa-twitter"></a></li>
              <li><a href="https://facebook.com/eri.yudisastrawan" class="fa fa-facebook"></a></li>
              
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/sweetalert2.js"></script>

</body>
</html>