<?php
    include_once ('MyList.php');
    $myList1 = new MyList();
    $myList1->insert(0,22);
    $myList1->insert(1,11);
    $myList1->insert(2,33);
    $myList1->insert(3,44);
    $myList1->add(0);
    $myList1->remove(2);
    echo $myList1->get(1);
    echo "<br/>";
    // $myList1->sort();
    $myList1->reset();  
    print_r ($myList1);
    echo "<br/>";
    // print_r ($myList1->addAll([1,2,3]));
    
    
    // echo $myList1->isEmpty();    
    