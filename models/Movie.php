<?php namespace models;
    include_once('../models/DB.php');
  
    use models\DB;
    class Movie
    {
        public $title;
        public $release;
        public $country;
        public $story;
        public $image;
        public $actors = array();
        public $categories = array();
        public $galery = array();

        public function save()
        {
            $con = DB::getInstance()->getConnection();
            $id_s = array();
            $stm1 = $con->prepare("insert into image values('', :src, :alt)");
            $stm1->bindParam(":src", $this->image);
            $stm1->bindParam(":alt", $this->title);
            $stm1->execute();
            $img_id = $con->lastInsertId();
            $stm2 = $con->prepare("insert into movie values('', :title, :release_date, :country, :storyline,  $img_id)");
            $stm2->bindParam(":title", $this->title);
            $stm2->bindParam(":release_date", $this->release);
            $stm2->bindParam(":country", $this->country);
            $stm2->bindParam(":storyline", $this->story);
            $stm2->execute();
            $movie_id = $con->lastInsertId();
            foreach($this->categories as $c)
            {
                $con->query("insert into movie_category values('', $movie_id,  $c)");

            }
            foreach($this->actors as $a)
            {
                $con->query("insert into movie_actor values('',  $a,  $movie_id)");

            }
            foreach($this->galery as $g)
            {
                $stm = $con->prepare("insert into image values('', :src, :alt)");
                $stm->bindParam(":src", $g);
                $stm->bindParam(":alt", $this->title);
                $stm->execute();
                array_push($id_s, $con->lastInsertId());
            }
            foreach($id_s as $id)
            {
                $con->query("insert into movie_galery values('', $movie_id, $id)");
            }
        }

        public function allNameSurname()
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from actor")->fetchAll();
        }

    }



