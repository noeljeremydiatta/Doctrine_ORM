<?php
namespace src\model;
use libs\system\Model;

class ClientDb extends Model
{
   public function findAll()
   {
     return $this->entityManager
                 ->createQuery("SELECT r FROM Client r")
                 getResult();
   } 
}

?>
