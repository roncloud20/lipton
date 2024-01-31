<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend PHP</title>
</head>
<body>
    <h1>Hello Alex</h1>
    <?php
        // $name = "Michael";
        // echo gettype($name);
        // function john(){
        //     global $name;
        //     echo $name;
        // }
        // john();
        
        // define('PERSON', 'John');
        // echo PERSON;

        // const PAYMENT = Michael;
        // echo PAYMENT;

        // $name = "Alex";

        // $person = &$name;

        // $name = "Samuel";
        // echo "$name <br />";
        // echo $person;
        
        // echo PHP_VERSION;
        // echo __LINE__;

        // $data = ["Alex", "Samuel", "Muju"];

        // // echo $data[0];
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // echo "<br />";

        // $person = [
        //     "firstName" => "John",
        //     "lastName" => "Doe",
        // ];

        // echo "<pre>";
        // print_r($person);
        // echo "</pre>";

        // var_dump(110);
        // var_dump(200.5);
        // echo(false);

        // $john = 5;
        // function alex() {
        // //    echo $GLOBALS['john'];
        //     global $john;
        //     echo $john;
        // }

        // alex();
        // echo $_SERVER['PHP_SELF'];
        // echo $_SERVER['SERVER_NAME'];
        // echo $_SERVER['HTTP_HOST'];
        // echo $_SERVER['HTTP_REFERER'];
        // echo $_SERVER['HTTP_USER_AGENT'];
        // echo $_SERVER['SCRIPT_NAME'];
        // echo $_SERVER['REQUEST_METHOD']
    ?>
    <h1><?php echo "Alex is here" ?></h1>
    <h1><?= "Alex is here" ?></h1>
    <form action="" method="post">
        <input type="text" name="num1"/>
        <input type="text" name="num2"/>
        <button type="submit">Submit</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            echo $num1 + $num2;
        }
    ?>
</body>
</html>