<?php
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
        $this->isAccount();
    }
//    magic method
public function __info(){
  $infomsg = [num=>$this->accountNumber,balance=>$this->balance,owername=>$this->ownername];
  return $infomsg;
}
//Xarajat qilish
    public function deposit($amount){
        if (is_numeric($amount)){
            $this->balance=$this->balance+$amount;
            echo "Xisonbingiz:".$this->balance.". $amount miqdorda summa qo'shdingiz";
            return $this->balance;
        }else{
            throw new Exception();
        }
    }
//xisobni to'ldirish
    public function withdraw($amount){
        if (is_numeric($amount)){
            $this->balance=$this->balance-$amount;
            echo "Xisonbingiz:".$this->balance.". $amount miqdorda summa yechib oldingiz";
            return $this->balance;
        }else{
            throw new Exception();
        }
    }
//    accountNumberni tekshirish
    public function isAccount()
    {
        if(in_array($this->accountNumber,$this->accountCollection)){
            throw new Exception("Bu accountNumber {$this->accountNumber} oldin qo'shilgan ");
        }else{
            $this->accountCollection[]=array($this->accountNumber);
        }
    }
}
//1 masala
//$account1 = new BankAccount('15684',50000,'John Deo');
//$account2 = new BankAccount('15684',50000,'John Deo');
//$account3 = new BankAccount('52415',50000,'John Deo');
//2 masala
//try {
//    $BankAcount = new BankAccount('99999',30000,'Davron' );
//    $BankAcount->deposit(10000);
//    $BankAcount->withdraw(12000);
//}catch(Exception $e){
//    echo "Xatolik ".$e->getMessage()." file-".$e->getFile()." Line-".$e->getLine();
//}
//3 masala
$BankAccount = new BankAccount(25648,4444,"Davron");
print_r($BankAccount) ;
