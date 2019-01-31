<?php 

    $number="0";
    echo "<h4>While loop</h4>";
    while($number<10)
    {
        echo "$number <br>";
        $number++;
    }

    echo "<h4>Do while loop</h4>";

    
    do {
        echo "The number is: $number <br>";
        $number++;
    } 
    while ($number<= 20);

    echo "<h4>For loop</h4>";

    $arr=array("Name1","Name2","Name3","Name4","Name5");
    print_r($arr);
    echo "<br>";

    for($i=0; $i<count($arr); $i++)
    {
        echo "$arr[$i]<br>";
    }

    echo "<h4>Foreach loop</h4>";

    $arr1=array("Name6"=>"1","Name7"=>"2","Name8"=>"3","Name9"=>"4","Name10"=>"5");
    
    print_r($arr1);
    echo "<br>";
    
    foreach($arr1 as $names=>$value)
    {
        echo "$names=$value<br>";
    }
    echo "<br>";
    foreach($arr1 as $names=>$value)
    {
        echo "$value<br>";
    }
    echo "<br>";
    foreach($arr1 as $names=>$value)
    {
        echo "$names<br>";
    }
    echo "<br>";
    foreach($arr as $names=>$value)
    {
        echo "$names=$value<br>";
    }
    
?>