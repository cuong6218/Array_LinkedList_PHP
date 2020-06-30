<?php
    include_once ('LinkList.php');
    $linkList = new LinkList();

    $linkList->insertFirst(11);
    $linkList->insertFirst(22);
    $linkList->insertLast(33);
    $linkList->insertLast(44);
    $totalNodes = $linkList->totalNodes();
    $linkData = $linkList->readList();

    echo $totalNodes;
    echo "<br/>";
    echo implode('-', $linkData);