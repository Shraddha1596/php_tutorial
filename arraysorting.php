<?php
    $sort=array('Shraddha','Kunal','Akshay', 'Shariq', 'Sahil', 'Ankit', 'Sakshi');
    print_r($sort);
    echo "<br>";
    
    //ascending order sorting
    sort($sort);
    for($i=0; $i<count($sort);$i++)
    {
        echo($sort[$i]);
        echo "<br>";
    }

    //descending order sorting
    echo "<br>";
    rsort($sort);
    for($i=0; $i<count($sort);$i++)
    {
        echo($sort[$i]);
        echo "<br>";
    }

    echo "<br><br>";
    echo "before sorting using asort()<br>";
    $arr1=array("Shraddha"=>"5","Kunal"=>"2","Akshay"=>"4","Shariq"=>"3","Sahil"=>"1");
    print_r($arr1);
    echo "<br><br>";
    
    echo "after sorting using asort()<br>";
    asort($arr1);
    print_r($arr1);
    echo "<br><br>";
    
    echo "after sorting using ksort()<br>";
    ksort($arr1);
    print_r($arr1);
    echo "<br><br>";
    
?>