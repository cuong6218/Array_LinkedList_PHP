<?php
include_once('Node1.php');
class LinkList1
{
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->secondNode = NULL;
        $this->count = 0;
    }
    function totalNode()
    {
        return $this->count;
    }
    function addFirst($data)
    {
        $node1 = new Node1($data);
        $node1->link = $this->firstNode;
        $this->firstNode = $node1;

        if ($this->lastNode == NULL) $this->lastNode = $node1;
        $this->count++;
    }
    function addLast($data)
    {
        if ($this->firstNode != NULL) {
            $node1 = new Node1($data);
            $this->lastNode->link = $node1;
            $node1->link = NULL;
            $this->lastNode = $node1;
            $this->count++;
        } else $this->addFirst($data);
    }
    function addIndex($index, $data)
    {
        if ($index == 0) $this->addFirst($data);
        else {
            $node1 = new Node1($data);
            $prev = $this->firstNode;
            $current = $this->firstNode;
            for ($i = 0; $i < $index; $i++) {
                $prev = $current;
                $current = $current->link;
            }
            $prev->link = $node1;
            $node1->link = $current;
            $this->count++;
        }
    }

    function delFirst()
    {
        if ($this->firstNode != NULL) {
            if ($this->firstNode->link != NULL) {
                $this->firstNode = $this->firstNode->link;
            } else $this->firstNode = NULL;
        }
        $this->count--;
    }
    function delLast()
    {
        if ($this->firstNode != NULL) {
            if ($this->firstNode->link == NULL) {
                $this->firstNode == NULL;
                $this->count--;
            } else {
                $prev = $this->firstNode;
                $current = $this->firstNode->link;
                while ($current->link != NULL) {
                    $prev = $current;
                    $current = $current->link;
                }
                $prev->link = NULL;
                $this->count--;
            }
        }
    }
    function delIndex($index)
    {
        $prev = $this->firstNode;
        $current = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $prev = $current;
            $current = $current->link;
        }
        $prev->link = $current->link;
        $this->count--;
    }
    // function remove($data){
    //     $index = 0;
    //     // $node1 = new Node1($data);
    //     $current = $this->firstNode;
    //     while ($current != NULL){
    //         if ($current->getNode1() == $data){
    //             $current->getNode1() == NULL;
    //         }
    //         $current = $current->link;
    //         $index++;
    //     }
    // }
    function indexOf($data){
        $index = 0;
        $current = $this->firstNode;
        while ($current != NULL){
            if ($current->getNode1()==$data){
                return $index;
            }
            $current=$current->link;
            $index++;
        }
        return $index;
    }
    function get($index){
        $count2 = 0;
        $current = $this->firstNode;
        while ($count2 <= $index){
            if ($count2 == $index){
                return $current->getNode1();
            }
            $count2++;
            $current = $current->link;
        }
    }
    function display()
    {
        $list = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($list, $current->getNode1());
            $current = $current->link;
        }
        return $list;
    }
}
$linklist1 = new LinkList1();
$linklist1->addFirst(10);
$linklist1->addFirst(12);
$linklist1->addFirst(11);
$linklist1->addFirst(13);
$linklist1->addLast(100);
echo $linklist1->get(3);
// $linklist1->remove(100);
// $linklist1->addIndex(2, 105);
// $linklist1->delFirst();
// $linklist1->delLast();
// $linklist1->delIndex(2);
echo ($linklist1->indexOf(12));
echo explode('--', $linklist1);
echo '<pre>';
print_r($linklist1->display());
echo '</pre>';
