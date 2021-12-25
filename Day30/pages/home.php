<?php include 'includes/header.php';?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 max-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Auto Generated Password</h3>
                    </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Enter Your Password length</label>
                                    <div class="col-md-9">
                                        <input type="number" name="given_length" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Your Password</label>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo isset($result) ? $result: '';?>" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'includes/footer.php';?>


