<?php include($_SERVER['DOCUMENT_ROOT'].'/config.php'); ?>
<?php
setcookie("discount", "yes", time()+3600, '/', '.sebi.winarrow.net');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
<title><?=$site_title ?></title>
<link href="<?=URL ?>css/default3-css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?=URL ?>css/default3-css/style.css" rel="stylesheet" type="text/css" />
    <?php include(TRAFFIC_TRACKING); ?>
	<script type="text/javascript">
	var timeInSecs;
	var ticker;
		
		function add2cart(ID) { 
			document.getElementById(ID).style.visibility = 'hidden'; 
		} 
		function justExpired(ID) { 
			document.getElementById(ID).style.visibility = 'visible'; 
		} 
		function startTimer(secs){
			timeInSecs = parseInt(secs)-1;
			ticker = setInterval("tick()",1008);   // every second
		}
		
		function tick() {
			var secs = timeInSecs;
			if (secs>0) {
			timeInSecs--;
		}
			else {
				clearInterval(ticker); // stop counting at zero
				add2cart('add_to_cart');
				justExpired('just');
		}
		
		document.getElementById("ticking").innerHTML = secs;
		document.getElementById("ticking2").innerHTML = secs;
		}
</script>
 <?php include(HEAD_CODE); ?>
</head>
<body onload="startTimer(60);">
  <?php include(BODY_CODE); ?>
  <!-- star wrapper -->
  <div id="wrapper">
      <!-- start container -->
      <h1 style=" font-size:100px; margin-top:-15px;">Wait!!!</h1>
    <div id="container">
      <!-- Page Content -->
      <br />
      <br />
      <!--Content goes here-->
      <p><span class="highlight">IMPORTANT MESSAGE from <?=$site_name ?></span></p>

    <div style="width:629px; margin:auto;">
    <div id="ticking2" style="position:absolute; margin-top:170px; margin-left:170px; color:#cc0000; font-size:Tahoma; font-weight:bolder; font-size:120px; border:none;">60</div>
    <img src="<?=URL ?>images/default/military_girl_27_30.jpg" width="629" height="382" />
    </div>
        <h1>Just One  Tip From 180 Gallons A Day Report<br /> Could Mean Your Life </h1>
        <h1>Or Your <u>Death</u>!</h1>
        <h3 align="center">Which is  why...We just <em><u>slashed</u></em> the  price on the complete<br /> <br /> 180 Gallons A Day Report...<br /><br /> Click below  to lock in your <em><u>insane</u></em> discount...</h3><br /> 
    <p style="color:#000000; text-align:center; font-size:26px"><span style="background-color:#cc0000; color:#FFF; font-weight:bolder; padding:5px;">Old price: $7.00</span>&nbsp;&nbsp;&nbsp;<span style="background-color:#030; padding:5px; color:#FFF; font-weight:bolder;">New Price: $4.90</span></p>
    
    <h3 align="center">Warning:  You Have Just...</h3>
    	<h1><span id="ticking">60</span> seconds </h1>
    
    <h3 align="center">to claim  this discount before it expires...</h3>
             
   <div style="text-align:center; margin: 0 auto 0; width:452px; height:165px;"> 
  <div id="add_to_cart">
  <a href="<?=BASE_DISCOUNT_BUY_LINK ?>">
  <img src="<?=URL ?>images/default/add2cart_orange_big.jpg" />
  </a>
  </div>
        <div style="overflow: hidden; text-align:center; margin: -150px auto 0px;">        
        	<div id="just" style="visibility:hidden">
            <h1>
            Offer just expired...
            </h1>
            <center>
            <a href="<?=BASE_BUY_LINK ?>" target="_blank"><strong>&gt;&gt; Click here to get 180 Gallons A Day Report at the regular price ($7.00) &lt;&lt;</strong></a>
            </center>
        	</div> 
         </div>
   </div>     
      <!--Content goes here-->
<!-- End Page Content -->
<br />
      </div>
   <!-- end container -->
 <?php include(FOOTER_CONTENT); ?>
<br/>
<br/>

 </div>
  <!-- end wrapper -->
<?php include(FOOTER_CODE); ?>
</body>
</html>