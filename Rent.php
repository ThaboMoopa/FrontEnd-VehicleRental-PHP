<?php include("templates/inc_header.html"); ?>
    <ul class="list-group">
        <li class="list-group-item">

            <!-- buttons to select the category for the car -->
            <h3>Rent</h3>
            <h6>Select category for car</h6>
            <script src="js/rent/categorySelectionButtons.js"></script>
            <span id="categoryList"></span>
            <br />

            <!--table to display available cars-->
            <table class="table" id="table">
                <thead>
                <tr>
                    <th>ID</th><th>Make</th><th>Model</th><th>Year</th><th>Number Plate</th><th>Available To Rent</th><th>Action</th>
                </tr>
                <thead>
                <tbody>
                <script src="js/rent/rent.js"></script>
                <div id="editAndDeleteButtons"></div>
                </tbody>
            </table>


            <form name="carForm" id="carForm" method="post">

                <!--Details for the car you are inserting -->

                <script src="js/calculatePrice.js"></script>

                <!-- Date picker for Rent date -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for="bathroom" class="col-sm-1 col-form-label" >Rent date:</label>
                    <div class="col-sm-3">
                        <input type="text" id="datepicker" class="form-control">
                        <small id="errorRentDate" class="text-danger"></small>
                    </div>
                </div>


                <!-- Date picker for return date -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for="bathroom" class="col-sm-1 col-form-label" >Return date:</label>
                    <div class="col-sm-3">
                        <input type="text" id="datepicker2" class="form-control">
                        <small id="errorReturnDate" class="text-danger"></small>
                    </div>
                </div>


                <!-- Category input textfield -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for='price' class="col-sm-1 col-form-label">Selected Category</label>
                    <div class="col-sm-3">
                        <input type="text"  readonly id="txtCategory" class="form-control">
                        <small id="errorCategory" class="text-danger"></small>
                    </div>
                </div>

                <!-- Category input textfield -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for='car' class="col-sm-1 col-form-label">Selected Car</label>
                    <div class="col-sm-3">
                        <input type="text"  readonly id="txtCar" class="form-control">
                        <small id="errorCar" class="text-danger"></small>
                    </div>
                </div>

                <!-- Category input textfield -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for='car' class="col-sm-1 col-form-label">Rental Days</label>
                    <div class="col-sm-3">
                        <input type="text"  readonly id="txtDays" class="form-control">
                        <small id="errorDays" class="text-danger"></small>
                    </div>
                </div>


                <!-- Category input textfield -->
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <label for='car' class="col-sm-1 col-form-label">Price</label>
                    <div class="col-sm-3">
                        <input type="text"  readonly id="txtPrice" class="form-control">
                        <small id="errorPrice" class="text-danger"></small>
                    </div>
                </div>
                <!--Button to submit the form -->
                <div class="form-group row">
                    <input type="submit" name="submitAddCar" class="btn btn-outline-success" value="Rent" onclick="validateRent()">
                </div>
                <!-- End of submit button  -->
            </form>
        </li>
    </ul>

<br />
<?php include("templates/inc_footer.html"); ?>


