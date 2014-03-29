<!DOCTYPE html>
<html>
<head>
<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Catalyst 4 Success</title>
	<meta name="description" content="">

            <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="assets/bootstrap/css/bootstrap-overrides.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/theme.css">
      <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/lib/animate.css" media="screen, projection">
      <link rel="stylesheet" href="assets/bootstrap/css/contact.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="main.css">


</head><body>

    <div id="contact">

         <div class="picture1" style="background-image:url(IMG_4654.JPG); background-size:100%;"></div>
<div id="first">

<br><br><br><br>
<div class="section_header">
<center style="font-family:arial"><h1>Catalyst For Success: Westview Chapter</h1></center>
</div>

        <div class="container">

            <div class="section_header">
                <h3>Sign Up for an Event</h3>
            </div>
            <div class="row contact">
<form action="#" name="MYFORM" id="MYFORM">
          <div class="span5">
					<input name="name" size="40" class="span5" type="text" id="name" placeholder="Name"><br>
					<input name="email" size="40" type="text" class="span5" id="email" placeholder="E-mail Address">
          <img src="assets/refresh.jpg" style="height:50px" alt="" id="refresh"/><img src="contact/get_captcha.php" alt="" id="captcha"/>
          <br/><input name="code" type="text" id="code" placeholder="Enter Captcha" class="top10">
          <br/>
          <input value="Send" type="submit" id="Send" class="btn btn-primary top10">

          </div>
          <div class="span5 offset1">
              <textarea id="message" name="message" class="span5" placeholder="Message" rows="8"></textarea>
          </div>
				</form>
            </div>
</div>
</div>

        <div class="row map">
                <div class="span5 box_wrapp" style="top:61%">
                    <div class="box_cont">
                        <div class="head">
                            <h6>Contact</h6>
                        </div>
                        <ul class="street">
                            <li>13500 Camino Del Sur.</li>
                            <li>City, San Diego. United States,</li>
                            <li>Zip Code, CA 92129.</li>
                            <li class="icon icontop">
                                <span class="contacticos ico1"></span>
                                <span class="text">(858)212-7456</span>
                            </li>
                            <li class="icon">
                                <span class="contacticos ico2"></span>
                                <a class="text" href="MAILTO:C4SWestview@gmail.com">c4swestview@gmail.com</a>
                            </li>
                        </ul>

                        <div class="head headbottom">
                            <h6>Work with us</h6>
                        </div>
                        <p>Schedule a hands-on or show event</p>

                        <a href="MAILTO:C4SWestview@gmail.com" class="btn">Let's get started</a>
                    </div>
                </div>
            </div>
            <div class="overlay" style="opacity:.60; background-color:#909090;"></div>
            <iframe width="100%" height="600" frameborder="0" scrolling="no" style="pointer-events:none"  marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;q=westview+high+school&amp;fb=1&amp;gl=us&amp;hq=westview+high+school&amp;cid=0,0,3734733874242879612&amp;ll=32.966979,-117.148054&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe>
<!--
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/?ie=UTF8&amp;ll=64.089157,-21.816616&amp;spn=0.045157,0.15398&amp;t=m&amp;z=13&amp;output=embed"></iframe>-->

        </div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/bootstrap/js/theme.js"></script>
    <script src="one-page-nav/jquery.scrollTo.js"></script>
    <script src="one-page-nav/jquery.nav.js"></script>
<script type="text/javascript">
$(document).ready(function() { 
$('#top-nav').onePageNav({
    currentClass: 'active',
    changeHash: true,
    scrollSpeed: 1200
    });

	 $('#Send').click(function() {  
			// name validation
      console.log("test");
			var nameVal = $("#name").val();
			if(nameVal == '') {
				$("#name_error").html('');
				$("#name").after('<label class="error" id="name_error">Please enter your name.</label>');
				return false
			}
			else
			{
				$("#name_error").html('');
			}
			/// email validation
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var emailaddressVal = $("#email").val();
			if(emailaddressVal == '') {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error">Please enter your email address.</label>');
				return false
			}
			else if(!emailReg.test(emailaddressVal)) {
				$("#email_error").html('');
				$("#email").after('<label class="error" id="email_error">Enter a valid email address.</label>');
				return false
			}
			else
			{
				$("#email_error").html('');
			}
			// message validation
			var nameVal = $("#message").val();
			if(nameVal == '') {
				$("#message_error").html('');
				$("#message").after('<label class="error" id="name_error">Please enter your message.</label>');
				return false
			}
			else
			{
				$("#message_error").html('');
			}
			$.post("post.php?"+$("#MYFORM").serialize(), {
			}, function(response){
			if(response==1)
			{
				$("#after_submit").html('');
				$("#Send").after('<div class="alert alert-success success" id="after_submit"><button type="button" class="close" data-dismiss="alert">×</button>Thank you! Your message has been sent.</div>');
				change_captcha();
				clear_form();
			}
			else
			{
				$("#after_submit").html('');
				$("#Send").after('<label class="error" id="after_submit">Wrong captcha! Refresh and try again.</label>');
			}
		});
		return false;
	 });
	 // refresh captcha
	 $('img#refresh').click(function() {  
			change_captcha();
	 });
	 function change_captcha()
	 {
	 	document.getElementById('captcha').src="contact/get_captcha.php?rnd=" + Math.random();
	 }
	 function clear_form()
	 {
	 	$("#name").val('');
		$("#email").val('');
		$("#message").val('');
	 }
}); 	
</script>


</body>
</html>
