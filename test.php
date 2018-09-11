<?php
require 'User.php';

$user1 = new User("Jack Ma", 70, 1.6);
$user2 = new User("Jane Marwa", 63, 1.4);
$user3 = new User("Joan Munyes", 57, 1.5);
$user4 = new User("James Mutai", 76, 1.46);

$user1->printBMI();
$user1->printDetails();

$user2->printBMI();
$user2->printDetails();

$user3->printBMI();
$user3->printDetails();

$user4->printBMI();
$user4->printDetails();

//save==form==capture user
//fetch==table
//create db
//host it
//include nav to view and add
