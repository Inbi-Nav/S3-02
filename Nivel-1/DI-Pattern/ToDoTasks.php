<?php


class ToDoTasks {

    private $wallet;
    private $homeKey;
    private $transportCard;
    private $smartPhone;


    public function __construct($wallet, $homeKey, $transportCard, $smartPhone)
    {
        $this->wallet = $wallet;
        $this->homeKey = $homeKey;
        $this->transportCard = $transportCard;
        $this->smartPhone = $smartPhone;
    }

    public function leaveHome() {
        $this->wallet->pick();
        $this->homeKey->pick();
        $this->transportCard->pick();
        $this->smartPhone->pick();
        
    }

}

?>