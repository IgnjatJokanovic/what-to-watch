
<?php 
    include_once('../models/Movie.php');
    use models\Movie;
    $movie = new Movie();
    $movies = $movie->all();
   
?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
<?php
if(isset($_POST['delete']))
{
    
    extract($_POST);
    $movie->destroy($id);
    echo "<p class='text-success'>Sucessfully deleted</p>";
}


?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Movie</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($movies as $m): ?>
                                    <tr>
                                        <td><?= $m->title ?></td>
                                        <td>
                                        <form action="<?= $_SERVER['PHP_SELF'] ?>?page=movieC" method="POST">
                                        <input name="id" type="hidden" value="<?= $m->id ?>"/>
                                        <button class="btn btn-primary" type="submit" name="delete">Delete</button>
                                        </form>
                                        
                                        </td>
                                        <td>
                                        <a href="index.php?page=movieE&id=<?= $m->id ?>" class="btn btn-primary">Edit</a>
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
