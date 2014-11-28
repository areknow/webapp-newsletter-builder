<html class="mainbg">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<head>
<style>
body, html {
min-width:1200px;
padding:0; margin:0;
position: relative;
}
textarea {
width: 100%;
height: 80px;
resize: vertical;
padding: 5px;
margin-bottom:5px;
}
.tasml {
height: 50px;
}
.tainp {
height: 25px;
}
.column {
width:50%;
float:left;
height:100vh;
box-sizing:border-box;
overflow-y:scroll;
}
.cleft {
background:#fff;
}
.cright {
}
.pad {
padding:30px;
}
.gray {
background:#8b8b8b;
}
#select {
line-height: 40px;
background: rgb(226,226,226); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(226,226,226,1) 0%, rgba(219,219,219,1) 50%, rgba(209,209,209,1) 51%, rgba(254,254,254,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(226,226,226,1)), color-stop(50%,rgba(219,219,219,1)), color-stop(51%,rgba(209,209,209,1)), color-stop(100%,rgba(254,254,254,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(226,226,226,1) 0%,rgba(219,219,219,1) 50%,rgba(209,209,209,1) 51%,rgba(254,254,254,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 ); /* IE6-9 */

text-align: center;
box-shadow: 0 2px  15px rgba(0, 0, 0, 0.63);
border-radius: 10px;
width: 200px;
height: 90px;
overflow: auto;
margin: auto;
position: absolute;
top: 0; left: 0; bottom: 0; right: 0;
padding: 30px 60px;
overflow: auto;
}
select {
width: 140px;
}
.events {
margin-top:10px;
}
.mainbg {
background: rgb(206,220,231); /* Old browsers */
/*background: -moz-linear-gradient(-45deg,  rgba(206,220,231,1) 0%, rgba(89,106,114,1) 100%);*/
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(206,220,231,1)), color-stop(100%,rgba(89,106,114,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* IE10+ */
background: linear-gradient(135deg,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

}
.noresize {
resize:none;
}
#unsub {
/*        background:red;*/
/*margin: auto;*/
text-align:center;
margin-bottom:20px;
}
#unsub a {
text-decoration:none;
color: gray;
font-size: 12px;
}
@-moz-document url-prefix() {
#select {margin-top:30%}
.mainbg {background:#919191;}
}
</style>
<title>Newsletter Maker</title>
</head>
<body style="font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none;">

<?PHP
if(isset($_POST['selector'])) {

$events = $_POST['selector'];

echo "

<style>
#select { z-index:-1; }
</style>

<script type='text/javascript'>
function textEdit()
{
var introInput = document.getElementById('introInput').value;
document.getElementById('introText').innerHTML = introInput;

var dateInput = document.getElementById('dateInput').value;
document.getElementById('dateText').innerHTML = dateInput;

var heroInput = document.getElementById('heroInput').value;
document.getElementById('heroText').src = heroInput;
";

for ($i = 1; $i <= $events; $i++) {
echo "
var eventTitleInput$i = document.getElementById('eventTitleInput$i').value;
document.getElementById('eventTitleText$i').innerHTML = eventTitleInput$i;

var eventDateInput$i = document.getElementById('eventDateInput$i').value;
document.getElementById('eventDateText$i').innerHTML = eventDateInput$i;

var eventPInput$i = document.getElementById('eventPInput$i').value;
document.getElementById('eventPText$i').innerHTML = eventPInput$i;

var eventThumbInput$i = document.getElementById('eventThumbInput$i').value;
document.getElementById('eventThumb$i').src = eventThumbInput$i;
";
}
echo "
}
</script>

<div ID='copytext' class='column cleft'>
<!-- MAIN CONT -->
<div style='width:100%; padding:0; margin:0;'>
<!-- HEADER -->
<div style='width:600px; margin:auto; background:#575757; padding:0;'>
<div style='display:inline-block; padding: 10px 0px;'>
<img src='http://cyberou.com/res/logo-l.png' style='max-height:50px;' />
</div>
<div style='display:inline-block; float:right; padding: 10px 0px;'>
<img src='http://cyberou.com/res/logo-r.png' style='max-height:50px;' />
</div>
<!-- /HEADER -->
</div>
<!-- BODY -->
<div style='width:580px; margin:auto; padding:10px;'>
<h1 style='margin:0; padding:0; font-weight:200; line-height:1.1; font-size:32px;'>Oakland University Cyber Security Club</h1>
<p style='font-size: 17px; line-height: 1.6;'>Newsletter for <span id='dateText' >Weekday, Month Day, Year</span></p>
<img id='heroText' src='http://cyberou.com/res/default.jpg' style='width:100%; height:auto; padding:0; margin:0;' />
<p id='introText' style='font-size: 12px; line-height: 1.6;'>Intro Paragraph</p>
<!-- EVENT CONTAINER -->
<div id='eventcont' style='margin:40px 0;'>
";

for ($i = 1; $i <= $events; $i++) {
echo"
<!-- EVENT -->
<div style='background:#f3f3f3'>
<div style='display:inline-block;vertical-align:middle;height:75px;'>
<img id='eventThumb$i' src='http://cyberou.com/res/thumb.jpg' style='width:75px;' />
</div>
<div style='display:inline-block; vertical-align:middle;padding-left:10px;'>
<h4 id='eventTitleText$i' style='margin:0;padding:0;font-weight: 300; font-size: 23px;'>Event Title</h4>
<small id='eventDateText$i' style='font-size: 60%; color: #6f6f6f;'>00/00/00</small>
</div>
</div>
<div>
<p id='eventPText$i' style='font-size: 14px; line-height: 1.6;'>Event Paragraph</p>
</div>
<!-- /EVENT --> 
";
}

echo "
<!-- /EVENT CONTAINER -->
</div>
<!-- /BODY -->
</div>
<!-- FOOTER -->
<table border='0' style='border-collapse:collapse;width: 600px; margin: auto; padding: 0;'>
<tr style='margin: 0; padding: 0;'>
<td style='margin: 0; padding: 0;'>
<table width='100%' style='width: 100%; background: #e4e4e4; margin: 0; padding: 0; margin-bottom:20px;'>
<tr style='margin: 0; padding: 0;'>
<td style='margin: 0; padding: 0;'>
<div style='width: 280px; float: left; min-width: 279px; margin: 0; padding: 0;'>
<table align='left' style='width: 100%; margin: 0; padding: 0;'>
<tr style='margin: 0; padding: 0;'>
<td style='margin: 0; padding: 15px;'>
<h5 style='line-height: 1.1; color: #000; font-weight: 900; font-size: 17px; margin: 0 0 15px; padding: 0;'>
Connect with Us:</h5>
<p style='font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;'>
<a href='https://www.facebook.com/pages/Cyber-OU/377128142400522' style='color: #FFF; font-size: 12px; text-decoration: none; font-weight: bold; display: block; text-align: center; background-color: #3B5998 !important; margin: 0 0 10px; padding: 3px 7px;'>
Facebook</a>
<a href='http://twitter.com/cyberou' style='color: #FFF; font-size: 12px; text-decoration: none; font-weight: bold; display: block; text-align: center; background-color: #1daced !important; margin: 0 0 10px; padding: 3px 7px;'>
Twitter</a>
<a href='https://plus.google.com/101883926740442522573/posts' style='color: #FFF; font-size: 12px; text-decoration: none; font-weight: bold; display: block; text-align: center; background-color: #DB4A39 !important; margin: 0 0 10px; padding: 3px 7px;'>
Google+</a>
</p>
</td>
</tr>
</table>
</div>
<div style='width: 280px; float: left; min-width: 279px; margin: 0; padding: 0;'>
<table align='left' style='width: 100%; margin: 0; padding: 0; '>
<tr style='margin: 0; padding: 0;'>
<td style='margin: 0; padding: 15px;'>
<h5 style='line-height: 1.1; color: #000; font-weight: 900; font-size: 17px; margin: 0 0 15px; padding: 0;'>
Contact Info:</h5>
<p style='font-weight: normal; font-size: 14px; line-height: 1.6; margin: 0 0 10px; padding: 0;'>
Website: 
<strong style='margin: 0; padding: 0;'>
<a href='http://cyberou.com' style='color: #2BA6CB; margin: 0; padding: 0;'>
cyberou.com</a>
</strong>
<br style='margin: 0; padding: 0;' />
Email: 
<strong style='margin: 0; padding: 0;'>
<a href='mailto:info@cyberou.com' style='color: #2BA6CB; margin: 0; padding: 0;'>
info@cyberou.com</a>
</strong>
<br style='margin: 0; padding: 0;' />
Address: 
<strong style='margin: 0; padding: 0;'>
2200 N Squirrel Rd, Rochester, MI 48309
</strong>
</p>
</td>
</tr>
</table>
</div>
<div class='clear' style='display: block; clear: both; margin: 0; padding: 0;'></div>
</td>
</tr>
</table>
</td>
</tr>
<!-- /FOOTER -->
</table>
<div id='unsub'><a href='http://cyberou.com/unsubscribe'>Unsubscribe from this newsletter</a></div>
<!-- /MAIN CONT -->
</div>
</div>
<div class='column gray pad'>
<textarea id='dateInput' class='tainp noresize' onkeyup='textEdit()' >Weekday, Month Day, Year</textarea>
<textarea id='heroInput' class='tainp noresize' onkeyup='textEdit()'>http://cyberou.com/res/default.jpg</textarea>
<textarea id='introInput' onkeyup='textEdit()'>Intro Paragraph</textarea>
";

for ($i = 1; $i <= $events; $i++) {  
echo 
"
<div class='events'>
<textarea id='eventTitleInput$i' class='tainp noresize' onkeyup='textEdit()'>Event Title</textarea>
<textarea id='eventDateInput$i' class='tainp noresize' onkeyup='textEdit()'>00/00/00</textarea>
<textarea id='eventPInput$i' onkeyup='textEdit()'>Event Paragraph</textarea>
<textarea id='eventThumbInput$i' class='tainp noresize' onkeyup='textEdit()'>http://cyberou.com/res/thumb.jpg</textarea>
</div>
";
}

echo "</div>";

}
?>
<form id="select" action="#" method="POST">
<strong>Number of Events:</strong><br>
<select name="selector" onchange="this.form.submit()">
<option>Select</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select>
</form>
</body>
</html>