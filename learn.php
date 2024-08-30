<?php
    /* 
    echo  'Hello World' ;
    echo  '<br>' ;
    ECHO  'This is my first PHP program' ;
    
    print '<br>' ;
    print 'Hello World' ;
    PRINT '<br> test ' ;
   */ 
    /* 
    // data types

    echo gettype(true);  // boolean
    echo '<br>';
     echo gettype(false);   // boolean
    echo '<br>';
    echo gettype(trUe);  // boolean
    echo '<br>';
    echo gettype(1);  // integer
    echo '<br>';
    echo gettype(-200); // integer
    echo '<br>';
    echo gettype(1.1);  // double
    echo '<br>';
    echo gettype('1.1');    // string
    echo '<br>';
    echo gettype('test');  // string
    echo '<br>';
    echo gettype(array("EG"=>"Egypt","SA"=>"Saudi Arabia"));  // array
    echo '<br>';
    print_r([1,2,3]);  // to print array ,  echo dosn't print directly array
    */

    // juggling
    /* 
    echo 1 + '3';    // 4
    echo '<br>';
    echo 1 + '3 Lessons' ;    // 4 // PHP will convert the string to a number
    echo '<br>';
    echo gettype(1 + '3 Lessons');  // integer
    echo '<br>';
    echo true + true ; // 2
    echo '<br>';
    echo gettype(true + true);  // integer
    echo '<br>';
    echo 10 + '10.5';  // 20.5
    echo '<br>';
    echo gettype(10 + '10.5');  // double
    echo '<br>';
    echo 1 + 2.4;  // 3.4
    echo '<br>';
    echo gettype(1 + 2.4);  // double
    echo '<br>';
    */

    // escape characters
    
    // echo 'Hello friend 'Ahmed' '  ;  // error
    echo "Hello freind 'Ahmed' " ; // Hello freind 'Ahmed'
    echo '<br>';
    echo "Hello friend \" Ahmed \" " ; // Hello friend " Ahmed "
    echo '<br>';
    echo "Hi \\ Hello" ; // Hi \ Hello
    echo '<br>';
    echo "Hello 
    in multiple
    lines" ; // Hello in multiple lines
    echo '<br>';
    echo nl2br("Hello 
    in multiple
    lines") ; 
    echo '<br>';
    // variables

    // to define variable  we use $ sign
    // variable name should start with letter or underscore
    // variable name should not start with number
    // variable name case sensitive
    // No special character in variable name except underscore


    $name = 'Ahmed' ;
    echo $name ; // Ahmed
    echo '<br>';

    // assign by value and assign by reference

    $name = 'Ahmed' ;
    $name2 = $name ; // assign by value
    $name = 'Ali' ;
    echo $name2 ; // Ahmed
    echo '<br>';
    $name = 'Ahmed' ;
    $name2 = &$name ; // assign by reference
    $name = 'Ali' ;
    echo $name2 ; // Ali

    // variable variable 

    $name = 'Ahmed' ;
    $$name = 'Ali' ;

    echo $Ahmed ; // Ali
    echo '<br>';
    echo $$name ; // Ali
    echo '<br>';

    echo "Hello $name" ; // Hello Ahmed
    echo '<br>';
    // echo "Hello ${$name}" ; // Hello Ali
    echo '<br>';

    // predefined variables
    /* 
        $_GET
        $_POST
        $_REQUEST
        $_SERVER
    */


// comparison operators
    //  == equal in value 
    //  === equal in value and type
    //  != not equal in value
    //  > larger than
    //  < less than
    //  >= larger than or equal
    //  <= less than or equal
    //  <=> spaceship operator 
            // a <=> b  return : 
            // 0 if a == b
            // 1 if a > b   
            // -1 if a < b

    var_dump(1 == 1);  // true
    echo '<br>';
    var_dump(1 == 2);  // false
    echo '<br>';
    var_dump(1 == '1');  // true  e
    echo '<br>';
    var_dump(1 === '1');  // false
    echo '<br>';
    var_dump(10 > 5);  // true
    echo '<br>';
    var_dump(10 < 5);  // false
    echo '<br>';
    var_dump(10 >= 10);  // true
    echo '<br>';
    var_dump(10 <= 10);  // true
    echo '<br>';
    var_dump(10 <=> 10);  // 0
    echo '<br>';
    var_dump(10 <=> 5);  // 1
    echo '<br>';
    var_dump(5 <=> 10);  // -1
    echo '<br>';
    

    // if condition
    $user_type = "Admin";
    if ($user_type == "Admin"){
        echo "Welcome Admin" ;
    }else {
        echo "You not allowed " ;
    }

    echo '<br>';

    $score = 93 ;

    if ($score >=90){
        echo "A";
    }elseif ($score >=80){
        echo "B";
    }elseif ($score >=70){
        echo "C";
    }elseif ($score >=60){
        echo "D";
    }else {
        echo "F";
    }
    echo '<br>';

    // loop 
    // for loop
    for ($i=0 ; $i<10 ; $i++){
        echo $i ;
        echo '<br>';
    }
    
    // while loop
    $i = 0 ;
    while ($i < 10){
        echo $i ;
        echo '<br>';
        $i++;
    }


    // functions 
    function sayHello(){
        echo "Hello" ;
    }

    sayHello();

    echo '<br>';

    function hi($name){
        echo "Hello $name" ;
    }

    hi('Ahmed');






?> 









<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'test' ?>
</body>
</html> -->