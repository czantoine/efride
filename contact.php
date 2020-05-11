<!DOCTYPE html>
<html lang="fr" >

<?php include ("head.php"); ?>

<body >
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				xfbml            : true,
				version          : 'v6.0'
			});
		};

		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = 'https://connect.facebook.net/fr_FR/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<!-- Your customer chat code -->
		<div class="fb-customerchat"
		attribution=setup_tool
		page_id="569672709803629"
		theme_color="#fa3c4c"
		logged_in_greeting="Bonjour, on peut aider ? "
		logged_out_greeting="Bonjour, on peut aider ? ">
	</div>

    <?php include ("menu.php"); ?>

    <br/> <br/><br/> <br/> <br/>

     <center><h2>Contactez-nous</h2></center>
     <center><p>Directement sur Messenger ou sur notre Discord </p></center>
     <br>
     <center><h2>Discord </h2></center>
     <br><br>
     <center><iframe src="https://discordapp.com/widget?id=446302117863489536&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe></center>
     <br><br><br><br><br>
     <center><h2>Messenger </h2></center>

      <a href="https://www.facebook.com/messages/t/569672709803629" target="_blank">
      	<div class="bubble-chat">
            <div class="container-circle">
                <div class="circle cc1" id="circle1"></div>
                <div class="circle cc2" id="circle2"></div>
                <div class="circle cc3" id="circle3"></div>
            </div>
        </div>
       </a>



    <br/><br/><br/><br/>  <br/><br/><br/><br/>            

    <?php include ("footer.php"); ?>

</body>
</html>
