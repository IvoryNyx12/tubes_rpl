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
    <link rel='stylesheet' href='asset/css/style.css' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <style type="text/css">
      * { margin: 0; padding: 0; }
        #page-wrap { width: 600px; margin: 15px auto; }
        #sidebar ul { background: #eee; padding: 10px; }
        li { margin: 0 0 0 20px; }
        #main { width: 390px; float: left; }
        #sidebar { width: 190px; float: right; }
  </style>

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
    <script type="text/javascript">
        $(function() {
            var offset = $("#sidebar").offset();
            var topPadding = 15;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#sidebar").stop().animate({
                        marginTop: $(window).scrollTop() - offset.top + topPadding
                    });
                } else {
                    $("#sidebar").stop().animate({
                        marginTop: 0
                    });
                };
            });
        });
    </script>
  </head>
<body>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- Navbar -->

  <!-- Hero Banner -->
  <section class="hero has-bg-img" style="background-image: url(https://images.pexels.com/photos/708440/pexels-photo-708440.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
  
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
      </div>
    
    </div>
  
  </section>
  <!-- Desc team -->

    <!-- Grup Kecil -->
  <div class="container u-mrgn--top-xl">
    <div class="row">
      <div class="col-sm-8" style="background-image: url('https://images.pexels.com/photos/708440/pexels-photo-708440.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-size: cover;height: 30em">
      <div class="row">
        <div class="column column.is-full" style="background-color: #ffcc00;bottom: 0;position: absolute; width: 100%;">
          <h1 class="title u" style="background-color: #ffcc00;color: white;">Hanya 2 juta rupiah</h1>
        </div>
      </div>
      </div>
      <div class="col-sm-4" style="background-color: #">
        <div class="column column.is-full has-text-centered u-pad--v-2 u-mrgn--top-1" >
              <h1 class="title u-mrgn--bottom-5">Grup Kecil</h1>
              <p class="subtitle u-lh--3">13 Januari 2019</p>
        </div>
        
        <div class="row  u-mrgn--top-1">
        
        <div class="col-sm-6" style="bottom: 0; right: 0;position:relative; width: 100%;">
          <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/133028-200.png" style="height: 50px;width: 50px">
          <h1> <strong>TANGGAL</strong><br>7 Hari, 6 Malam</h1>
        </div>
        
        <div class="col-sm-6" style="bottom: 5;right: 0;position:absolute; width: 100%;">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT67tFlqga58TohjFOpcrqUYFJFNXewRV6pRtFIoMreTBCHK7DJ" style="height: 50px;width: 50px">
          <h1> <strong>DESTINASI</strong><br>Mengunjungi 10 tempat</h1>
        </div>
        
        </div>
        
        <div class="row u-mrgn--top-5" style="background-color: #">
        
        <div class="col-sm-6" style="bottom: 0; right: 0;position:relative; width: 100%;">
          <img src="data:image/png;base64,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" style="height: 50px;width: 50px">
          <h1> <strong>Akomodasi</strong><br>Hotel mewah dan kendaraan</h1>
        </div>
        
        <div class="col-sm-6" style="bottom: 5;right: 0;position:absolute; width: 100%;">
          <img src="http://hddfhm.com/images/book-icons-clipart-13.jpg" style="height: 50px;width: 50px">
          <h1> <strong>Perjalanan</strong><br>Grup kecil dan pemandu</h1>
        </div>
        
        </div>

      </div>      
    </div>
  </div>
  <!-- Grup Kecil -->


  <!-- Jadwal -->
  <section class="container u-mrgn--top-m" >
    <div class="columns is-centered">
      <div class="column is-full">
        <h1 class="title u-txt--bold" style="font-size: 5em">Jadwal</h1>
      </div>
    </div>
  </section>
  <!-- Jadwal -->

  <!-- Isi Jadwal -->
  <div class="container u-mrgn--top-xl">
      <div class="row">
        <div class="col-sm-8">
          <!-- Hari 1 -->
          <span class="u-color--ruby u-txt--bold" ><h4 style="background-color: #ffcc00;padding: 2px;"><strong style="color: white">Hari 1</strong></h4></span>
          <h3 class="u-mrgn--top-1" style="font-size: 2em"><strong>Selamat datang di Banyumas</strong></h3>
          <h3 class="" style="font-size: 1.4em"><i class="material-icons">&#xe0c8;</i><strong>Purwokerto</strong></h3>
          <div class="u-mrgn--top-5" style="line-height: 2;">
             <h2>
               We hope you had a good flight. You will be transferred from Ben Gurion airport to Jerusalem in a comfortable air-conditioned vehicle with plenty of room for luggage.
            </h2><br>
            <h2>
              Once you’ve had a chance to freshen up after your journey, your guide will meet you in the hotel lobby and together you will proceed to the Western Wall or “Kotel”. As today is a Friday your first Jerusalem experience will be one of watching the singing, dancing and celebrations as the Jewish Sabbath (Shabbat) is welcomed into the holy city. Your guide will then escort you to a home hospitality dinner where you will enjoy your first meal in Israel as a group.
            </h2><br>

            <h2>
              <strong>Shabbat Dinner Home Hospitality</strong>
            </h2><br>

            <h2>
              You will enjoy a traditional Shabbat dinner in the home of a local Jewish family, gaining an insider’s view of the meaning of Shabbat in a Jerusalem home.
            </h2>

            <h2>
              <img src="https://pomegranate-travel.com/wp-content/uploads/2017/03/main_Home-Hospitality-Eating-1-1024x614.jpg">
            </h2><br>

            <h2>
              Food will be plenty and conversation is sure to be lively! Please note that the host family may also be entertaining other guests too.
            </h2><br>
          </div>
          <!-- Hari 1 -->

          <!-- Hari 2 -->
          <span class="u-color--ruby u-txt--bold" ><h4 style="background-color: #ffcc00;padding: 2px;"><strong style="color: white">Hari 2</strong></h4></span>
          <h3 class="u-mrgn--top-1" style="font-size: 2em"><strong>Private Guided Day Tour - with vehicle</strong></h3>
          <h3 class="" style="font-size: 1.4em"><i class="material-icons">&#xe0c8;</i><strong>Purwokerto</strong></h3>
          <div class="u-mrgn--top-5" style="line-height: 2;">
             <h2>
               We hope you had a good flight. You will be transferred from Ben Gurion airport to Jerusalem in a comfortable air-conditioned vehicle with plenty of room for luggage.
            </h2><br>
            <h2>
              Once you’ve had a chance to freshen up after your journey, your guide will meet you in the hotel lobby and together you will proceed to the Western Wall or “Kotel”. As today is a Friday your first Jerusalem experience will be one of watching the singing, dancing and celebrations as the Jewish Sabbath (Shabbat) is welcomed into the holy city. Your guide will then escort you to a home hospitality dinner where you will enjoy your first meal in Israel as a group.
            </h2><br>

            <h2>
              <strong>Shabbat Dinner Home Hospitality</strong>
            </h2><br>

            <h2>
              You will enjoy a traditional Shabbat dinner in the home of a local Jewish family, gaining an insider’s view of the meaning of Shabbat in a Jerusalem home.
            </h2>

            <h2>
              <img src="https://pomegranate-travel.com/wp-content/uploads/2017/03/main-Jerusalem-Kotel-and-Dome-of-the-Rock-1024x614.jpg">
            </h2><br>

            <h2>
              Food will be plenty and conversation is sure to be lively! Please note that the host family may also be entertaining other guests too.
            </h2><br>
          </div>      
        </div>
        <!-- Hari 2 -->
        
        <div class="col-sm-4" style="background-color: #">
          <div id="sidebar">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="https://cdn0.archipelagointernational.com/v1/imgs/news/Photo_2_Exterior_Of_Aston_Jambi.jpg" alt="Card image cap">
              <div class="card-body ">
                <h5 class="card-title">Hotel Aston Imperium</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-secondary">Lihat peta</a>
              </div>
            </div>
          </div>  
      </div>

    </div>
  </div>
  <!-- Isi Jadwal -->




  <!-- Kenapa pilih kita --> 
  <?php include('pilihkita.php');?>
  <!-- Kenapa pilih kita -->

  <!-- Footer -->
       <?php include('footer.php');?>
  <!-- Footer -->      


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script type="text/javascript" src="asset/js/js.js"></script>
</body>

</html>-