
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> BMI</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0D0221;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #0D0221;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
 
	<body style="background-image:url('b1.jpg');
	background-position: center center; 
    background-repeat: no-repeat;">
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="mainPage.html">Home</a>
  <a href="emain.html">Exercises</a>
  <a href="new.html">Diets</a>
  <a href="Coaches2.html">Coaches</a>
  <a href="http://localhost/BMI1.php">BMI</a>
  <a href="http://localhost/calories%20tracking.php">Calorie Tracker</a>
  <a href="playlist.html">Playlist</a>
  <a href="https://www.myenso.de/">Shop Goods</a>
  <a href="https://www.domaxsport.com/">Shop Clothes</a>
  <a href="aboutus.html">About us</a>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  
   <div class="container">
		<img src="logo2.jpg" width="150px" height="150px" style="margin-left:1090px; margin-top:-70px">
            <h1 style="color:#26408B">YOUR BODY MASS INDEX(BMI)</h1><br>
            <form method="post">
                <div class="form-group">
                  <label for="height">Please Enter your Height in meters :</label>
                  <input type="text" class="form-control" name="height" placeholder="1.50">
                </div>
                <div class="form-group">
                  <label for="weight">Please Enter your Weight in kilograms :</label>
                  <input type="text" class="form-control"  name="weight" placeholder="50">
                </div>
                <div class="form-group" >
                  <button style="background-color:#26408B" type="submit" class="btn btn-success">Calculate</button>
                </div>
              </form>
              <div class="<?=$bmiStyle?>" role="alert" id="bmi">
                <?php 
				if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $index =0;
    if($h !=0 && $w !=0)
        $index = round($w/($h*$h));
 
    $bmi="";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="You are underweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
        $bmi="You are normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="You are overweight - BMI : " . $index;  
        $bmiStyle="alert alert-warning";
    } else {
        $bmi="obese - BMI : " .$index;  
        $bmiStyle="alert alert-danger";
    }
	echo "<h4 style='font-size:22px'>".$bmi."</h4>";
}
 
                
                ?>
            </div>
          </div>  
    
  
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
       
   
</body>
</html>