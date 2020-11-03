<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-28">
  </head>
  <body>
    <br>
    <br>
    <h2>Crisologo Lapitan IV</h2>
    <br>
    <br>
    <form action ="" method="post" style="margin-left: 320px; margin-top: -150px ">
      <h3>CALCULATOR</h3>
      <p>Input First Number:</p>
      <input type="text" name="num1" value=""><br>
      <p>Input Second Number:</p>
      <input type="text" name="num2" value=""><br>
      <br>
      <input type="submit" name="add" value="+">
      <input type="submit" name="sub" value="-">
      <input type="submit" name="mul" value="*">
      <input type="submit" name="div" value="/">
    </form>
    <form action ="" method="post" style="margin-left: 610px; margin-top: -230px ">
      <h3>Finding GCD</h3>
      <p>Input First Number:</p>
      <input type="text" name="num1" value=""><br>
      <p>Input Second Number:</p>
      <input type="text" name="num2" value=""><br>
      <br>
      <input type="submit" name="submit" value="Submit">
    </form>
    <p style="margin-left: 500px; margin-top: 50px">
    <?php
     //Calculator
      if(isset($_POST['add'])) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $add = $num1+$num2;
          echo "Sum: ", $add;
        }

      if(isset($_POST['sub']))  {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $sub = $num1-$num2;
          echo "Difference: ", $sub;
        }

      if(isset($_POST['mul'])) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $mul = $num1*$num2;
          echo "Product: ", $mul;
        }
      if(isset($_POST['div'])) {
          $num1 = $_POST['num1'];
          $num2 = $_POST['num2'];
          $div = $num1/$num2;
          echo "Quotient: ", $div;
        }
        //GCD    
      if(isset($_POST["submit"])) {
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];
          $min = ($num1 < $num2) ? $num1 : $num2;
          for ($i=1;$i<=$min; $i++) {
          if($num1%$i==0 && $num2%$i==0) {
          $gcd = $i;
              }
            }   
          echo "GCD: ", $gcd;
        }
    ?> 
    </p>
  </body>
</html>