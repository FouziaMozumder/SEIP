<?php

require_once './vendor/autoload.php';
use App\classes\Student;
//$student = new Student();
//$student->index();
$result1 = '';
$result = '';
if (isset($_POST['Button']))
{
    $iputValue=$_POST['string'];
    $result1 = str_word_count($iputValue);
    $result = strlen($iputValue);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "./assets/css/bootstrap.css">
</head>
<body>
    
    <section>
        <div class= "container">
            <div class = "row">
                <div class = "col-md-8 mx-auto">
                    <div class = "card ">
                        <div class = "card-header text-center">
                            <h3>Count The Words and Digits</h3>
                        </div>
                        <div class = "card-body">
                            <form action = "" method = "post">
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Enter Your String</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" name = "string"></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Total Words</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" name = "result1" readonly  value = "<?php echo $result1;?>" class = "form-control" ></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3">Total Characters</lable>
                                    <div class = "col-md-9">
                                    <input type = "text" class = "form-control" name = "result" readonly  value = "<?php echo $result;?>" class = "form-control" ></input>
                                    </div>
                                </div>
                                <div class = "from-group row">
                                    <lable class = "col-from-group col-md-3"></lable>
                                    <div class = "col-md-9">
                                    <input type = "Submit" name = "Button" class = "btn btn-outline-success"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </section>
    <script src ="./assets/js/jquery-3.6.0.js"></script>
    <script src ="./assets/js/bootstrap.js"></script>
</body>
</html>