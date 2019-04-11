<?php
include_once('../models/Actor.php');
include_once('../models/Movie.php');
include_once('../models/Category.php');
use models\Actor;
use models\Movie;
use models\Category;
$movie = new Movie();
$category = new Category();
$actor = new Actor();
$actors = $actor->allNameSurname();
$id = $_GET['id'];
$movie->findById($id);
$present_actors = array();
$present_categories = array();
$categories = $category->all();
foreach($movie->actors as $actor)
{
    array_push($present_actors, $actor->id);
}
foreach($movie->categories as $c)
{
    array_push($present_categories, $c->id);
}
?>

<div id="page-wrapper">

 <div class="row">
                <div class="col-lg-12">
                <?php include "../views/feedback.php"; ?>
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                        <form action="../php/movie_edit.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



                                <tbody>
                                            <tr>
                                                <td>Title:</td>
                                                <td><input type="text" value="<?= $movie->title ?>" name="title"></td>   
                                            </tr>
                                            <tr>
                                                <td>Storyline:</td>
                                                <td><textarea type="text" name="story"><?= $movie->story ?></textarea>
<?php foreach($movie->galery as $g): ?>
<input type="hidden" name="ids[]" value="<?= $g->id ?>">
<?php endforeach; ?>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Release date:</td>
                                                <td>
                                                    <select name="d">
                                                        <option value="0">Choose a day</option>
                                                        <?php
                                                            for($i = 1; $i<=31; $i++):
                                                        ?>
                                                        <option value="<?= $i ?>" <?= $i==date('j', $movie->release)?"selected='true'":''?>><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>

                                            
                                                    <select name="m">
                                                        <option value="0">Choose a month</option>
                                                        <?php
                                                            for($i = 1; $i<=12; $i++):
                                                        ?>
                                                        <option value="<?= $i ?>"<?= $i==date('n', $movie->release)?"selected='true'":''?>><?= $i ?></option>
                                                            <?php endfor; ?>
                                                    </select>
                                                    
                                            
                                                
                                                    <select name="y">
                                                        <option value="0">Choose a year</option>
                                                        <?php
                                                            for($i = 1895 ; $i<=date("Y", strtotime('+5 years')); $i++):
                                                        ?>
                                                        <option value="<?= $i ?>" <?= $i==date('Y', $movie->release)?"selected='true'":''?>><?= $i ?></option>
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
                                                        <option value="<?= $country ?>" <?= $country==$movie->country?"selected='true'":''?>><?= $country ?></option>
                                                            <?php endforeach; ?>
                                                    </select>

                                                </td>               
                                            </tr>
<tr>
<td>
<input type="hidden" name="id" value="<?= $id?>">
<input type="submit" value="Edit" class="btm btn-primary" name="editTxt"/>
</td>
</tr>
</tbody>
</table>
</form>

<form action="../php/movie_edit.php" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Main image : <img src="../<?=$movie->image?>" width="50"></td>
    <td>
    <input type="file" name="image">
    <input type="hidden" name="id_main" value="<?=$movie->img_id ?>">
    </td>
    <td>
        <input type="submit" value="Edit" class="btm btn-primary" name="editImage"/>
    </td>
</tr>
</tbody>
</table>
</form>
<?php foreach($movie->galery as $g): ?>
<form action="../php/movie_edit.php" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Galery image: <img src="../<?=$g->src?>" width="50"></td>
    <td>
    <input type="file" name="galery">
    <input type="hidden" name="id_galery" value="<?= $g->id ?>">
    </td>
    <td>
        <input type="submit" value="Edit" class="btm btn-primary" name="editGalery"/>
    </td>
</tr>
</tbody>
</table>
</form>




<?php endforeach; ?>
</tbody>
</table>
</form>
<h1>Add/Remove Actors</h1>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <tbody>



<?php foreach($actors as $a):?>

<form action="../php/movie_edit.php" method="post">
<tr>
    <td>
    Actor: <?= $a->name.' '.$a->surname ?>
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="actor" value="<?= $a->id ?>">
    <input type="hidden" name="controll" value="<?= in_array($a->id, $present_actors)?'remove':'add' ?>">
    </td>
    <td>
        <input type="submit" class="btn btn-primary" value="<?= in_array($a->id, $present_actors)?'Remove':'Add' ?>" name="add/remove"/>
    </td>
</tr>
</form>


<?php endforeach; ?>
</tbody>
</table>

<h1>Add/Remove Categories</h1>

                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <tbody>



<?php foreach($categories as $c):?>

<form action="../php/movie_edit.php" method="post">
<tr>
    <td>
    Category: <?= strtoupper($c->name) ?>
    <input type="hidden" name="category" value="<?= $c->id ?>">
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="hidden" name="controll" value="<?= in_array($c->id, $present_categories)?'remove':'add' ?>">
    </td>
    <td>
        <input type="submit" class="btn btn-primary" value="<?= in_array($c->id, $present_categories)?'Remove':'Add' ?>" name="add/remove_c"/>
    </td>
</tr>
</form>


<?php endforeach; ?>
</tbody>
</table>

</div>


</div>
</div>


            


          
</div>
