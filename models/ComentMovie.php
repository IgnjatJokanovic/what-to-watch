<?php 
    namespace models;
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
  
    use models\DB;
    class ComentMovie
    {
        public $comment;
        public $created_at;
        public $id_user;
        public $id_movie;

        public function save()
        {
            $con = DB::getInstance()->getConnection();
            $id_s = array();
            $stm1 = $con->prepare("insert into comment_movie values('', :user, :movie, :coment, :time)");
            $stm1->bindParam(":user", $this->id_user);
            $stm1->bindParam(":movie", $this->id_movie);
            $stm1->bindParam(":coment", $this->comment);
            $stm1->bindParam(":time", $this->created_at);
            $stm1->execute();
        }

        public function all($movie)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from user u join comment_movie cm on u.id=cm.id_user  where id_movie=$movie")->fetchAll();
        }

    }



