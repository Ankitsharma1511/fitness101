<!DOCTYPE html>
<html lang="en">
<head>
<title>Fitness Club | Contacts</title>
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
              <h2><span class="color-1">Find</span> us</h2>
              <div class="map img-border">
                <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
              </div>
              <dl>
                <dt class="color-1"><strong>8901 Marmora Road,<br>
                  Glasgow, D04 89GR.</strong></dt>
                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                <dd><span>Fax:</span>+1 800 889 9898</dd>
                <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
              </dl>
            </div>
            <div class="col-4">
              <h2><span class="color-1">Register</span> form</h2>
              <form id="form" method="post" action="#">
                <fieldset>
                  <label>
                    <input type="text" name="new_user_first" placeholder="First name" >
                  </label>
                   <label>
                    <input type="text" name="new_user_last" placeholder="Last name" >
                  </label>
                  <label>
                    <input type="email" name="new_user_email" placeholder="E-mail" >
                  </label>
                   <label>
                    <input type="text" name="new_user_phone" placeholder="Phone number" >
                  </label>
                   <label>
                    <input type="text" name="new_user_city" placeholder="City" >
                  </label>
                   <label>
                    <input type="password" name="new_user_password" placeholder="password" >
                  </label>
                   <label>
                    <input type="password" name="confirm_pass" placeholder="Confirm password">
                  </label>
                  <label>
                    <textarea name="user_about" placeholder="About me" ></textarea>
                  </label>
                  <div class="btns">
               <button class="button button2" name="regs">Register</button>

                </div>
                </fieldset>
              </form>
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
