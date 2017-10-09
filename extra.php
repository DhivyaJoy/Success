$cat.on('change', function(){
        $items.html('');
        $.each(items[$(':selected'this).text()].function(){
            select.append('<option value="'+this.value+'">"+this.text+"</option>');
        });



   
	
	 $cat.on('change', function(){
        $items.html('');
        $.each(items[$(this).val()], function(k, v){
            $('<option></option>').val(k).text(v).appendTo('$items'));
        });

 $cat.change(function(){
        var $this = $(this).find(':selected'),
            rel = $this.attr('rel'),
            $set = $items.find('option.' + rel);
        
        if ($set.size() < 0) {
            $items.hide();
            return;
        }
        
        $items.show().find('option').hide();
        
        $set.show().first().prop('selected', true);
    });
		

	$(document).ready(function(){


	
    
$cat.change(function() {
if($(this).data('options') === "undefined"){
    /*Taking an array of all options-2 and kind of embedding it on the select1*/
    $(this).data('options',$items.clone());
    }
var id = $(this).val();
var options = $(this).data('options').filter('[value=' + id + ']');
$items.html(options);
    //alert(options);
});
		
		
		

		
});
	
	
	
	
	
	<html>
<head>
<title>Upload Success</title>
</head>
<body>
</body>
</html>