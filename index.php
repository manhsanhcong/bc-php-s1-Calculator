<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height:250px; width:230px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form method="post" action="calculator.php">
    <div class="login">
        <h2>Calculator</h2>
        <div><input type="text" name="number1" size="15" placeholder="number1"/></div>
        <div><input type="text" name="operactor" size="15" placeholder="operactor"/></div>
        <div><input type="text"  name="number2" size="15" placeholder="number2"/></div>
        <div><input type="submit" value="result"/></div>
    </div>
</form>
</body>
</html>