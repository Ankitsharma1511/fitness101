<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Trainings</title>
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
            <div class="col-3">
              <h2 class="p3"><span class="color-1">Main</span> programs</h2>
              <p class="p2"><strong>Nam liber tempor cum soluta nobis eleifend</strong></p>
              <p class="p4">Option congue nihil imperdiet doming id quod mazim placerat facer possim assum:</p>
              <ul class="list-2 p5">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetuer adipiscing elitsed</a></li>
                <li><a href="#">Diam nonummy nibh</a></li>
                <li><a href="#">Euismod tincidunt ut laoreet</a></li>
                <li><a href="#">Dolore magna aliquamerat</a></li>
              </ul>
              <p>Ut wisi enim adminim veniam quis nostrud exerci tation ullamcorper suscipit lobortis nisl.</p>
              <a href="#" class="button top-3">Read more</a> </div>
            <div class="col-4">
              <h2 class="p3"><span class="color-1">Our</span> training</h2>
              <p class="p2"><strong>Nam liber tempor cum soluta nobis eleifend option congue nihil</strong></p>
              <p>Imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
              <div class="wrap box-1 top-4"> <img src="../images/page2-img1.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p class="p2"><strong>Duis autem vel eum iriure dolor</strong></p>
                  <p>Hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilis lorem ipsum dolor.</p>
                </div>
              </div>
              <div class="wrap box-1 top-2"> <img src="../images/page2-img2.jpg" alt="" class="img-border img-indent">
                <div class="extra-wrap">
                  <p class="p2"><strong>Ut wisi enim ad minim veniamis nostrud</strong></p>
                  <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim.</p>
                </div>
              </div>
            </div>
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
