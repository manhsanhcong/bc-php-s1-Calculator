<!DOCTYPE html>
<html>
<body>
<?php
  try {
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $operactor = $_POST['operactor'];
      switch ($operactor) {
          case ('+'):
              $result = $number1 + $number2;
              break;
          case ('-'):
              $result = $number1 - $number2;
              break;
          case ('*'):
              $result = $number1 * $number2;
              break;
          case ('/'):
              if ($number2 == 0) {
                  throw new Exception("sai");
              }
              $result = $number1 / $number2;
              break;
      }
      echo $result;
      } catch (Exception $e){
      echo $e->getMessage();
  }
?>
</body>
</html>