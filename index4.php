<?php
function sayHello($name = 'sir'){
    echo "good morning {$name}";
}
sayHello();
echo '<br/>';
function formatProduct($product){
    // echo "{$product['name']} costs \${$product['price']}";
    return "{$product['name']} costs \${$product['price']}";
}

$product = ['name' =>'burger', 'price'=> 20];
echo formatProduct($product);

?>