<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>
<style>
  label {
    display:block;
    margin-top:20px;
    letter-spacing:2px;
}
.body {
    display:block;
    margin:0 auto;
    width:576px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
}

/* Style the text boxes */
input, textarea {
	width:439px;
	height:27px;
	background:#efefef;
	border:1px solid #dedede;
	padding:10px;
	margin-top:3px;
	font-size:0.9em;
	color:#3a3a3a;
}

textarea {
	height:213px;
	background:url(images/textarea-bg.jpg) right no-repeat #efefef;
}
input, textarea {
    width:439px;
    height:27px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
input:focus, textarea:focus {
    border:1px solid #97d6eb;
}
#submit {
    width:127px;
    height:38px;
    background:url(images/submit.jpg);
    text-indent:-9999px;
    border:none;
    margin-top:20px;
    cursor:pointer;
}

	#submit:hover {
	    opacity:.9;
	}
</style>
</head>

<body>

 <header class="body">
    </header>

    <section class="body">


<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'petbaik26@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    if ($_POST['submit']) {
    /* Anything that goes in here is only performed if the form is submitted */
    
    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
}
?>

    <form method="post" action="contact.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>
        
</form>
    
    </section>

    <footer class="body">
    </footer>

</body>

</html>
