<?php
namespace App;
use PDO;

class Spendings
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:dbname=tq_quest;host=mysql',
            'root',
            'password'
        );
    }

    public function fetchAllSpendings()
    {
        $sql = 'SELECT * FROM spendings';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $spendings = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $spendings;
    }
}