<?php
include_once('../models/Actor.php');
use models\Actor;
$actor = new Actor();
$id = $_GET['id'];
$actor->findById($id);
?>

<div id="page-wrapper">

 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<?php
    if(isset($_POST['editTxt']))
    {
        extract($_POST);
        $err = array();
        if($name == '')
        {
            array_push($err, "<p class='text-danger'>Name field is required</p>");
        }
        if($surname == '')
        {
            array_push($err, "<p class='text-danger'>Surname field is required</p>");
        }
        if($description == '')
        {
            array_push($err, "<p class='text-danger'>Description field is required</p>");
        }
        if(empty($err))
        {
            $actor = new Actor();
            $actor->name = ucfirst($name);
            $actor->surname = ucfirst($surname);
            $actor->description = $description;
            $actor->updateInfo($id, $ids);
            echo "<p class='text-success'>Update information, due to anomaly you have to refresh page manualy</p>";
            

            

        }
        else
        {
           
            foreach($err as $e)
            {
               echo $e;
            }
          
        }
            
       
       //$data->galery
    }
    if(isset($_POST['editImage']))
    {
        extract($_FILES);
        extract($_POST);
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($image['size'] == 0)
        {
            array_push($err, "<p class='text-danger'>Main image is required</p>");
        }
        if(!in_array($image['type'], $mimes)){
            $erors[] = '<p class="text-danger">Main image must be an image format</p>';
        }
        if(empty($err))
        {
            $main_img = time().$image['name'];
            if(move_uploaded_file($image['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img")){
                $img = "img/$main_img";
                $actor->updateImages($id_main, $img);
                echo "<p class='text-success'>Updated Main image, due to anomaly you have to refresh page manualy</p>";
            }
            
           
            

            

        }
        else
        {
           
            foreach($err as $e)
            {
               echo $e;
            }
          
        }

    }
    if(isset($_POST['editGalery']))
    {
        extract($_POST);
        extract($_FILES);
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($galery['size'] == 0)
        {
            array_push($err, "<p class='text-danger'>Main image is required</p>");
        }
        if(!in_array($galery['type'], $mimes)){
            $erors[] = '<p class="text-danger">Main image must be an image format</p>';
        }
        if(empty($err))
        {
            $main_img = time().$galery['name'];
            if(move_uploaded_file($galery['tmp_name'], "C:/xampp/htdocs/imdb/img/$main_img")){
                $img = "img/$main_img";
                $actor->updateImages($id_galery, $img);
                echo "<p class='text-success'>Updated Galery image, due to anomaly you have to refresh page manualy</p>";
            }
            

            

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
                    



                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="<?= $_SERVER['PHP_SELF'] ?>?page=actorE&id=<?= $id ?>" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Name:</td>
    <td><input type="text" value="<?= $actor->name ?>" name="name"></td>
</tr>
<tr>
    <td>Surname:</td>
    <td><input type="text" value="<?= $actor->name ?>" name="surname"></td>
</tr>
<tr>
     <td>
        Description:
     </td>
     <td>
     <textarea type="text" name="description"><?= $actor->description ?></textarea>
     <input type="hidden" name="ids[]" value="<?= $actor->img_id ?>">
<?php foreach($actor->galery as $g): ?>
<input type="hidden" name="ids[]" value="<?= $g->id ?>">
<?php endforeach; ?>
     </td>               
</tr>
<tr>
<td>
<input type="submit" value="Edit" class="btm btn-primary" name="editTxt"/>
</td>
</tr>
</tbody>
</table>
</form>

<form action="<?= $_SERVER['PHP_SELF'] ?>?page=actorE&id=<?= $id ?>" method="post" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Main image : <img src="../<?=$actor->image?>" width="50"></td>
    <td>
    <input type="file" name="image">
    <input type="hidden" name="id_main" value="<?=$actor->img_id ?>">
    </td>
    <td>
        <input type="submit" value="Edit" class="btm btn-primary" name="editImage"/>
    </td>
</tr>
</tbody>
</table>
</form>
<?php foreach($actor->galery as $g): ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>?page=actorE&id=<?= $id ?>" method="post" enctype="multipart/form-data">
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


</div>


</div>
</div>


            


          
</div>
