<?php namespace models;
   use models\DB;
   session_start();
    class User
    {
        public $name;
        public $surname;
        public $uname;
        public $email;
        public $password;
        public $image;
        public $err = array();

        public function User($data)
        {
            $this->name = $data->name;
            $this->surname = $data->surname;
            $this->uname = $data->uname;
            $this->email = $data->email;
            $this->password = $data->password;
            $this->image = $data->img;

        }
        public function save()
        {
            $this->validateRegistration();
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $query = "insert into image values('', :src, :alt)";
                $smt = $con->prepare($query1);
                $smt->bindParam(":src", $this->image);
                $smt->bindParam(":alt", $this->name.' '.$this->surname);
                $smt->execute();
                $img_id = $con->lastInsertId();
                $ac_key = mdb($this->uname);
                $query1 = "insert into user values('', :name, :surname, :uname, :email, :pass, '', $ac_key, $img_id, 2)";
                $smt1 = $con->prepare($query1);
                $smt1->bindParam(":name", $this->name);
                $smt1->bindParam(":surname", $this->surname);
                $smt1->bindParam(":uname", $this->uname);
                $smt1->bindParam(":email", $this->email);
                $smt1->bindParam(":pass", md5($this->password));
                $smt1->execute();
                mail($this->email, 'Account activation link', 'Please click <a href='."#?page=activation&ac_key=$ac_key".'>HERE</a> to activate your account.');
                $this->login($this->username, $this->password);
            }
        }
        public function update()
        {
            $this->validateUpdate();
            if(empty($this->err))
            {
                $user = $_SESSION['user'];
                $con = DB::getInstance()->getConnection();
                $query = "update image set src=:src, alt=:alt where id='$user->img_id'";
                $smt = $con->prepare($query1);
                $smt->bindParam(":src", $this->image);
                $smt->bindParam(":alt", $this->name.' '.$this->surname);
                $smt->execute();
                $con->query("update user set name='$this->name',  name='$this->name', surname='$this->surname', password='$this->password'");
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
            if($this->image['size'] == 0)
            {
                array_push($this->err, '<p class="text-danger">Image field is required</p>');
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
                array_push($this->err, '<p class="text-danger">Image field is required</p>');
            }
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $uname_check = $con->query("select * from user where username='$this->uname'")->fetch();
                $email_check = $con->query("select * from user where email='$this->email'")->fetch();
                if(empty($uname_check))
                {
                    array_push($this->err, '<p class="text-danger">Username already taken try somethin else</p>');
                }
                if(empty($email_check))
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
            if(!preg_match($regex, $this->uname))
            {
                array_push($this->err, '<p class="text-danger">Username field mist contain only letters and number and be atleast 3 characters long</p>');
            }
            if(!preg_match($regex, $this->password))
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
                    $con->query("update user set active=true where id='$user->id'");
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
            return $con->query("select u.id as id, u.name as name, u.surname as surname, u.username as uname, u.email as email, u.active as active, i.src as src, i.alt as alt, r.name as role from user u join image i 
            on u.img_id=i.id join role r on u.role_id=r.id where '$column'='$value'")->fetch();
        }
        public function login($uname, $pass)
        {
            $this->validateLogin();
            if(empty($this->err))
            {
                $con = DB::getInstance()->getConnection();
                $user = $con->query("select u.id as id, u.name as name, u.surname as surname, u.username as uname, u.email as email, u.active as active, i.id as img_id, i.src as src, i.alt as alt, r.name as role from user u join image i 
                on u.img_id=i.id join role r on u.role_id=r.id where username='$uname' and password=md5('$pass')")->fetch();
                if($user)
                {
                    $_SESSION['user'] = $user;
                }
                else
                {
                    array_push($this->err, 'Invalid username or password');
                }
            }
        }
        public function logout()
        {
            if(isset($_SESSION['user']))
            {
                unset($_SESSION['user']);
            }
        }
    }



