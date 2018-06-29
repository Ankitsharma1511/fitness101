<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Nutrition</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/grid_12.css">
<script src="../js/jquery-1.7.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/cufon-yui.js"></script>
<script src="../js/Asap_400.font.js"></script>
<script src="../js/Coolvetica_400.font.js"></script>
<script src="../js/Kozuka_M_500.font.js"></script>
<script src="../js/cufon-replace.js"></script>
<script src="../js/FF-cash.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <div class="bg-img"></div>
  <!--==============================header=================================-->
   <?= $this->load->view('common/header','', TRUE); ?>

  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-1">
              <h2 class="p3"><span class="color-1">We do care</span> about your health</h2>
              <p class="p2"><strong>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </strong></p>
              <p class="p5">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
              <div class="wrap box-1"> <img src="../images/page4-img1.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p class="p2"><strong>Eirmod tempor invidunt ut labore et dolore</strong></p>
                  <p>Magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata.</p>
                  <a href="#" class="button top-6">Search</a> </div>
              </div>
              <h2 class="p3 top-2"><span class="color-1">You are</span> in good hands</h2>
              <p class="p2"><strong>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</strong></p>
              <p class="p5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
            </div>
            <div class="col-2">
              <h2 class="p6"><span class="color-1">About</span> nutrition</h2>
              <img src="../images/page4-img2.jpg" alt="" class="img-border">
              <p class="p2 top-6"><strong>Nam liber tempor cum</strong></p>
              <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>
              <ul class="list-2">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetuer adipiscing elit</a></li>
                <li><a href="#">Diam nonummy nibh</a></li>
                <li><a href="#">Euismod tincidunt ut laoreet</a></li>
                <li><a href="#">Dolore magna aliquamerat</a></li>
                <li><a href="#">Ut wisi enim adminim</a></li>
              </ul>
              <a href="#" class="button top-5">Read more</a> </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
  <!--==============================footer=================================-->
   <?= $this->load->view('common/footer','', TRUE); ?>

</div>
<script>Cufon.now();</script>
</body>
</html>
