
<?php
    $num = "";
    $operator = "";
    $result = "";
    $cookie_name1 = "num";
    $cookie_value1 = "";
    $cookie_name2 = "op";
    $cookie_value2 = "";
    if(isset($_POST['display'])){
        $num = $_POST['display'];
    }else{
        $num = "";
    }

    if(isset($_POST['submit'])){
        $num = $_POST['display'] . $_POST['submit'];
    }
    else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $num = $_POST['display'] . $_POST['op'];
    }
    else{
        $num = "";
    }

    if(isset($_POST['op'])){
        $cookie_value1 = $_POST['op'];
        setcookie($cookie_name1,$cookie_value1, time() + (86400 * 30),"/");

        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2,$cookie_value2, time() + (86400 * 30),"/");
        $num = "";
    }

    if(isset($_POST['equal'])){
        $num = $_POST['display'];

        switch($_COOKIE['op']){
            case "+":
                $result = $num + $_COOKIE['num'];
            break;

            case "-":
                $result = $num - $_COOKIE['num'];
            break;

            case "*":
                $result = $num * $_COOKIE['num'];
            break;

            case "/":
                $result = $num / $_COOKIE['num'];
            break;
        }
        $num = $result;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1 id="h1">Calculator</h1>
        <form action="#" method="post">
        <div class="calc">
            <input class="disp" type="text" id="display" name="display" placeholder="Your Input @7+6=13" value=<?php echo $num; ?>>
            <table>
                <!-- <tr>
                    <td><button onclick="calculate('(')" disabled>(</button></td>
                    <td><button onclick="calculate(')')" disabled>)</button></td>
                    <td><button onclick="clearBox()">C</button></td>
                    <td><button onclick="operator('%')" disabled>%</button></td>
                </tr> -->

                <tr>
                    <td><input class="btn" type="submit" name="submit" value='7'></td>
                    <td><input class="btn" type="submit" name="submit" value='8'></td>
                    <td><input class="btn" type="submit" name="submit" value='9'></td>
                    <td><input class="btn" type="submit" name="op" value='*'></td>
                </tr>

                <tr>
                    <td><input class="btn" type="submit" name="submit" value='4'></td>
                    <td><input class="btn" type="submit" name="submit" value='5'></td>
                    <td><input class="btn" type="submit" name="submit" value='6'></td>
                    <td><input class="btn" type="submit" name="op" value='-'></td>
                </tr>

                <tr>
                    <td><input class="btn" type="submit" name="submit" value='1'></td>
                    <td><input class="btn" type="submit" name="submit" value='2'></td>
                    <td><input class="btn" type="submit" name="submit" value='3'></td>
                    <td><input class="btn" type="submit" name="op" value='+'></td>
                </tr>

                <tr>
                    <td><input class="btn" type="submit" name="submit" value='0'></td>
                    <td><input class="btn" type="submit" name="clear" value='C'></td>
                    <td><input class="btn" type="submit" name="op" value='/'></td>
                    <td><input class="btn" type="submit" name="equal" value='='></td>
                </tr>
            </table>
        </div>
        </form>
    </div>

    <script src="main.js"></script>
</body>
</html>

