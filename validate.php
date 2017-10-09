<!--Currently added this to check with git-->
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
<script>
function checkform()
{
	$('#user_name').on('input', function() {
	var input=$(this);
	var is_name=input.val();
	if(is_name){input.removeClass("invalid").addClass("valid");}
	else{input.removeClass("valid").addClass("invalid");}
});
}
</script>
</head>
<body>
<form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"  method="post">
<fieldset>
Please Fill Out the Details Below
<br/>
<div>
		<label for="user_name">Username:</label>
		<input type="text" id="user_name" name="name"></input>
		<span class="error">This field is required</span>
</div>
<div>
		<label for="user_email">Email:</label>
		<input type="email" id="user_email" name="email"></input>
		<span class="error">A valid email address is required</span>				
</div>	
<div>
<label for="user_state">
Select a state:&nbsp;</label>
<select name="state">
<option>Select a state...</option>
                 
	<?php 
    foreach($cities as $key => $value) 
     {
                    $key = htmlspecialchars($key); 
				 echo '<option value="'.$key.'" rel = "'.$key.'">'. $key .'</option>';
                 }
                 ?>
        </select>
 </label>
 <span class="error">select state</span>
 </div>
<div>
 <label for = "user_city">
        Select a city:&nbsp;</label>
        <select name="city" >
        <option>Select a city ...</option>
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
 
 <span class="error">select city</span>
 <input type ="submit" name="submit" onclick="return checkForm()">

</fieldset>
</form>
</div>
</body>
</html>




