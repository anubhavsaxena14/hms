<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="images/HMS-Logo.jpg" type="image/jpg" sizes="16x16">
<title>HMS</title>
<!-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script src="jquery-1.11.0.min.js"></script>

<script>
function updateFrame(src) {
	document.getElementById("hmsFrame").src = src;
}

function serviceRequest(value) {
	var openServiceFrame = 'services/'+value+'.php';
	updateFrame(openServiceFrame);	
}

$("#menu a").click(function(e) {
      e.preventDefault();
      var src = $(this).attr('href');

      $('#hmsFrame').fadeOut(1000,function(){
          $('#hmsFrame').attr('src',src ).load(function(){
              $(this).fadeIn(1000);    
          });
      });
 });
</script>

<style>
header {
    background-color:green;
    color:white;
    text-align:center;
    padding:5px;	 
}

footer {
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;	 	 
}

nav a {
	height:40px;
	width:80px;
	border-color: ButtonHighlight ButtonShadow ButtonShadow ButtonHighlight;
	display: inline-block; padding: 2px 8px;
	border-style: solid; border-width: 1px;
	background: ButtonFace; color: ButtonText;
	background-color:tan;
}

nav a:link, a:visited {
    text-decoration: none;
    cursor: auto;
}

nav a:link:active, a:visited:active {
}

</style>
</head>

<body>

<header>
<table align="center">
<tr>
<td><img src="images/HMS-Logo.jpg" alt="HMS LOGO" width="100" height="60"></img></td>
<td><h1>Welcome to Hospital Management System</h1></td>
</tr>
</table>
</header>

<table width="100%" height="435px" border="1">
<tr>
<td width="10%" valign="top" bgcolor="wheat">
<nav id="menu">
<a href="menu/home.php" target="hmsFrame">Home</a>
<a href="menu/what-HMS.php" target="hmsFrame">What is HMS?</a>
<a href="menu/mission.php" target="hmsFrame">Our Mission</a>
<a href="menu/services.php" target="hmsFrame">Services</a>
<a href="menu/address.php" target="hmsFrame">Our Address</a>
<a href="menu/anubhav.php" target="hmsFrame">About the Developer</a>
</nav>
</td>
<td bgcolor="snow">
<iframe name="hmsFrame" id="hmsFrame" width="100%" height="420px" frameborder="0" src="images/hospital.jpg"></iframe>
</td>
</tr>
</table>

<table width="100%" border="1">
<tr>
<td bgcolor="peru" align="center">News Update: </td>
<td bgcolor="oldlace" color="yellow" width="800px"><marquee>10% discount for NITS Students and faculty. AIIMS surgeon about to join medical staff. Eye operation camp in rural areas of Silchar on 25 December. Mobile application for HMS soon to release.</marquee></td>
</tr>
</table>

<footer>
Copyright &copy; Anubhav Saxena. &trade; NIT SILCHAR - 2014
</footer>

</body>
</html>
