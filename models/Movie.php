<?php namespace models;
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/imdb/models/DB.php');
  
    use models\DB;
    class Movie
    {
        public $id;
        public $title;
        public $release;
        public $country;
        public $story;
        public $image;
        public $rating;
        public $actors = array();
        public $categories = array();
        public $galery = array();
        public $alt;
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

        public function all()
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from movie")->fetchAll();
        }

        public function paginate($limit, $offset)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select m.id as id, m.title as title, m.storyline as story, i.src as src, i.alt as alt from movie m join image i on m.img_id=i.id limit $limit, $offset");
        }

        public function findById($id)
        {
            $con = DB::getInstance()->getConnection();
            $this->actors = $con->query("select a.name, a.surname from actor a join movie_actor ma on a.id=ma.id_actor where ma.id_movie = $id")->fetchAll();
            $this->categories = $con->query("select c.name from category c join movie_category mc on c.id=mc.id_category where id_movie = $id")->fetchAll();
            $movie =  $con->query("select m.id as id, m.title as title, m.country as country, m.release_date as date, m.storyline as story, i.src as src, i.alt as alt from movie m join image i on m.img_id=i.id where m.id = $id")->fetch();
            $this->title = $movie->title;
            $this->release = $movie->date;
            $this->story = $movie->story;
            $this->image = $movie->src;
            $this->alt = $movie->alt;
            $this->country = $movie->country;
            $this->id = $movie->id;
            $this->galery = $con->query("select i.src, i.alt from image i join movie_galery mg on i.id=mg.id_img where mg.id_movie=$id")->fetchAll();
            $this->rating = $con->query("select avg(grade) as avg from movie_rating where id_movie=$id")->fetch();
        }
        public function fresh()
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select * from movie order by id desc limit 5");
        }
        public function incoming()
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select m.title as title, m.storyline as storyline, m.id as id, i.src as src, i.alt as alt from movie m join image i on m.img_id=i.id order by release_date desc limit 3");
        }
        public function byCategory($id)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select m.id as id, m.title as title, m.storyline as story, i.src as src, i.alt as alt from movie m join image i on m.img_id=i.id join movie_category mc on m.id=mc.id_movie where mc.id_category = $id")->fetchAll();
        }
        public function paginateByCategory($limit, $offset, $id)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select m.id as id, m.title as title, m.storyline as story, i.src as src, i.alt as alt from movie m join image i on m.img_id=i.id join movie_category mc on m.id=mc.id_movie where mc.id_category = $id limit $limit, $offset")->fetchAll();
        }




    }



