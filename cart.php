<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>


        <form  method= "POST" >

            <div class= "form-example">
                <label for = "text">Please select a item:
                </label>
                <input  name="user" type = "number" id="text" required>
            </div>

             <div class="form-example">
                <input type="submit" value="buy">
            </div>
        </form>

        <?php

        session_start();
        if (isset($_POST["user"])) {
            setcookie("user", $_POST["user"]);
        }

        echo"";

        ?>

    </body>
</html>