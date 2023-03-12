<?php

    echo "Gwapo";

    // Variables

    $name = "idol ko si boyet";
    $gmail = "@gmail.com";

    // Echo or Print

    echo "Name: $name <br>";
    echo "Email: $gmail <br>";

    // Data types

    var_dump(true);
    var_dump(12);

    // Constant

    define("MESSAGE", ["one","two"]);
    echo "<br>";
    print_r (MESSAGE);
    echo "<br>";

    // Operators + - * / %

    $name = 10 - 3;

    echo "Plus: $name";
    echo "<br>";
    
    // Functions


    function showMessage($message) {
        return "Kinsay Gwapo?... $message" ;
    };

    echo showMessage("Si Master Jb");
    echo "<br>";

    // Array
    $array = ["apple", "banana","chocolate"];
    $array2 = array("a" => "gwapo","pangit","pogi");

    echo $array[0];
    echo "<br>";
    print_r($array2);

    // If else condition

    echo "<br>";
    $Bokskie = 21;
    
    if($Bokskie === 21){
        echo "gwapo";
}
    else{
        echo "Tiguwang";
    }

    /// echo $Bokskie == '21' ? "Gwapo!" : "Tiguwang!";

    // Switch Condition
    echo "<br>";

    $dael = 3;
    
    switch($dael){
        case 1:
            echo 'One <br>'; 
            break;
        case 2:
            echo 'two <br>'; 
            break;
        case 3:
        echo 'Idol <br>'; 
        break;
    }
?>




