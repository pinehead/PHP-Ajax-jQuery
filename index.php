<!DOCTYPE html>
<head>
<title> 
</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" />
<script type="text/javascript" src="ajax.js" />
<script type="text/javascript">

$(document).ready(function() {
 
  $('#submit').click(function() {
 
 
	   var name = $('#name').val();
	   var email = $('#email').val();
	   var data = 'name=' + name + '&email=' + email;
	   

    	$.ajax({
			type: "POST",
			url: "php.php",
			data: data,
			success: function() {
			alert("notification sent");
      	}
      
     });
	

     });    

});
</script>

</head>
<body>

<div id="#notification">
 
</div>

<input type="text" id="name" />
<label for="name">Name</label>
<br />
<input type="text" id="email" />
<label for="email">Email</label>
<div id="submit" style="background-color:#cccccc;">
Send me an email
</div>



</body>
</html>
