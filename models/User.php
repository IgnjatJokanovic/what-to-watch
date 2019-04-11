<?php 
    namespace models;
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/imdb/models/DB.php');
  
    use models\DB;
    class User
    {
        public $name;
        public $surname;
        public $uname;
        public $email;
        public $password;
        public $image = array();
        public $err = array();

        public function save()
        {
            $this->validateRegistration();
            if(empty($this->err))
            {
                $pic = time().$this->image['name'];

                if(move_uploaded_file($this->image['tmp_name'], "C:/xampp/htdocs/imdb/img/$pic"))
                {
                    $this->image ="img/$pic";
                    $con = DB::getInstance()->getConnection();
                    $query = "insert into image values('', :src, :alt)";
                    $smt = $con->prepare($query);
                    $smt->bindParam(":src", $this->image);
                    $name = $this->name.' '.$this->surname;
                    $smt->bindParam(":alt", $name);
                    $smt->execute();
                    $img_id = $con->lastInsertId();
                    $ac_key = md5($this->uname);
                    $query1 = "insert into user values('', :name, :surname, :uname, :email, :pass, '', '$ac_key', '$img_id', 2)";
                    $smt1 = $con->prepare($query1);
                    $pass =  md5($this->password);
                    $smt1->bindParam(":name", $this->name);
                    $smt1->bindParam(":surname", $this->surname);
                    $smt1->bindParam(":uname", $this->uname);
                    $smt1->bindParam(":email", $this->email);
                    $smt1->bindParam(":pass", $pass);
                    $smt1->execute();
                    $content = "Please click <a href='https://wtw-movies.000webhostapp.com/?page=activation&ac_key=$ac_key'>HERE</a> to activate your account";
                    mail($this->email, 'Account activation link', $content);
                    return true;

                }


               
            }
        }
        
        public function validateUpdate()
        {
            $regex = "/^[a-zA-Z0-9]{3,}$/";
            if($this->name != '' && !preg_match($regex, $this->name))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->surname != '' && !preg_match($regex, $this->surname))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->password != '' && !preg_match($regex, $this->password))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->password == '')
            {
                array_push($this->err, '<p class="text-danger">Password field is required</p>');
            }
            if($this->name == '')
            {
                array_push($this->err, '<p class="text-danger">Name field is required</p>');
            }
            if($this->surname == '')
            {
                array_push($this->err, '<p class="text-danger">Surname field is required</p>');
            }
        }
        public function validateRegistration()
        {
            $regex = "/^[a-zA-Z0-9]{3,}$/";
            if($this->name != '' && !preg_match($regex, $this->name))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->surname != '' && !preg_match($regex, $this->surname))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->uname != '' && !preg_match($regex, $this->uname))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->password != '' && !preg_match($regex, $this->password))
            {
                array_push($this->err, '<p class="text-danger">Name must contain minimum 3 characters and contain numbers and letters only</p>');
            }
            if($this->password == '')
            {
                array_push($this->err, '<p class="text-danger">Password field is required</p>');
            }
            if($this->name == '')
            {
                array_push($this->err, '<p class="text-danger">Name field is required</p>');
            }
            if($this->surname == '')
            {
                array_push($this->err, '<p class="text-danger">Surname field is required</p>');
            }
            if($this->uname == '')
            {
                array_push($this->err, '<p class="text-danger">Userame field is required</p>');
            }
            if($this->email == '')
            {
                array_push($this->err, '<p class="text-danger">Email field is required</p>');
            }
            if($this->email != '' && !filter_var($this->email, FILTER_VALIDATE_EMAIL))
            {
                array_push($this->err, '<p class="text-danger">Email field must be a valid email</p>');
            }
            if($this->image['size'] == 0)
            {
                array_push($this->err, '<p class="text-danger">Picture is required</p>');
            }
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $uname_check = $con->query("select * from user where username='$this->uname'")->fetch();
                $email_check = $con->query("select * from user where email='$this->email'")->fetch();
                if(!empty($uname_check))
                {
                    array_push($this->err, '<p class="text-danger">Username already taken try somethin else</p>');
                }
                if(!empty($email_check))
                {
                    array_push($this->err, '<p class="text-danger">Email already in use</p>');
                }
            }
        }
        public function validateLogin()
        {
            $regex = "/^[a-zA-Z0-9]{3,}$/";
            if($this->uname == '')
            {
                array_push($this->err, '<p class="text-danger">Username field is required</p>');
            }
            if($this->password == '')
            {
                array_push($this->err, '<p class="text-danger">Password field is required</p>');
            }
            if($this->uname != '' && !preg_match($regex, $this->uname))
            {
                array_push($this->err, '<p class="text-danger">Username field mist contain only letters and number and be atleast 3 characters long</p>');
            }
            if($this->password != '' && !preg_match($regex, $this->password))
            {
                array_push($this->err, '<p class="text-danger">Password field mist contain only letters and number and be atleast 3 characters long</p>');
            }

        }
        public function activate($hash)
        {

            $user = $this->findBy('ac_key', $hash);
            if(!empty($user))
            {
                if(!$user->active)
                {
                    $con = DB::getInstance()->getConnection();
                    $con->query("update user set active=true where ac_key='$hash'");
                }
                else
                {
                    array_push($this->err, 'User with that activation key is already active');
                }
            }
            else
            {
                array_push($this->err, 'User with that activation key not found');
            }

        }
        public function findBy($row, $value)
        {
            $con = DB::getInstance()->getConnection();
            return $con->query("select u.id as id, u.name as name, u.surname as surname, u.username as uname, u.email as email, u.active as active, i.id as amg_id, i.src as src, i.alt as alt, r.name as role from user u join image i 
            on u.img_id=i.id join role r on u.role_id=r.id where u.$row='$value'")->fetch();
        }
        public function login($uname, $pass)
        {
            $this->validateLogin();
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $user = $con->query("select u.id as id, u.password as password, u.name as name, u.surname as surname, u.username as uname, u.email as email, u.active as active, i.id as img_id, i.src as src, i.alt as alt, r.name as role from user u join image i 
                on u.img_id=i.id join role r on u.role_id=r.id where username='$uname' and password=md5('$pass')")->fetch();
                if($user)
                {
                    return $user;
                }
                else
                {
                    array_push($this->err, '<p class="text-danger">Invalid username or password</p>');
                }
            }
        }
        public function updateInfo($id, $img_id)
        {
            $this->validateUpdate();
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $con->query("update user set name='$this->name',  name='$this->name', surname='$this->surname', password=md5('$this->password') where id='$id'");
                $alt = $this->name.' '.$this->surname;
                $con->query("update image set alt='$alt' where id='$img_id'");
            }

        }
        public function updatePic($id)
        {
            
                $con = DB::getInstance()->getConnection();
                $query = "update image set src=:src where id='$id'";
                $smt = $con->prepare($query);
                $smt->bindParam(":src", $this->image);
                $smt->execute();
                


        }
    }

?>


