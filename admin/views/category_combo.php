
<?php 
    include_once('../models/Category.php');
    use models\Category;
    $category = new Category();
    $categories = $category->all();
   
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<?php
if(isset($_POST['delC']))
{
    extract($_POST);
    $category->destroy($id);
    echo "<p class='text-success'>Deleted category</p>";
}
if(isset($_POST['update']))
{
    extract($_POST);
    if($txt == '')
    {
        echo "<p class='text-danger'>Category must not be empty</p>";
    }
    else{
        $category->name = $txt;
        $category->update($idU);
        echo "<p class='text-success'>Updated category</p>";
    }
    
}


?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Delete/Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($categories as $c): ?>
                                    <tr>
                                        <td><?= $c->name ?></td>
                                        <td>
                                        <form action="<?= $_SERVER['PHP_SELF'] ?>?page=categoryC" method="POST">
                                        <input name="id" type="hidden" value="<?= $c->id ?>"/>
                                        <button class="btn btn-primary" type="submit" name="delC">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <form action="<?= $_SERVER['PHP_SELF'] ?>?page=categoryC" method="POST">
                                        <td><input type="text" name="txt"></td>
                                        <input name="idU" type="hidden" value="<?= $c->id ?>"/>
                                        <td><button class="btn btn-primary" type="submit" name="update">Update</button></td>
                                    </form>
                                    </tr>



                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                                     
            </div>
</div>
