<?php include("templates/inc_header.html"); ?>
    <ul class="list-group">
        <li class="list-group-item">
            <h1>Select a customer</h1>
            <table class="table" id="table">
                <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Surname</th><th>Email</th><th>Select</th>
                </tr>
                <thead>
                <tbody>
                    <script src="js/rent/transaction.js"></script>
                    <div id="editAndDeleteButtons"></div>
                </tbody>
            </table>
        </li>
    </ul>
</div>
<br />
<!--End processing here-->
<script src="js/customer/addAndEditCustomer.js"></script>
<?php include("templates/inc_footer.html"); ?>