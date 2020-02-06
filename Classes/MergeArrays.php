<?php


class MergeArrays
{
    private $first = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    private $second = [2, 5, 13, 29, 89, 233, 433, 1597, 2897, 5741, 7561, 28657, 33461, 43261, 96557, 426389, 514229, -1, -2, -3, -4, -5, -6, -7, -8, -9];
    private $third = [];

    public function __construct()
    {
//        $this->third = [];
        $count = count($this->first);
        for ($i = 0; $i < $count - 1; $i++) {
            $this->third[] = $this->first[$i];
            $this->third[] = $this->second[$i];
        }
//        print_r($this->third);
    }

    private function printArray($arr)
    {
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] . ' ';
        }
        echo '<br>';
    }

    public function getAllArrays()
    {
        $this->printArray($this->first);
        $this->printArray($this->second);
        $this->printArray($this->third);
//        echo count($this->first).' '.count($this->second).'<br>';
//        print_r($this->third);
    }
}