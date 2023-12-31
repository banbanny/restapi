<?php
use Doctrine\DBAL\DriverManager as DriverManager;

class DB{
    private $qb;
    private $conn;
    private $connectionParams;

    public function __construct(Config $config){
        $this->connectionParams = $config->getConfig();

        $this->conn = DriverManager::getConnection($this->connectionParams);

        $this->qb = $this->conn->createQueryBuilder();
    }

    public function getQueryBuilder(){
        return $this->qb;
    }
}