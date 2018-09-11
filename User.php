<?php
/**
 * Created by PhpStorm.
 * User: Chemutai
 * Date: 10/09/2018
 * Time: 10:11
 */

class User
{
//classes-used to store data
//create fuctions, fields, constructor


//fields
private $names;
private $weight;
private $height;

    /**
     * User constructor.
     * @param $names
     * @param $weight
     * @param $height
     */
    public function __construct($names, $weight, $height)
    {
        $this->names = $names;
        $this->weight = $weight;
        $this->height = $height;
    }

//constructor-set up values

    public function printDetails()
    {
        echo "$this->names : $this->weight : $this->height<br>";
}

    public function printBMI()
    {
        $result = $this->weight /($this->height * $this->height);
        echo "$result<br>";
}

}

