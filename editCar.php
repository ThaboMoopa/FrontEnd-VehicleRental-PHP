<?php include("templates/inc_header.html"); ?>
<!--Body starts here-->
    <script src="js/car/editCar.js"></script>
        <ul class="list-group">
            <li class="list-group-item">
                <h1>Edit Car</h1>
                <!-- buttons to select the category for the car -->
                <form name="carForm" id="carForm" method="post" action="<?php $_SERVER['SCRIPT_NAME']; ?>">


                    <!-- Details for the car you are inserting -->

                    <!-- Make input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="make" class="col-sm-1 col-form-label"> Make</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtMake" class="form-control">
                            <small id="errorMake" class="text-danger"></small>

                        </div>
                    </div>
                    <!-- End of make text field  -->

                    <!-- Model input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="model" class="col-sm-1 col-form-label"> Model</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtModel" class="form-control">
                            <small id="errorModel" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of model text field  -->


                    <!-- Year input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="year" class="col-sm-1 col-form-label">Year</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtYear" class="form-control">
                            <small id="errorYear" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Year text field  -->

                    <!-- Number Plate input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="numberPlate" class="col-sm-1 col-form-label">Number Plate</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtNumberPlate" class="form-control">
                            <small id="errorNumberPlate" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Quantity text field  -->

                    <!-- Hidden Form field to pass data -->
                    <div class="form-group row">
                        <div class="col-sm-5">

                            <script>
                                document.write('<input type="hidden" id="hidden" value="'+sessionStorage.carId+'" class="form-control">');
                            </script>

                        </div>
                    </div>
                    <!-- End of Quantity text field  -->
                    <!-- Quantity input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for="model" class="col-sm-1 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <input type="text" id="txtStatus" readonly class="form-control">
                            <small id="errorStatus" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- End of Quantity text field  -->

                    <!--Button to submit the form -->
                    <div class="form-group row">
                        <input type="submit" name="submitAddCar" class="btn btn-outline-success" value="Edit" onclick="validate()">
                    </div>
                    <!-- End of submit button  -->
                </form>
            </li>
        </ul>
<?php include("templates/inc_footer.html"); ?>