
<?php include_once('../models/Category.php');
                                use models\Category;

   
?>

<div id="page-wrapper">

    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                        
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="index.php?page=insertC" method="POST" enctype="multipart/form-data">
                                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <tbody>
                                            <tr>
                                                <td>Name:</td>
                                                <td><input type="text" name="name"></td>   
                                            

                                                <td><button type="submit" class="btn btn-primary" name="insert">
                                                Insert

                                                </button>

                                                </td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </form>
                            <?php

                            if(isset($_POST['insert']))
                            {
                                
                                extract($_POST);
                                $category = new Category();
                                $category->name = $name;
                                if($category->save())
                                {
                                    echo '<p class="text-success">Category inserted sucessfully</p>';
                                }
                                else{
                                    echo "something went wrong";
                                }
                            }


                            ?>
                            </div>
                        </div>
                    </div>


    </div>
</div>