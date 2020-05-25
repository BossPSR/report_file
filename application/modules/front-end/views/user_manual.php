<br>
<?php if ($user) { ?>
    <h2 class="text-center" style="margin-top: 15px;">User Manual</h2>
<?php } elseif ($team) { ?>
    <h2 class="text-center" style="margin-top: 15px;">Team Manual</h2>
<?php } else { ?>
    <h2 class="text-center" style="margin-top: 15px;">User Manual</h2>
<?php } ?>
<hr class="line_package">
<br>
<!--Checkout page section-->
<div class="Checkout_section">
    <div class="container">
        <div class="checkout_form">
            <?php if ($user) { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOW TO BUY ?

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                HOW TO SELL ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                HOW TO BY PACKAGE ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                HOW TO REGISTER ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } elseif ($team) { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                WHAT IS ORDER LIST ?

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                WHAT IS MY TASK ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                HOW TO DELIVERY ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                WHAT IS MY FEEDBACK ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfive">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                HOW TO FEEDBACK FILE ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseseven" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } else { ?>
                <!--Accordion area-->
                <div class="accordion_area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="accordion" class="card__accordion">
                                    <div class="card card_dipult">
                                        <div class="card-header card_accor" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                HOW TO BUY ?

                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>

                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingTwo">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                HOW TO SELL ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>

                                            </button>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingThree">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                HOW TO BY PACKAGE ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card  card_dipult">
                                        <div class="card-header card_accor" id="headingfour">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                HOW TO REGISTER ?
                                                <i class="fa fa-plus"></i>
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Accordion area end-->
            <?php } ?>
        </div>
    </div>
</div>
<!--Checkout page section end-->
<br>