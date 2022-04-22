<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogo-Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap" rel="stylesheet">
    
    <!--CSS CODES-->
    <style>
          h1{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              letter-spacing: 5px;
              color: #1B1464;
          }
          h3{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              color: #EA2027;
              letter-spacing: 2px;
              margin: 0;
          }
          input{
              text-align: center;
          }
          div{
              text-align: center;
          }
          h4{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              color: #009432;
              letter-spacing: 2px;
              margin: 0;
              font-size: 20px;
          }
          
          button{
              width: 100px;
              height: 34px;
          }
          .result{
              text-align: center;
              font-family: 'Bebas Neue', cursive;
              letter-spacing: 5px;
              color: #12CBC4;
              font-size: 100px;
              margin: 0;
          }

    </style>
</head>
<body>
    <!--HTML CODES-->
    <form>
        <h1>Result-Checker</h1>

        <h3>Enter Your Marks</h3>
   
        <div><input type="text" name="inp1"></div> <br>
         
        <div>
        <button name="submit" type="submit" value="submit">
        <h4>REsult</h4>
           </button>
        </div><br>
   
    </form>
     
    <!--PHP CODES-->
    <?php
    
     $error="Wrong Marks";

     if(isset($_GET["submit"])){

        $num1=$_GET["inp1"];
     }
     if($num1<33 && $num1>-1){

        $result = "F";   

     }elseif($num1>32 && $num1<40){

        $result = "D";  

     }elseif($num1>39 && $num1<50){

        $result = "c";

     }elseif($num1>49 && $num1<60){

        $result = "B";  

     }elseif($num1>59 && $num1<60){

        $result = "A-";   

     }elseif($num1>69 && $num1<70){

        $result = "A";

     }elseif($num1>79 && $num1<101){

        $result = "A+"; 

     }elseif($num1>100 || $num1<0){

        $result = $error;   
     }
     ?>
     <h1 class="result">
         <?php
         echo "You got " . $result;
         ?>
     </h1>
</body>
</html>