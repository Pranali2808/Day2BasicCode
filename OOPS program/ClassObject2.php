<?php


class BankAccount
{
	public $accountNumber;

	public $balance;

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}
        echo "Total account balance is : $this->balance \n";
	}
    
}

$obj = new BankAccount();
$obj->accountNumber = 1;
$obj->balance = 500;
$obj->deposit(10000);