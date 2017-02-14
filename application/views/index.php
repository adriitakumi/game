<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/customize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/w3.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FA/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>FAcss/font-awesome.min.css" />
</head>
<body>

<div class="parallax">
  <div class = "w3-top">
  <ul class="w3-navbar w3-large w3-black w3-left-align">
  <li class="w3-hide-medium w3-hide-large w3-black w3-opennav w3-right">
    <a href="javascript:void(0);" onclick="myFunction()">☰</a>
  </li>
  <li><a href="#">Reality Realm</a></li>
  <li class="w3-hide-small"><a href="<?php echo site_url('welcome/index') ?>">Home</a></li>
  <li class="w3-hide-small"><a href="<?php echo site_url('welcome/about') ?>">About</a></li>
  <li class="w3-hide-small"><a href="<?php echo site_url('welcome/contact') ?>">Contact Us</a></li>
  <li class="w3-right w3-hide-small"><a href="#" id="myBtn2"><i class="fa fa-sign-in"></i> Log In</a></li>
  <li class="w3-right w3-hide-small"><a href="#" id="myBtn1"><i class="fa fa-user-circle"></i> Sign Up</a></li>

</ul>

    <div id="demo" class="w3-hide w3-hide-large w3-hide-medium">
      <ul class="w3-navbar w3-left-align w3-large w3-black">
        <li><a href="<?php echo site_url('welcome/index') ?>">Home</a></li>
        <li><a href="<?php echo site_url('welcome/about') ?>">About</a></li>
        <li><a href="<?php echo site_url('welcome/contact') ?>">Contact Us</a></li>
        <li><a href="#" id="myBtn1"><span class="fa fa-user-circle"></span> Sign Up</a></li>
        <li><a href="#" id="myBtn2"><span class="fa fa-sign-in"></span> Log In</a></li>
      </ul>
    </div>
  </div>
	 
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="myBtn1"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" id="myBtn2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
<div class = "cont">
<div style = "font-family: Charlemagne STD;" >
<div class="glitch" data-text="REALITY REALM">REALITY REALM</div>
</div>
</div> 
<div class = "synopsis">
<h1><div class="glitchh" data-text="Synopsis">Synopsis<br><br></div></h1>
<div class = "text">
  <p>
  ## Hello? Can anyone read this?<br>
  ## I don't know if you can see this, but I need your help.<br>
  ## I need you to s̝̲̪̬̀t̴͚͍͙̼̘̟ͅo͚̣̙͝ͅṕ̥̳̳̫ ҉̭h̴̰̜̣̳͍e͕̣͖̮̫̯͘ṛ̹̳ͅ ̖̰͕̩̰̪̜b̞̪̺̬e̺̥̻͔̩f̘͇̩̖̳͞o̱̜̠̗̬̼͉r̖̦̭̩͉̳͙e̛̹̫ ̴͍̳̟i̙̺͎͕ͅt̙̠̟͝'̞̘̕s͏̼̞ ̹̦̱͕̦̰t̻̞o̭o̩̭̘̘̙̟ ͏̖̮̱̖l͈̫̭̯a̮̖̤̘̩̩͘t̳̱͇̹e͙͟.̬̞̩̹̗͚͡ <br><br><br><br>

  Milo, Nido and Energen has just moved into an old mansion with their mom, Anmum. After a couple hurriedly leaves the mansion, a spooky backstory about the house is revealed, and some seemingly unexplainable events occur, Milo comes to a conclusion...<br><br>

  He realises that he is in a horror game. A <i>badly-written</i> horror game.<br><br>

  And he wants to leave... <br><br>
  <hr>
  <br>
  </p>
<h1><div class="glitchh" data-text="Characters">Characters<br><br></div></h1>
<div class="table-responsive"><center>
<table>
  <tr>
  <td><img src = "<?php echo base_url(); ?>img/milo.png"/></td>
  <td>Milo<br><br>Kinda main protagonist?? Siya mostly yung magsasalita eh pero ewan ko lang hahahahahahaha i wanna die kill me pls.</td>
  </tr>
  <tr>
    <td>Energen<br><br>Childhood friend ni Milo at Nido. Si forever girl WALANG MAG BABALENTAYNS</td>
    <td class = "imgee"><img src = "<?php echo base_url(); ?>img/energen.png" class = "imge"/></td>
  </tr>
  <tr>
    <td><img src = "<?php echo base_url(); ?>img/nido.png"/></td>
    <td>Nido<br><br>Kakambal ni Milo kase wala akong makitang ibang sprite kaya kumuha nalang ako ng isa pang sprite ni Milo pero ibang facial expression hahahahahah crie pakamatay ka na Adrielle</td>
  </tr>
</table>
</center>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="POST" action="register">
    <table class = "teburu">
      <tr>
        <td>Username: </td>
        <td><input id="user" type="text" name="username" placeholder = "Enter username"><br/><br/></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input id="user" type="password" name="password" placeholder = "Enter password"><br/><br/></td>
      </tr>
      <tr>
        <td>Confirm Password: </td>
        <td><input id="user" type="password" name="cpassword" placeholder = "Confirm password"><br/><br/></td>
      </tr>
      <tr>
        <td>First Name:</td>
        <td><input id="user" type="text" name="fname" placeholder = "Enter first name"><br/><br/></td>
      </tr>
      <tr>
        <td>Last Name: </td>
        <td><input id="user" type="text" name="lname" placeholder = "Enter last name"><br/><br/></td>
      </tr>      
    </table>
    <center><input type="Submit" Value="Register!"/><br></center>
    </form>
    <?php echo validation_errors('<p class = "error">'); ?>
  </div>

</div>


<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close2">&times;</span>
    <form method="POST" action="Login">
      Username: <input id="user" type="text" name="username" placeholder = "Enter username"><br/><br/>
      Password: &#8202 <input id="pass" type="password" name="password" placeholder = "Enter password"><br/>
      <center><input type="Submit" Value="Login"/><br></center>
    </form>
  </div>
</div>


<br><br>
<hr>
</div>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');
var modal2 = document.getElementById('myModal2');
// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal.style.display = "block";
}

btn2.onclick = function() {
    modal2.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>


</body>
</html>