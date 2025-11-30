<?php

require 'Wallet.php';
require 'HomeKey.php';
require 'TransportCard.php';
require 'SmartPhone.php';
require 'ToDoTasks.php';

$wallet = new Wallet();
$homeKey = new HomeKey();
$transportCard = new TransportCard();
$smartPhone = new SmartPhone();

$toDo = new ToDoTasks($wallet, $homeKey, $transportCard, $smartPhone);

$toDo->leaveHome();
