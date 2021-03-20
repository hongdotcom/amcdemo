<?php ?>
<div class="container">
    <div class="invoice">
        <div class="invoice__header">
            <img class="invoice__logo" src="demo/img/invoice-logo.png" alt="">
        </div>

        <div class="row invoice__address">
            <div class="col-6">
                <div class="text-right">
                    <p>Invoice from</p>

                    <h4>AMC Style</h4>

                    <address>
                        Address 1<br>
                        Hong Kong
                    </address>

                    0097154686384<br>
                    invoice@amcstyle.com
                </div>
            </div>

            <div class="col-6">
                <div class="text-left">
                    <p>Invoice to</p>

                    <h4>Ever Win Engineering Co.</h4>

                    <address>
                        Unit AB, 8th Floor, Tung Kin Factory Building,
                    </address>

                    Chan Tai Man<br>
                    ctm@everwin.com
                </div>
            </div>
        </div>

        <div class="row invoice__attrs">
            <div class="col-3">
                <div class="invoice__attrs__item">
                    <small>Invoice#</small>
                    <h3>456213</h3>
                </div>
            </div>

            <div class="col-3">
                <div class="invoice__attrs__item">
                    <small>Date</small>
                    <h3>20/08/2018</h3>
                </div>
            </div>

            <div class="col-3">
                <div class="invoice__attrs__item">
                    <small>Whatever</small>
                    <h3>472-000</h3>
                </div>
            </div>

            <div class="col-3">
                <div class="invoice__attrs__item">
                    <small>Grand Total</small>
                    <h3>$23,980</h3>
                </div>
            </div>
        </div>


        <table class="table table-bordered invoice__table">
            <thead>
                <tr class="text-uppercase">
                    <th>ITEM DESCRIPTION</th>
                    <th>UNIT PRICE</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 50%">Order 12345</td>

                    <td>$450.00</td>
                    <td>05</td>
                    <td>$2250.00</td>
                </tr>

                <tr>
                    <td>Order 32434</td>
                    <td>$20.00</td>
                    <td>02</td>
                    <td>$40.00</td>
                </tr>

                <tr>
                    <td>Order 23341</td>
                    <td>$2322.00</td>
                    <td>01</td>
                    <td>$2322.00</td>
                </tr>

                <tr>
                    <td>Order 43433</td>
                    <td>$1290.00</td>
                    <td>12</td>
                    <td>$15,480.00</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td>$20,092.00</td>
                </tr>
            </tbody>
        </table>
        <div class="card-body overflow-hidden text-center">
            <i class="fa fa-5x mr-2 fa-cc-paypal" aria-hidden="true"></i>
            <i class="fa fa-5x mr-2 fa-cc-visa" aria-hidden="true"></i>
            <i class="fa fa-5x mr-2 fa-cc-mastercard" aria-hidden="true"></i>
        </div>
        
        <div class="invoice__remarks">
            <h5>REMARKS</h5>
            <p>Ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum.</p>

            <h5 class="mt-5">THANK YOU FOR YOUR BUSINESS</h5>
            <p>Proin ac iaculis metus. Etiam nisi nulla, fermentum blandit consectetur sed, ornare non tortor. Nam quis ipsum vitae dolor porttitor interdum. Curabitur faucibus erat vel ante fermentum lacinia. Integer porttitor laoreet suscipit. Sed cursus cursus massa ut pellentesque. Phasellus vehicula dictum arcu, eu interdum massa bibendum sit amet.</p>
        </div>

        <footer class="invoice__footer">
            <a href="">invoice@amcstyle.com</a><br>
            <a href="">00971 452 9900</a><br>
            <a href="">www.amcstyle.com</a>
        </footer>
    </div>
</div>