<?php
//1 masala
class BankAccount
{
    private $accountNumber;
    private $balance;
    private $ownername;
    public $accountCollection =[];
    function __construct($accountNumber,$balance,$ownername)
    {
        $this->accountNumber=$accountNumber;
        $this->ownername = $ownername;
        $this->balance=$balance;

    }
    public function isAccount()
    {
        if(in_array($this->accountNumber,$this->accountCollection[])){
            echo "Bu accountNumber {$this->accountNumber} oldin qo'shilgan ";
            throw new Exception("Bu accountNumber {$this->accountNumber} oldin qo'shilgan ");
        }else{
            $this->accountCollection[]=$this->accountNumber;
        }
    }
}

$account1=new BankAccount('12345',1000,'john deo');
$account1->isAccount();
$account2=new BankAccount('125345',2000,'john deo');
$account1->isAccount();
$account3=new BankAccount('67894',3000,'john deo');
$account3->isAccount();
