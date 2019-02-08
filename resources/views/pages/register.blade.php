@extends('layout')

@section('title', 'Cadastro')

@section('content')
    <div class="ui grid container centered">
        <div class="row">
            <div class="ui ten wide computer twelve wide mobile column">
                <div class="typo-section-sq top-default bottom-default">
                    <h2>Cadastro</h2>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda consectetur, delectus ducimus, facere.</h6>
                </div>
                <div class="white-section" id="app">

                    <dados-component></dados-component>

                    <h5>Onde mora?</h5>
                    <div class="div-c inline-3">
                        <div class="divided-column">
                            <label>CEP:</label>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="divided-column">
                            <label>Endereço</label>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="divided-column">
                            <label>Bairro</label>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="divided-column">
                            <label>Cidade</label>
                            <input type="text" placeholder=" ">
                        </div>
                        <div class="divided-column">
                            <label>Estado</label>
                            <input type="text" placeholder=" ">
                        </div>
                    </div>
                    <div class="div-c inline-2 text-right">
                        <button type="button" class="button-sq"><i class="icon icon-arrow-right-12"></i>Avancar</button>
                    </div>
                </div>

                <div class="white-section">
                    <div class="ui grid stackable">
                        <div class="row">
                            <div class="ui six wide computer column">
                                <h5>Products</h5>

                                <div class="product-payment-item">

                                    <div class="product-details">
                                        <img class="product-image" src="assets/images/property/property_little_01.jpg" alt="">

                                        <p class="product-title">
                                            Boutique New York Style  apartment with 3 rooms
                                        </p>
                                    </div>

                                    <div class="product-dates">
                                        <p class="product-from">
                                            <span>From:</span>12 november 2016
                                        </p>
                                        <p class="product-to">
                                            <span>To:</span>16 november 2016
                                        </p>
                                        <p class="total-per">4 x $24</p>
                                    </div>

                                    <div class="product-extra">
                                        <div class="extra-row">
                                            <p class="extra-title">Cleaning Fee</p>
                                            <p class="extra-price">
                                                $12
                                            </p>
                                        </div>
                                        <div class="extra-row link-sq">
                                            <p class="extra-title ">Discount 4 days - 30%</p>
                                            <p class="extra-price">
                                                -$42
                                            </p>
                                        </div>
                                        <div class="extra-row">
                                            <p class="extra-title">Subtotal</p>
                                            <p class="extra-price">
                                                $40
                                            </p>
                                        </div>
                                        <div class="extra-row total-sq">
                                            <p class="extra-title">Total</p>
                                            <p class="extra-price">
                                                $40
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <br>
                            </div>

                            <div class="ui six wide computer column">
                                <h5>Payment Methods</h5>

                                <div class="div-c payment-methods">
                                    <div class="divided-column">
                                        <input type="radio" id="radio1" name="radio-group-01">
                                        <label for="radio1">PayPal
                                            <img src="assets/images/paypal_image.jpg" alt="">
                                        </label>
                                    </div>

                                    <div class="divided-column">
                                        <input type="radio" id="radio2" name="radio-group-01">
                                        <label for="radio2">Credit Card
                                            <img src="assets/images/credit_card_image.jpg" alt="">
                                        </label>
                                    </div>

                                    <div class="divided-column">
                                        <input type="radio" id="radio3" name="radio-group-01">
                                        <label for="radio3">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="ui column">
                                <br>
                                <a href="homepage.html" class="button-sq float-right-sq">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    import DadosComponent
    export default {
        components: {DadosComponent}
    }
</script>