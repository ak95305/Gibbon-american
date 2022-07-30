<?php include_once 'header.php' ?>


<div id="contact">
    <header id="header" class="white">

        <?php include_once 'nav-head.php' ?>

        <div class="container-xxl">
            <h1>Contact <span>Us</span></h1>
        </div>
    </header>


    <div class="contact-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="map-wrapper"> <iframe src="https://snazzymaps.com/embed/59800" width="100%" height="1070px" style="border:none;"></iframe></div>
                </div>
                <div class="col-sm-6">
                    <div class="contact-text">
                        <div class="address-wrapper">
                            <div class="row clearfix">
                                <div class="aw-col1">
                                    <p><img src="assets/logo-gibbon.png" alt=""></p>
                                </div>
                                <div class="aw-col2">
                                    <h4>Gibbon Nutrition</h4>
                                    <p>100 Sonwil Drive<br> Buffalo, NY 14225</p>
                                    <p>Consumer Affairs 1-800-638-6914<br> <a href="mailto:info@gibbonnutrition.com">info@gibbonnutrition.com</a></p>
                                    <hr>
                                    <p>Hours of Operation<br> 8:00 am – 4:00 pm Pacific Time<br> Monday thru Friday.
                                    </p>
                                    <p>You can also email us at <a href="mailto:info@gibbonnutrition.com">info@gibbonnutrition.com</a></p>
                                </div>
                            </div>
                        </div>
                        <p></p>
                        <div role="form" class="wpcf7" id="wpcf7-f133-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="contact-submit.php" method="post" novalidate="novalidate">
                                <div class="row form-block">
                                    <div class="col-lg-6 col-md-12">
                                        <label>Full Name</label>
                                        <span class="fullname">
                                            <input type="text" name="fullname" value="" size="40" aria-required="true" aria-invalid="false">
                                        </span>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <label>E-mail Address</label>
                                        <span class="email">
                                            <input type="email" name="email" value="" size="40" aria-required="true" aria-invalid="false">
                                        </span>
                                    </div>
                                </div>
                                <div class="row form-block">
                                    <div class="col-12">
                                        <label>Message</label>
                                        <span class="message">
                                            <textarea name="message" cols="40" rows="10" aria-required="true" aria-invalid="false">

                                            </textarea>
                                        </span>
                                        <input type="submit" value="Send" name="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?php include_once 'footer.php' ?>