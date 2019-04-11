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
                <?php include "../views/feedback.php"; ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <form action="../php/actor_edit.php" method="post">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Name:</td>
    <td><input type="text" value="<?= $actor->name ?>" name="name"></td>
</tr>
<tr>
    <td>Surname:</td>
    <td><input type="text" value="<?= $actor->surname ?>" name="surname"></td>
</tr>
<tr>
     <td>
        Description:
     </td>
     <td>
     <textarea type="text" name="description"><?= $actor->description ?></textarea>
   <input type="hidden" name="id" value="<?= $actor->id ?>">
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

<form action="../php/actor_edit.php" method="post" enctype="multipart/form-data">
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
<form action="../php/actor_edit.php" method="post" enctype="multipart/form-data">
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
