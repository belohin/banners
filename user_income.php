<?php
class User_income { // Objektum a szükséges adatok lekérésére
    public $username = '';
    public $incomes;
    public function __construct($user_mail) {
      try{
        $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_PERSISTENT => DB_PERSISTENCY));
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbh->prepare("CALL get_user_incomes('" . $user_mail . "', @uname)");
        // Tárolt eljárás hívása kevésbé támadható SQL injekcióval. Hátrány, hogy a PDO bindParam funkciója
        // nem igazán használható. Ezért a bemenő paramétert szövegbeillesztéssel adom át.
        $sth->execute();
        $this->incomes = $sth->fetchAll(PDO::FETCH_ASSOC);
        // A kimenő paraméter kiolvasása is körülményes, újabb lekérdezést igényel
        $sth->closeCursor();
        $result = $dbh->query('SELECT @uname as uname');
        $un = $result->fetch(PDO::FETCH_ASSOC);
        $this->username = $un['uname'];
      }
      catch(Exception $e){
        trigger_error($e->getMessage(), E_USER_ERROR);
      }
      $dbh = null;
    }
}
?>