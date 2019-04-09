<?php 
    namespace models;
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/imdb/models/DB.php');
  
    use models\DB;
    class ComentActor
    {
        public $comment;
        public $created_at;
        public $id_user;
        public $id_actor;

        public function save()
        {
            $con = DB::getInstance()->getConnection();
            $id_s = array();
            $stm1 = $con->prepare("insert into comment_actor values('', :user, :actor, :coment, :time)");
            $stm1->bindParam(":user", $this->id_user);
            $stm1->bindParam(":actor", $this->id_actor);
            $stm1->bindParam(":coment", $this->comment);
            $stm1->bindParam(":time", $this->created_at);
            $stm1->execute();
        }

        public function all($actor)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from user u join comment_actor ca on u.id=ca.id_user join image i on u.img_id=i.id  where id_actor=$actor")->fetchAll();
        }

    }



