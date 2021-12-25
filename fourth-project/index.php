<?php
require_once './vendor/autoload.php';
use App\classes\Student;
use App\classes\Calculator;

$calResult = '';
if (isset($_POST['mainbtn']))
{
    $calculator = new Calculator($_POST);
    $calResult = $calculator-> index();
}

?>
<?php
$result = '';

if (isset($_POST['Button']))
{
    $student = new Student($_POST);
    $result = $student-> index();
}
echo isset($x);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href = "./assets/css/bootstrap.css">
    
</head>
<body>
    <section>
        <div class= "container">
            <div class = "row">
                <div class = "col-md-8 mx-auto">
                    <div class = "card ">
                        <div class = "card-header text-center">
                            <h3>Fill Up The Form</h3>
                        </div>
                        <div class = "card-body">
                            <form action = "" method = "post">
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">First Name</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" name = "first_name"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Last Name</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" name = "last_name"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Full Name</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" value = "<?php echo $result; ?>"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3"></lable>
                                    <div class = "col-md-9">
                                    <input type = "Submit" name = "Button" class = "btn btn-outline-success" value = "Submit"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class= "py-5 bg-light"> 
        <div class= "container">
            <div class = "row">
                <div class = "col-md-8 mx-auto">
                    <div class = "card ">
                        <div class = "card-header text-center">
                            <h3>Calculator</h3>
                        </div>
                        <div class = "card-body">
                            <form action = "" method = "post">
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">First Number</lable>
                                    <div class = "col-md-9">
                                        <input type = "number" class = "form-control" name = "first_num"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Second Number</lable>
                                    <div class = "col-md-9">
                                        <input type = "number" class = "form-control" name = "second_name"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Action</lable>
                                    <div class = "col-md-9">
                                        <label>
                                            <input type = "radio" name = "action" value = "+"/>Addition</input>
                                            <input type = "radio" name = "action" value = "-"/>Substraction</input>
                                            <input type = "radio" name = "action" value = "*"/>Multiplaction</input>
                                            <input type = "radio" name = "action" value = "/"/>Division</input>
                                            <input type = "radio" name = "action" value = "%"/>Remainder</input>
                                        </label>
                                   
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Result</lable>
                                    <div class = "col-md-9">
                                        <input type = "text" readonly value = "<?php echo $calResult;?>" class = "form-control" ></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3"></lable>
                                    <div class = "col-md-9">
                                        <input type = "Submit" name = "mainbtn" class = "btn btn-outline-success btn-block" value = "Submit"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./assets/js/jquery-3.6.0.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
</body>
</html>