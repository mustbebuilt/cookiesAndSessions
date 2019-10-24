<?php
$faveColour = 'red'; 
$countValue = 1;

// Check for cookie 'myFave' here
// Can be done 3 different ways
// Technique #1 if statement
// Technique #2 Ternary Operator
// Technique #3 Null Coalescing Operator 

switch($faveColour){
	case 'red' : 
	$colourCode = '#B9121B';
	break;
	case 'blue' : 
	$colourCode = '#225378';
	break;
	case 'green' : 
	$colourCode = '#BEEB9F';
	break;
	case 'orange' : 
	$colourCode = '#EB7F00';
	break;
}

// check for 'myCount' cookie here and increment

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie Demo</title>
<style>
body{
	font-family:Arial, Helvetica, sans-serif;	
}
h1, h2{
	text-transform:capitalize;	
	text-align:center;
	float:left;
	width:200px;
	font-size:1.1em;
}
h2{
	font-size:0.9em;
}
.box{
	/* Fairly uncommon technique but used to illustrate can be done */
	background-color:<?php echo $colourCode;?>;
	width:50px;	
	height:50px;	
	border-radius:0px;
	animation: pulse 3s linear 2s infinite alternate;
	
}
section{
	display:flex;
	justify-content: center;
	width:320px;
	margin:auto;
	padding:45px;
	text-align:center;
}
@keyframes pulse {
    from {border-radius: 0px;}
    to {border-radius: 40px;}
}
</style>
</head>

<body>
<section>
    <div class="box"></div>
    <h1>I prefer <?php echo $faveColour; ?></h1>
    <div class="box"></div>
</section>
<section>
    <form action="setPreferences.php" method="post">
        <select name="faveColour">
            <option value="red" <?php echo ($faveColour == 'red') ? 'selected' : ''; ?>>Red</option>
            <option value="blue" <?php echo ($faveColour == 'blue') ? 'selected' : ''; ?>>Blue</option>
            <option value="green" <?php echo ($faveColour == 'green') ? 'selected' : ''; ?>>Green</option>
            <option value="orange" <?php echo ($faveColour == 'orange') ? 'selected' : ''; ?>>Orange</option>
        </select>
    <input type="submit" value="Change Colour">
    </form>
</section>
<section>
    <div class="box"></div>
    <h2>You have visited <?php echo $countValue; ?> times</h2>
    <div class="box"></div>
</section>
</body>
</html>
