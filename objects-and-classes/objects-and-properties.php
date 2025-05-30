<?php
  class Customer {
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
  }

  class Account {
    public int    $number;
    public string $type;
    public float  $balance;
  }

  $customer = new Customer();
  $account  = new Account();
  $customer->email  = 'sally@abc.example';
  $account->balance = 500.00;
?>
<?php include 'includes/header.php'; ?>

<p>Email: <?= $customer->email ?></p>
<p>Balance: $<?= $account->balance ?></p>