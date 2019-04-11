
<?php 
    include_once('../models/Actor.php');
    use models\Actor;
    $actor = new Actor();
    $actors = $actor->allNameSurname();
   
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
                                        <th>Actor</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($actors as $a): ?>
                                    <tr>
                                        <td><?= $a->name.' '.$a->surname ?></td>
                                        <td>
                                        <form action="../php/actor_delete.php" method="POST">
                                        <input name="id" type="hidden" value="<?= $a->id ?>"/>
                                        <button class="btn btn-primary" type="submit" name="delete">Delete</button>
                                        </form>
                                        
                                        </td>
                                        <td>
                                        <a href="index.php?page=actorE&id=<?= $a->id ?>" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>



                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>                                     
            </div>
</div>
