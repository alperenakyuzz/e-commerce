<div class="section-payment">
    <ol class="one-page-checkout" id="checkoutSteps3">
        <li id="opc-billing" class="section allow active">
            <div class="step-title">
                <h3 class="one_page_heading"> {{ __('front.shipping_information') }}</h3>
                <div id="checkout-step-payment" class="step a-item">
                    <div class="billing-info-area {{ $digital == 1 ? 'd-none' : '' }}">
                        <ul class="info-list">
                            <li>
                                <p id="shipping_user"></p>
                            </li>
                            <li>
                                <p id="shipping_location"></p>
                            </li>
                            <li>
                                <p id="shipping_phone"></p>
                            </li>
                            <li>
                                <p id="shipping_email"></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="step-title">
                <h3 class="one_page_heading"> {{ __('front.payment_method') }}</h3>
                <div id="checkout-step-payment" class="step a-item">
                    Payment Gateways here
                    <form method="post" action="{{ route('iyzipay-submit') }}" role="form">
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label for="name">Card holder name</label>
                                <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Card holder name">
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="type">Card Type</label>
                                <select name="type" id="type" class="form-control input-lg">
                                    <option value="">Type</option>
                                    <option value="visa">Visa</option>
                                    <option value="master">MasterCard</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-9">
                                <label for="number">Card Number</label>
                                <input type="text" name="number" id="number" class="form-control input-lg" placeholder="Credit card number">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="month">Expire Month</label>
                                <select name="month" id="month" class="form-control input-lg">
                                    <option value="">Month</option>
                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo str_pad($i, 2, 0, STR_PAD_LEFT); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="year">Expire Year</label>
                                <select name="year" id="year" class="form-control input-lg">
                                    <option value="">Year</option>
                                    <?php for ($i = date('y'); $i <= date('y') + 20; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo 2000 + $i; ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cvv">Cvv</label>
                                <input type="text" name="cvv" id="cvv" class="form-control input-lg" placeholder="Cvv">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-lg btn-block btn-success">Payment</button>
                        </div>
                    </form>
                </div>
            </div>

        </li>
    </ol>
</div>