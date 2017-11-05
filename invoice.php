<?php include("templates/inc_header.html"); ?>

<script src="js/invoice.js"></script>
    <h3>Invoice</h3>

    <table class="table" id="table">
        <!--suppress XmlInvalidId -->
        <tr>
            <td>

            <!--Company Details-->
            <p>
                <!--suppress XmlInvalidId -->
                <label for="Company">Symphony Way</label>
            </p>
            <p>
            <!--suppress XmlInvalidId -->
                <label for="Company">Bellville</label>
            </p>
            <p>
                <!--suppress XmlInvalidId -->
                <label for="Company">Cape Town</label>
            </p>
            <p>
                <!--suppress XmlInvalidId -->
                <label for="Company">7535</label>
            </p>
            </td>
            <td>
                <!--Invoice Details-->
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="invoice"><strong>Invoice No.</strong><span id="invoiceNo"></span></label>
                </p>
                <!--suppress XmlInvalidId -->
                <label for="Date"><strong>Invoice Date:</strong><span id="invoiceDate"></span></label>
            </td>
        </tr>

        <tr><!--Row 2-->
            <td><!--Client Details-->

                <p>
                    <!--suppress XmlInvalidId -->
                    <label for="Details"><strong>Client Details:</strong></label>
                </p>

                <p>
                <!--suppress XmlInvalidId -->
                    <label for="name"><span id="name"></span></label>
                </p>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="surname"><span id="surname"></span></label>
                </p>
                <!--<p>-->
                <!--&lt;!&ndash;suppress XmlInvalidId &ndash;&gt;-->
                    <!--<label for="cellnumber"><span id="cellnumber"></span></label>-->
                <!--</p>-->
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="email"><span id="email"></span></label>
                </p>
            </td>
            <td>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="Address"><strong>Address Details:</strong></label>
                </p>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="unitno"><span id="unitno"></span></label>
                </p>
                <p>
                    <!--suppress XmlInvalidId -->
                    <label for="complex"><span id="complex"></span></label>
                </p>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="Street"><span id="street"></span></label>
                </p>

                <p>
                <!--suppress XmlInvalidId -->
                    <label for="City"><span id="city"></span></label>
                </p>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="province"><span id="province"></span></label>
                </p>
                <p>
                <!--suppress XmlInvalidId -->
                    <label for="postalCode"><span id="postalCode"></span></label>
                </p>
            </td>
        </tr>
        <tr>
            <th>Make</th><th>Model</th><th>Number Plate</th><th>SubTotal</th>
        </tr>
        <tbody id="invoiceDetails">
        </tbody>
    </table>
    </div>
            <table class="table" id="results">
                <tbody>
                </tbody>
            </table>
    <?php include("templates/inc_footer.html"); ?>