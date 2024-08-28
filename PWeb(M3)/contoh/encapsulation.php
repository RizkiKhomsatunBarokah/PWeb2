<?php
//definisi dari kelas BankAccount
class BankAccount {
    //roperti private yang ada di dalam kelas BAnkAccount
    private $balance;

    //construct
    public function __construct($balance) {
        $this->balance = $balance;
    }

    //metode untuk menambahkan sejumlah uang saldo ke rekening
    public function deposit($amount) {
        //melakukan pemeriksaan apakah jumlah yang disetor lebih besar dari 0
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    //metode untuk menarik sejumlah uang dari saldo rekening
    public function withdraw($amount) {
        //memeriksa apakah jumlah uang yang akan ditarik lebih besar dari 0 dan tidak melebihi saldo saat ini
        if ($amount > 0 && $amount <= $this->balance) {
            //mengurangi jumlah dari saldo rekening
            $this->balance -= $amount;
        }
    }

    //metode untuk mendapatkan saldo saat ini dari rekening
    public function getBalance() {
            return $this->balance;
    }
}

//membuat objek dari kelas bankAccount 
$account = new BankAccount(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current Balance: " . $account->getBalance();
?>