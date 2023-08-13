<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h1>My Calculator</h1>
                    <hr/>
                    <form action="action.php" method="POST">
                        <div class="row mb-3">
                            <label  class="col-md-3" for="">First Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="first_number" value="<?php echo isset($_GET['first_number']) ? $_GET['first_number'] : ''; ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label  class="col-md-3" for="">Second Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="second_number" value="<?php echo isset($_GET['second_number']) ? $_GET['second_number'] : ''; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label  class="col-md-3" for="">Your Choice</label>
                            <div class="col-md-9">
                                <label><input type="radio" class="" name="choice" value="+" checked/>+</label>
                                <label><input type="radio" class="" name="choice" value="-"/>-</label>
                                <label><input type="radio" class="" name="choice" value="*"/>*</label>
                                <label><input type="radio" class="" name="choice" value="/"/>/</label>
                                <label><input type="radio" class="" name="choice" value="%"/>%</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label  class="col-md-3" for="">Result </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name=""  value="<?php echo isset($_GET['message']) ? $_GET['message'] : '' ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label  class="col-md-3" for=""></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="Submit" name="calculator_btn" />
                                <input type="reset" class="btn btn-info" value="Reset" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
