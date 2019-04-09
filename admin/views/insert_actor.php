
<?php 
    include_once('../models/Actor.php');
    use models\Actor;

   
?>

<div id="page-wrapper">

 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form action="index.php?page=insertA" method="POST" enctype="multipart/form-data">
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

<?php
    if(isset($_POST['insert']))
    {
        extract($_FILES);
        extract($_POST);
        $err = array();
        $mimes = array("image/jpg", "image/jpeg", "image/png");
        if($name == '')
        {
            array_push($err, "<p class='text-danger'>Name field is required</p>");
        }
        if($surname == '')
        {
            array_push($err, "<p class='text-danger'>Surname field is required</p>");
        }
        if($image['size'] == 0)
        {
            array_push($err, "<p class='text-danger'>Main image is required</p>");
        }
        if($description == '')
    {
            array_push($err, "<p class='text-danger'>Description field is required</p>");
        }
        for($i = 1; $i <= 6; $i++)
        {
            if(${'galery' . $i}['size'] == 0)
            {
                array_push($err, "<p class='text-danger'>Galerry image($i) is required</p>");

            }
            if(!in_array(${'galery' . $i}['type'], $mimes)){
                $erors[] = '<p class="text-danger">Galerry image($i) must be an image format</p>';
            }

        }
        if(!in_array($image['type'], $mimes)){
            $erors[] = '<p class="text-danger">Main image must be an image format</p>';
        }
        if(empty($err))
        {
            $actor = new Actor();
            $actor->name = ucfirst($name);
            $actor->surname = ucfirst($surname);
            $actor->description = $description;
            $main_img = time().$image['name'];
            if(move_uploaded_file($image['tmp_name'], "img/$main_img")){
                $actor->image = "img/$main_img";
            }
            for($i = 1; $i <=6; $i++)
            {
                $galery = time().${'galery' . $i}['name'];
                if(move_uploaded_file(${'galery' . $i}['tmp_name'], "img/$galery"))
                {
                    array_push($actor->galery, "img/$galery");
                }

            }
            $actor->save();
            

            

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

?>
</div>


</div>
</div>


            


          
</div>