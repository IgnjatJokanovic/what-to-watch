<div id="page-wrapper">

    <div class="row">
                    <div class="col-lg-12">
                    <?php include "../views/feedback.php"; ?>
                        <div class="panel panel-default">
                        
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="../php/category_insert.php" method="POST" enctype="multipart/form-data">
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
                            
                            </div>
                        </div>
                    </div>


    </div>
</div>