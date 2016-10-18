<h1><?php echo $title;?></h1>
<br>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


echo 'test view';
echo '<hr>';
echo 'data from controller : '.$cat;
?>
<hr><h1>แสดงผลแบบ Array</h1>
<br>
<?php
print_r ($ar);
echo '<hr>';
print_r($person);
echo '<hr>';

foreach ($person as $item){
    echo $item ['fname'].'/'.$item['lname'].'/'.$item['email'].'<br>';
}
