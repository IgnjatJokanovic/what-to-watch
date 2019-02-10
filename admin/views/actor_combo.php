
<?php 
    include_once('../models/Actor.php');
    use models\Actor;
    $actor = new Actor();
    $actors = $actor->all();
   
?>

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Actor</th>
                                        <th>Delete/Update</th>
                                    </tr>
                                </thead>
                                <tbody>


<?php foreach($result as $r2): ?>
<tr>
    <td><?= $r2->src ?></td>
    <td>
    <form action="../views/admin.php?page=galUD" method="POST">
    <input name="id" type="hidden" value="<?= $r2->id ?>"/>
    <button class="btn btn-primary" type="submit" name="delG">Delete</button>
    </form>
    </td>
</tr>
<tr>
<form action="../views/admin.php?page=galUD" method="POST" enctype="multipart/form-data">
    <td><input type="file" name="src"></td>
    <input name="idU" type="hidden" value="<?= $r2->id ?>"/>
    <td><button class="btn btn-primary" type="submit" name="galUSub">Update</button></td>
</form>
</tr>



<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>

            


          
</div>
