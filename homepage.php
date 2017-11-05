<?php include("templates/inc_header.html"); ?>
        <script src="js/rent/loadingCategories.js"></script>
        <ul class="list-group">
            <li class="list-group-item">
                <h1>Welcome</h1>
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->

                    <div class="col-sm-5">
                        <!--<a href="car.html" type="text" button="" class="form-control">-->
                            <a href="listAllCars.php" class="btn btn-outline-warning" id="homepageCar">Cars</a>
                    </div>
                    <div class="col-sm-5">
                        <!--<a href="car.html" type="text" button="" class="form-control">-->
                        <a href="listAllCustomers.php" class="btn btn-outline-warning" id="homepageCustomer">Customer</a>
                    </div>
                </div>

                <div class="form-group row">
                <div class="col-sm-5">
                    <!--<a href="car.html" type="text" button="" class="form-control">-->
                    <a href="RentedCars.php" class="btn btn-outline-warning" id="homepageRented">Rented Cars</a>
                </div>
                    <div class="col-sm-5">
                        <!--<a href="car.html" type="text" button="" class="form-control">-->
                        <a href="outstandingRentals.php" class="btn btn-outline-warning" id="homepageOutstanding">Outstanding Cars</a>
                    </div>
                </div>

                <div class="form-group row">
                <div class="col-sm-5">
                    <!--<a href="car.html" type="text" button="" class="form-control">-->
                    <a href="transaction.php" class="btn btn-outline-warning" id="homepageTransaction">Rent a car</a>
                </div>
                </div>
            </li>
        </ul>
<br />

    <?php include("templates/inc_footer.html"); ?>
