<?php
   namespace models; 
   require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
  
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
       public function presentCategories()
       {
            $con = DB::getInstance()->getConnection();
            return $con->query("select distinct c.name as name, c.id as id  from category c join movie_category mc on c.id=mc.id_category")->fetchAll();
       }
       public function destroy($id)
       {
            $con = DB::getInstance()->getConnection();
            $con->query("delete from category where id=$id");
            $con->query("delete from movie_category where id_category = $id");

       }
       public function update($id)
       {
            $con = DB::getInstance()->getConnection();
            $stm = $con->prepare("update category set name=:name where id=$id");
            $stm->bindParam(":name", $this->name);
            $stm->execute();
       }
    }



