<?php
//LOOPS

//While
// $num =0;
// while($num <=20){
//     echo $num++ .'<br/>';
// }

//do-----while
// $num =25;
// do{
//     echo $num-- .'<br/>';
// }while($num>10);

//for
// for( $i = 0; $i < 10; $i++ ){
//     echo "$i <br>";
// }
//foreach--works on arrays and objects 'only'. The key variable is not destroyed after
$programmingLanguages = ['Python', 'PHP','C#','Java','Kotlin'];
// echo''. implode(', ', $programmingLanguages) .'';
foreach ($programmingLanguages as $language) {
    echo "$language<br/>";
}
unset($language);
$language ='Hasvatu';
echo "<br>$language";
//So you have to manually unset it 