<?php 
    include_once('../models/Category.php');
    include_once('../models/Actor.php');
    include_once('../models/Movie.php');
    use models\Category;
    use models\Actor;
    use models\Movie;
    


                                
    
?>

<div id="page-wrapper">

    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                        
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                            <?php
                                    if(isset($_POST['insert']))
                                    {
                                        extract($_POST);
                                        extract($_FILES);
                                        $err = array();
                                        $mimes = array("image/jpg", "image/jpeg", "image/png");
                                        if($title == '')
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Title field is required</p>");
                                        }
                                        if($story == '')
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Storyline field is required</p>");
                                        }
                                        if($image['size'] == 0)
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Image is required</p>");
                                        }
                                        if(!in_array($image['type'], $mimes))
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Image must be of image format</p>");
                                        }
                                        if($d == 0)
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select day</p>");
                                        }
                                        if($m == 0)
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select month</p>");
                                        }
                                        if($y == 0)
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select year</p>");
                                        }
                                        if($country == "0")
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select Country</p>");
                                        }
                                        if(!isset($categories))
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select atleast one category</p>");
                                        }
                                        if(!isset($actors))
                                        {
                                            array_push($err, "<p class='bg-danger text-white text-center'>Select atleast one actor</p>");
                                        }
                                        for($i = 1; $i <= 6; $i++)
                                        {
                                            if(${'galery' . $i}['size'] == 0)
                                            {
                                                array_push($err, "<p class='text-danger'>Galerry image($i) is required</p>");
                                
                                            }
                                            if(!in_array(${'galery' . $i}['type'], $mimes)){
                                                $erors[] = '<p class="text-danger">Galerry image($i) must be an image format</p>';
                                            }
                                
                                        }

                                        if(empty($err))
                                        {
                                            $movie = new Movie();
                                            $movie->title = $title;
                                            $movie->release = mktime(0,0,0,$m,$d,$y);
                                            $movie->country = $country;
                                            $movie->story = $story;
                                            $movie->actors = $actors;
                                            $movie->categories = $categories;
                                            $main_img = time().$image['name'];
                                            if(move_uploaded_file($image['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img"))
                                            {
                                                $movie->image = "img/$main_img";

                                            }
                                            for($i = 1; $i <=6; $i++)
                                            {
                                                $galery = time().${'galery' . $i}['name'];
                                                if(move_uploaded_file(${'galery' . $i}['tmp_name'], "C:/xampp/htdocs/imdb/img/$galery"))
                                                {
                                                    array_push($movie->galery, "img/$galery");
                                                }
                                
                                            }
                                            $movie->save();


                                        }
                                        else
                                        {
                                            foreach($err as $e)
                                            {
                                                echo $e;
                                            }
                                        }
                                        
                                    }


                                ?>
                                <form action="index.php?page=insertM" method="POST" enctype="multipart/form-data">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    
                                        <tbody>
                                            <tr>
                                                <td>Title:</td>
                                                <td><input type="text" name="title"></td>   
                                            </tr>
                                            <tr>
                                                <td>Storyline:</td>
                                                <td><textarea type="text" name="story"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Image:</td>
                                                <td><input type="file" name="image"></td>
                                            </tr>
                                            <tr>
                                                <td>Release date:</td>
                                                <td>
                                                    <select name="d">
                                                        <option value="0">Choose a day</option>
                                                        <?php
                                                            for($i = 1; $i<=31; $i++):
                                                        ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>

                                            
                                                    <select name="m">
                                                        <option value="0">Choose a month</option>
                                                        <?php
                                                            for($i = 1; $i<=12; $i++):
                                                        ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>
                                                    
                                            
                                                
                                                    <select name="y">
                                                        <option value="0">Choose a year</option>
                                                        <?php
                                                            for($i = 1895 ; $i<=date("Y", strtotime('+5 years')); $i++):
                                                        ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>
                                                </td>  
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    Select country:
                                                </td>
                                                <td>
                                                    <select name="country">
                                                        <option value="0">Choose a country</option>
                                                        <?php
                                                            $countries = array("Afghanistan", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Serbia", "Zambia", "Zimbabwe");
                                                            foreach($countries as $country):
                                                        ?>
                                                        <option value="<?= $country ?>"><?= $country ?></option>
                                                            <?php endforeach; ?>
                                                    </select>

                                                </td>               
                                            </tr>
                                            <tr>
                                                <td>
                                                    Select categories:
                                                </td>
                                                <td>
                                                    <?php
                                                        $category = new Category();
                                                        foreach($category->all() as $c):
                                                    ?>
                                                   <p> <input type="checkbox" name="categories[]" value="<?= $c->id ?>" />&nbsp;<?= strtoupper($c->name) ?></p>
                                                        <?php endforeach; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Select actors:
                                                </td>
                                                <td>
                                                    <?php
                                                        $actor = new Actor();
                                                        foreach($actor->allNameSurname() as $a):
                                                    ?>
                                                   <p> <input type="checkbox" name="actors[]" value="<?= $a->id ?>" />&nbsp;<?= $a->name.' '.$a->surname ?></p>
                                                        <?php endforeach; ?>
                                                </td>
                                            </tr>
                                            <?php
                                            for($i = 1; $i<=6; $i++):

                                            ?>

                                            <tr>
                                                <td>Galery image(<?= $i ?>):</td>
                                                <td><input type="file" name="galery<?= $i ?>"></td>
                                            </tr>

                                            <?php endfor; ?>




                                            <tr>

                                            <td><button type="submit" class="btn btn-primary" name="insert">
                                            Insert

                                            </button>

                                            </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </form>

                                
                            </div>
                        </div>
                    </div>


    </div>
</div>