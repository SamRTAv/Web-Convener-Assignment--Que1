<?php
//indexed arrays
// $people1= ['shaun','crystal','lessgoo'];
// echo $people1[1];
// $people2 = array('hello','newarray'); // newway to create an array;
//  echo $people2[1];
//  $age = [1,2,3,4,5];
//  print_r($age);
//  $age[] = 32; // adds 32 to end
//  array_push($age,34); // same as above
//  print_r($age);
// echo count($age);

//associative arrays - disctionarry (key - value)
$dict = ['shaun'=> 'black', 'mario'=> 'white', 'ronak' => 'indian'];
print_r($dict);
echo $dict['ronak'];
$dict2 = array('shaun'=> 'black', 'mario'=> 'white', 'ronak' => 'indian');
$dict2['toad'] = 'pink';
echo $dict2['shaun'];
print_r($dict2);
$dict3 = array_merge($dict,$dict2);
print_r($dict3);


?>

<!-- embed php in html -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my first PHP file</title>
 </head>
 <body>

 </body>
 </html>