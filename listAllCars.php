<?php include("templates/inc_header.html"); ?>
        <h1>All Cars</h1>
        <hr />
            <div id="categoryButtons"></div>

        <hr />
        <a href="" class="btn btn-outline-warning" id="availableCars">Available Cars </a>
        <a href="" class="btn btn-outline-warning" id="unavailableCars">Unavailable Cars</a>
        <br />
        <br />

        <table class="table" id="table">
            <thead>
                <tr>
                    <th>ID</th><th>Make</th><th>Model</th><th>Year</th><th>Number Plate</th><th>Available To Rent</th><th>Action</th>
                </tr>
            <thead>
                <tbody>
                <script src="js/car/listofcars.js"></script>
            <div id="editAndDeleteButtons"></div>
            </tbody>
        </table>

<?php include("templates/inc_footer.html"); ?>