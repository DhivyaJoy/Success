<html>
<head>
<link rel="stylesheet" href="style3.css">
</head>
<body display="none">
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$username = $_POST['newuser'];
	$email = $_POST['newemail'];
	$state= $_POST['state'];
	$city = $_POST['city'];
}
$cities = array ("TamilNadu" => array('Chennai','Trichy','Coimbatore'), 
                 "Kerala" => array ('Trivandrum','Cochin','Calicut'),
				 "Karnataka" =>array('Bangalore', 'Mysore', 'Manipal')); 
if(isset($username)&&isset($email)&&isset($state)&&isset($city))
{
	header('location:program.php');
}
		
?>

<form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
  <div id = "div1">
     <P><h1><center>PHP Code Sample</center></h1></p>
  </div>
  <div class="sel">
    <fieldset>
     * Please Fill Out the Details Below
      <br />
       <label>Username:<input type ="text" name="newuser" pattern="[a-zA-z]{1,32}" required="required">
        <span class="error">*</span>
         <br />
         <br />
       </label>
       <label>Email   :<input type ="email" name="newemail" required="required" >
        <span class="error">*</span>
         <br />
         <br />
       </label>
       <label>Select a state:&nbsp;
        <select name="state" id = "state" required="required">
         <option value="" >Select a state...</option>
<?php 
    foreach($cities as $key => $value) 
     {
          $key = htmlspecialchars($key); 
	      echo '<option value="'.$key.'" rel = "'.$key.'">'. $key .'</option>';
     }
?>
        </select>
       </label>
        <span class="error">*</span>
        <br />
        <br />
      <label>Select a city:&nbsp;
        <select name="city" id= "city" required="required" >
         <option value="" >Select a city...</option>
<?php 
	foreach($cities as $key => $value)
	{
    foreach($value as $subkey=> $subvalue) 
    {
        $subkey = htmlspecialchars($subkey); 
		
       echo '<option value="'. $key.'" class="'.$key.'">'. $subvalue .'</option>';
    }
	}
 ?>
        </select>
      </label>
       <span class="error">*</span>
        <br />
        <br />
   <input type ="submit" name="submit">
    </fieldset>
  </div>
</form>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	var $state1 = $('select[name=state]'),
        $city1 = $('select[name=city]');
		$state1.change(function(){
        var $this = $(this).find(':selected'),
            rel = $this.attr('rel'),
            $set = $city1.find('option.' + rel);
        
        if ($set.size() < 0) {
            $city1.hide();
            return;
        }
        
        $city1.show().find('option').hide();
        
        $set.show().appendTo().first().prop('selected', true);
    });
	$("body").css("display", "none");
    $("body").fadeIn(1000);
			
});
</script>
</body>
</html>
