
<?php 
    include_once('../models/Actor.php');
    use models\Actor;

   
?>

<div id="page-wrapper">

 <div class="row">
                <div class="col-lg-12">
                <?php include "../views/feedback.php"; ?>
                    <div class="panel panel-default">
                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="../php/actor_insert.php" method="POST" enctype="multipart/form-data">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <tbody>



<tr>
    <td>Name:</td>
    <td><input type="text" name="name"></td>   
</tr>
<tr>
    <td>Surname:</td>
    <td><textarea type="text" name="surname"></textarea></td>
</tr>
<tr>
    <td>Image:</td>
    <td><input type="file" name="image"></td>
</tr>
<tr>
     <td>
        Description:
     </td>
     <td>
     <textarea type="text" name="description"></textarea>

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

</td></tr>



</tbody>
</table>
</form>


</div>


</div>
</div>


            


          
</div>