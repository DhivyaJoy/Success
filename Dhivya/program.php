<html>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div id = "div1">
   <P><h1><center>PHP Code Sample</center></h1></p>
  </div>
  <div id="section1">
   <p><b> Trianglular Pattern for given number</b></p>
    <br />
    <br />
    Enter the number :
    <input type="number" name="num" min="1" max="20">
     <br />
     <br />
    <input type="submit" name="btn1" value="Click Here" onclick="funclick()" >
     <br />
     <br />
<?php
if(isset($_POST['btn1']))
{
	$n = $_POST['num'];
	
	for($i=1;$i<=$n;$i++)
	{
		$m = (str_pad('',$n-$i));
		for($j=1;$j<=$i;$j++)
		{
			$m .= $j;
		}
		for($j=$i-1;$j>0;$j--)
		{
			$m .= $j;
		}
		
	echo ''.$m.PHP_EOL.'<br>';
	
	}
}
?>
   </div>
   <div id="section2">
     <p><b>Let's Play Hide and Seek with Tajmahal</b></p>
      <br />
      <input type="button" value="Hide" name="btn" onclick="myFunction(this)">
      <br />
      <br />
     <span id="sec1">
       <img src="012.jpg" width="150px" height="150px">
     </span>
   </div>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
function myFunction(btn){
	if(btn.value=="Hide"){
	$('#sec1').fadeOut('slow');
	btn.value="Seek";
	}
	else
	{
		$('#sec1').fadeIn('slow');
		btn.value="Hide";
	}

}
$(document).ready(function() {
           
			$("#section2").css("display", "none");
            $("#section2").fadeIn(2000);
			
			
    });
</script>
</body>
</html>
