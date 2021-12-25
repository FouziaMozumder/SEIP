<?php
require_once '../vendor/autoload.php';
use App\classes\OSE;

$result ='';

if(isset($_POST['btn']))
{
    $oes   = new OSE($_POST);
    $result = $oes-> index();
}
?>
<?php include './includes/header.php';?>

<section class = "py-5">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-8 mx-auto">
                <div class = "card">
                    <div class = "card-header text-center">
                        <h3>Odd Even Sum Page </h3>
                    </div>
                    <div>
                        <div class = "card-body">
                            <form action = "" method = "post">
                                <div class= "form-group row">
                                    <lable class = "col-form-lable col-md-3 " >Starting Number</lable>
                                    <div class = "col-md-9">
                                        <input type = "number" name = "starting_Number" class = "form-control"/>
                                    </div>
                                </div>
                                <div class= "form-group row">
                                    <lable class = "col-form-lable col-md-3 " >Ending Number</lable>
                                    <div class = "col-md-9">
                                        <input type = "number" name = "ending_Number" class = "form-control"/>
                                    </div>
                                </div>
                                <div class= "form-group row">
                                    <lable class = "col-form-lable col-md-3 " >Increase Value</lable>
                                    <div class = "col-md-9">
                                        <input type = "number" name = "increase_Value" class = "form-control"/>
                                    </div>
                                </div>
                                <div class= "form-group row">
                                    <lable class = "col-form-lable col-md-3 " >Result</lable>
                                    <div class = "col-md-9">
                                        <textarea  class = "form-control"><?php echo $result;?></textarea>
                                    </div>
                                </div>
                                <div class= "form-group row">
                                    <lable class = "col-form-lable col-md-3 " ></lable>
                                    <div class = "col-md-9">
                                        <input type = "submit" name = "btn" class = "btn btn-success btn-block" value = "Submit"/>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footer.php';?>

