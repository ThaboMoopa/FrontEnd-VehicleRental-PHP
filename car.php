<?php include("templates/inc_header.html"); ?>
        <ul class="list-group">
            <li class="list-group-item">

                <!-- buttons to select the category for the car -->
                <h3>Select Category</h3>
                <script src="js/rent/categorySelectionButtons.js"></script>
                <span id="categoryList"></span>
                <br />
                    <!-- Details for the car you are inserting -->
                    <!-- Category input textfield -->
                    <div class="form-group row">
                        <!--suppress XmlInvalidId -->
                        <label for='category' class="col-sm-1 col-form-label">Category</label>
                        <div class="col-sm-5">
                            <input type="text"  readonly id="txtCategory" class="form-control">
                            <small id="errorCategory" class="text-danger"></small>

                        </div>
                    </div>


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
                    <script src="js/car/addCar.js"></script>
                    <!--Button to submit the form -->
                    <div class="form-group row">
                        <!--<input type="submit" name="submitAddCar" class="btn btn-outline-success" value="Add Car" onclick="addCar()" />-->
                        <button class="btn btn-outline-success" onclick="addCar()" >Add Car</button>
                    </div>
                    <!-- End of submit button  -->
                <!--</form>-->
            </li>
        </ul>
<br />
<?php include("templates/inc_footer.html"); ?>