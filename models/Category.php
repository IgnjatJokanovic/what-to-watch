<?php
   namespace models; 
   include_once('../models/DB.php');
  
   use models\DB;
    class Category
    {
        public $name;
        
        public function save()
        {
            $con = DB::getInstance()->getConnection();
            $stm = $con->prepare("insert into category values('', :name)");
            $stm->bindParam(":name", $this->name);
            $result = $stm->execute();
            if($result)
            {
                return true;
            }
            else
            {
                return false;
            }

        }
       public function all()
       {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from category")->fetchAll();
       }
    }



