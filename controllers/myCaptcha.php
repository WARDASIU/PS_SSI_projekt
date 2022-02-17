<?php

    $charArr = array(
        'jeden' => 1,
        'dwa' => 2,
        'trzy' => 3,
        'cztery' => 4,
        'piec' => 5,
        'szesc' => 6,
        'siedem' => 7,
        'osiem' => 8,
        'dziewiec' => 9
    );
    $nrToChar = array(
        1 => 'jeden',
        2 => 'dwa',
        3 => 'trzy',
        4 => 'cztery',
        5 => 'piec',
        6 => 'szesc',
        7 => 'siedem',
        8 => 'osiem',
        9 => 'dziewiec'
    );
    $operatorArr = array(
        '+' => 'plus',
        '-' => 'minus',
        '*' => 'razy',
        ':' => 'dzielone'
    );
    $nrToOperator = array(
        1 => '+',
        2 => '-',
        3 => '*',
        4 => ':'
    );

    do{
        $RandomNumberAsChar1 = $nrToChar[rand(1,9)];
        $RandNumbAsInt1 = $charArr[$RandomNumberAsChar1];

        $RandomNumberAsChar2 = $nrToChar[rand(1,9)];
        $RandNumbAsInt2 = $charArr[$RandomNumberAsChar2];

        $OperatorAsChar =  $nrToOperator[rand(1,3)];

        $result = $RandNumbAsInt1.$OperatorAsChar.$RandNumbAsInt2;

        $answer = eval('return '.$result.';');

        if ($answer < 0) $answer = 11;
    }while($answer >= 10);



    echo $RandomNumberAsChar1.
        " " .
        $operatorArr[$OperatorAsChar] .
        " " .
        $RandomNumberAsChar2;
    echo '<br>'.$answer.'<br>';
    echo $_SESSION['userAnswer'].'<br>';

    if ($_SESSION['userAnswer'] == $answer) {
        echo "asdfhgasdfhasdfhsdf";
    }
    session_destroy();
?>