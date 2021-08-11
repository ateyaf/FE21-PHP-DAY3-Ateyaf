<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="st.css">
    <title>Document</title>
</head>
<body>
    <?php

#---------------------Exercise 1----------------------
// echo "<h1> The result from the for loop<h1>";
// for( $i=0; $i<50; $i++)
//        {
//           echo '<h4> ateyaf </br> </h4>';
//        }

 //echo "<h1> The result from the while loop<h1>";
// $i=0;
//     while($i < 50)
//         {
//           echo '<h1> ateyaf </br> </h1>';
//            $i++;
//         }


//echo "<h1> The result from the do-while loop<h1>";
// $i = 0;
// do {
//      echo '<h1> ateyaf </br> </h1>';
//     $i++;
// } 
// while ($i < 50);
#---------------------Exercise 2----------------------
// $array = array(1, 2, 3, 4, 5,6, 7 , 8, 9,10 );
//        foreach($array as $value)
//        {
//            echo "Value is $value <br/>";
//        }


#---------------------Exercise 3----------------------

    //  function getArrayMax($array){
    //     return $aa=max( $array);
    //  }
    //   $ages=[11, 54, 32, 92,450,70,13,44,88,25];
    //  //$test= random_int(0,50)

    // $maxAge=getArrayMax($ages); //92
    // echo "<h1> the highest value from the array  is : '.$maxAge.'</h1>";


   #---------------------Exercise 4----------------------
   
 for( $i=1; $i<100; $i++)
        {
            if($i%3==0){
                echo "Back-End </br>";
              }
            elseif($i%5==0){
                echo "Front-End </br>";
            }
            elseif($i%15==0){
                echo "<h1>Full-Stack </br> </h1>";
            }
            else
            {
            echo "<h4> '.$i.' </br> </h4>";
            }


        }

    ?>
</body>
</html>