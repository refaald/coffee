<html>
<head>
<title>First Task </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
       header
        {
           background-color: #6262da;
           padding: 30px;
           width: 700;
           
        }
        article {
          background-color: #ecece7;
          padding: 30px;
          width: 700;
          height: 450;
          clear: bottom;

          
        }
        .slidecontainer {
             width: 100%;
}
.slider {
  -webkit-appearance: none;
  width: 50%;
  height: 10px;
  border-radius: 5px;
  background: #cca9a9;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}


.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 10px;
  height: 20px;
  border: 0;
  background: url('img.JPG');
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 23px;
  height: 24px;
  border: 0;
  cursor: pointer;
}
     footer {
           background-color: #6262da;
           padding: 30px;
           width: 700;
        }
   </style>
   </head>
    
        <body>
            <header>
              <h2> </h2>
            </header>
            <section>
             <article>
              
          <div class="slidecontainer">
            <form action="task.php" method="post">
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange" name="myRange">
            <p>Motor1: <span id="demo"></span></p>
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange2" name="myRange2">
            <p>Motor2: <span id="demo2"></span></p>
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange3" name="myRange3">
            <p>Motor3: <span id="demo3"></span></p>
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange4" name="myRange4">
            <p>Motor4: <span id="demo4"></span></p>
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange5" name="myRange5">
            <p>Motor5: <span id="demo5"></span></p>
            <input type="range" min="1" max="180" value="90" class="slider" id="myRange6" name="myRange6">
            <p>Motor6: <span id="demo6"></span></p>


            <input type="submit"  value=" حفظ"  name="save" >
              <br> <br>
            <input type="submit" name="run1" value="إقاف">
          </form>
          </div>
        </article>
      </section>
        <footer>
          <p> </p>
      </footer>
        
        <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        var slider2 = document.getElementById("myRange2");
        var output2 = document.getElementById("demo2");
        var slider3 = document.getElementById("myRange3");
        var output3 = document.getElementById("demo3");
        var slider4 = document.getElementById("myRange4");
        var output4 = document.getElementById("demo4");
        var slider5 = document.getElementById("myRange5");
        var output5 = document.getElementById("demo5");
        var slider6 = document.getElementById("myRange6");
        var output6 = document.getElementById("demo6");



        output.innerHTML = slider.value;
        output2.innerHTML = slider.value;
        output3.innerHTML = slider.value;
        output4.innerHTML = slider.value;
        output5.innerHTML = slider.value;
        output6.innerHTML = slider.value;
        
        slider.oninput = function() {
          output.innerHTML = this.value;
        }
        slider2.oninput = function() {
          output2.innerHTML = this.value;
        }
        slider3.oninput = function() {
          output3.innerHTML = this.value;
        }
        slider4.oninput = function() {
          output4.innerHTML = this.value;
        }
        slider5.oninput = function() {
          output5.innerHTML = this.value;
        }
        slider6.oninput = function() {
          output6.innerHTML = this.value;
        }
        
   </script>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="arm_task1";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} 
 
?>




<?php 

if (isset($_POST['run1'])) {

$sql = "INSERT INTO `motors` ( `run`) VALUES ( '0')";
$result = $conn->query($sql);
 }

 ?>





<?php 

if (isset($_POST['save'])) {

$sql = "INSERT INTO `motors` (`motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES ('".$_POST['myRange']."','".$_POST['myRange2']."','".$_POST['myRange3']."','".$_POST['myRange4']."','".$_POST['myRange5']."','".$_POST['myRange6']."')";
$result = $conn->query($sql);
 }

 ?>

   </body>
  
   </html>
   
   