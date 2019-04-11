
<?php 
    include_once('../models/Category.php');
    use models\Category;
    $category = new Category();
    $categories = $category->all();
   
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <?php include "../views/feedback.php"; ?>
                    <div class="panel panel-default">
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
                                        <td><?= strtoupper($c->name) ?></td>
                                        <td>
                                        <form action="../php/category_delete.php" method="POST">
                                        <input name="id" type="hidden" value="<?= $c->id ?>"/>
                                        <button class="btn btn-primary" type="submit" name="delC">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <form action="../php/category_update.php" method="POST">
                                        <td><input type="text" name="txt" value="<?= $c->name ?>"></td>
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
