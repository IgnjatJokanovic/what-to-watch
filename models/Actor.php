<?php 
    namespace models;
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
  
    use models\DB;
    class Actor
    {
        public $name;
        public $surname;
        public $description;
        public $image;
        public $galery = array();

        public function save()
        {
            $con = DB::getInstance()->getConnection();
            $id_s = array();
            $alt = $this->name.' '.$this->surname;
            $stm1 = $con->prepare("insert into image values('', :src, :alt)");
            $stm1->bindParam(":src", $this->image);
            $stm1->bindParam(":alt", $alt);
            $stm1->execute();
            $img_id = $con->lastInsertId();
            $stm2 = $con->prepare("insert into actor values('', :name, :surname, :desc, $img_id)");
            $stm2->bindParam(":name", $this->name);
            $stm2->bindParam(":surname", $this->surname);
            $stm2->bindParam(":desc", $this->description);
            $stm2->execute();
            $ac_id = $con->lastInsertId();
            foreach($this->galery as $g)
            {
                $stm = $con->prepare("insert into image values('', :src, :alt)");
                $stm->bindParam(":src", $g);
                $stm->bindParam(":alt", $alt);
                $stm->execute();
                array_push($id_s, $con->lastInsertId());

            }
            foreach($id_s as $id)
            {
                $con->query("insert into actor_galery values('', $ac_id, $id)");
            }
        }

        public function allNameSurname()
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from actor")->fetchAll();
        }

    }



