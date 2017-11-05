<?php include("templates/inc_header.html"); ?>
        <h1>Rented Cars</h1>

        <ul class="list-group">
            <li class="list-group-item">
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <div class="col-sm-5">
                        <input type="text" placeholder="Enter Customer email" id="txtSearchByEmail" class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <a href="" class="btn btn-outline-warning" id="searchByEmail">Search By Email</a>

                    </div>
                    <div class="col-sm-5">
                        <small id="errorSearchByEmail" class="text-danger"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                    <div class="col-sm-1">

                        <input type="text" placeholder="M" id="txtSearchMonth" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" placeholder="D" id="txtSearchDay" class="form-control">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" placeholder="Y" id="txtSearchYear" class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <a href="" class="btn btn-outline-warning" id="searchByDate">Search By Date</a>

                    </div>
                    <div class="col-sm-5">
                        <small id="errorDate" class="text-danger"></small>
                    </div>
                </div>
                <div class="form-group row">
                    <!--suppress XmlInvalidId -->
                        <small id="errorForm" class="text-danger"></small>
                </div>
            </li>
        </ul>

        <br />
        <script src="js/rent/rentedCars.js"></script>
        <table class="table" id="table">
            <thead>
            <tr>
                <th>ID</th><th>Rent Date</th><th>Return Date</th><th>Make</th><th>Model</th><th>Year</th><th>Number Plate</th><th>Total Amount</th>
            </tr>
            <thead>
            <tbody>

            <!--<div id="editAndDeleteButtons"></div>-->
            </tbody>
        </table>
<?php include("templates/inc_footer.html"); ?>