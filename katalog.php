<!doctype html>
<html lang="en-US" class="no-js">
  <head>
    <meta charset="UTF-8">
    <title> Banyumas Treveler </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/img/logo.png" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/layout.css"/>
    <link rel='stylesheet' href='asset/css/style.css' />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="asset/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
      $(function () {
        
        var filterList = {
        
          init: function () {
          
            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixItUp({
              selectors: {
                target: '.portfolio',
                filter: '.filter1' 
              },
              load: {
                filter: '.cc'  
              }     
            });               
          
          }

        };
        
        // Run the show!
        filterList.init();
        
        
      }); 
      </script>
  </head>
<body>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- Navbar -->

  <!-- Hero Banner -->
  <section class="hero has-bg-img" style="background-image: url(https://images.pexels.com/photos/709/nature-mountain-volcano-asia.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
  
    <div class="hero-body">
      <div class="container" style="z-index: 5">
        <div class="columns">
          <div class="column is-half u-mrgn--top-m1">
            <h1 class="title u-txt--medium u-mrgn--bottom-5">Nikmati liburan mu, 
              <br/>dengan
              <span class="u-color--ruby u-txt--bold">BANYUMAS TREVELER</span>
            </h1>
            <h2 class="subtitle u-lh--3">Banyumas treveler. bersama kita akan menjelajahi banyumas, sesuaikan liburan kamu dengan katagori tersedia atau pilih sesuai kebutuhan mu!</h2>
          </div>
        </div>
      </div>
      <div class="filter" style="z-index: 1"></div>
  
  </section>
  <!-- Hero Banner -->

  <!-- Desc team -->
  <section class="container u-mrgn--top-xl" >
    
    <div class="columns is-centered">
    
      <div class="column is-three-quarters has-text-centered u-pad--v-2">
         <span class="u-color--ruby u-txt--bold"><h4>#visitbanyumas</h4></span>
        <h1 class="title u-mrgn--bottom-5">Banyumas treveler</h1>
        <p class="subtitle u-lh--3">Ahlinya kemping ceria, nanjak gunung, jeguran curug, wisata kuliner, sepeda - sepedaan di banyumas</p>
        <button type="button" class="btn btn-outline-dark" style="margin-top: 15px;">Meet our team</button></a></p>
      </div>
    
    </div>
  
  </section>
  <!-- Desc team -->

  <!-- katalog --> 
 <section class="container u-mrgn--top-xl" >
    <div class="column column.is-full has-text-centered u-pad--v-2">
    <h1 class="title u-mrgn--bottom-5">Katalog</h1>
  <div class="container">
  
    <ul id="filters1" class="clearfix">
      <li><span class="filter1 active" data-filter=".cc, .ng, .jc, .wk, .ss">All</span></li>
      <li><span class="filter1" data-filter=".cc">Camping ceria</span></li>
      <li><span class="filter1" data-filter=".ng">Nanjak gunung</span></li>
      <li><span class="filter1" data-filter=".jc">Jeguran curug</span></li>
      <li><span class="filter1" data-filter=".wk">Wisata kuliner</span></li>
    </ul>

    <div id="portfoliolist">
      
      <div class="portfolio jc" data-cat="jc">
        <div class="portfolio-wrapper">   
          <img src="asset/img/portfolios/curug/telagasunyi.jpg" alt="" />
          <div class="label">
            <div class="label-text">
              <a href="telagasunyi.php" class="text-title" style="color: white">Telaga Sunyi</a>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div> 

      <div class="portfolio cc" data-cat="cc">
        <div class="portfolio-wrapper">   
          <img src="asset/img/portfolios/camp/tranggulasih.jpg" alt="sad" />
          <div class="label">
            <div class="label-text">
              <a href="tranggulasih.php" class="text-title" style="color: white">Tranggulasih</a>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>

      <div class="portfolio ng" data-cat="ng">
        <div class="portfolio-wrapper">   
          <img src="asset/img/portfolios/nanjak/gunungslamet.jpg" alt="sad" />
          <div class="label">
            <div class="label-text">
              <a href="tranggulasih.php" class="text-title" style="color: white">Gunung Slamet</a>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>

      <div class="portfolio wk" data-cat="wk">
        <div class="portfolio-wrapper">   
          <img src="asset/img/portfolios/kuliner/pratisthaharsa.jpg" alt="sad" />
          <div class="label">
            <div class="label-text">
              <a href="tranggulasih.php" class="text-title" style="color: white">Pratistha Harsa</a>
            </div>
            <div class="label-bg"></div>
          </div>
        </div>
      </div>          
                    
    </div>
    
  </div><!-- container -->
  </section>
  <!-- katalog -->

  <!-- Kenapa pilih kita --> 
  <?php include('pilihkita.php');?>
  <!-- Kenapa pilih kita -->
  
  <!-- Footer -->
       <?php include('footer.php');?>
  <!-- Footer -->      


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  


</body>

</html>