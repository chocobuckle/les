<?php         
    $footer = get_field('footer', 'options');	
    if( $footer ): 
            $phone_number = $footer['phone_number'];
            $email = $footer['email'];
            $address = $footer['address']; ?>
        </div>
    <?php endif; 
?>  
    <!-- =====================================
        ==== Start Contact -->
        <section class="contact" data-scroll-index="5" id="ContactUs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 map">
                        <div id="ieatmaps"></div>
                        <div class="info valign">
                            <span class="icon-toggle"><i class="icofont icofont-social-google-map"></i></span>

                            <div class="vertical-center">
                                <div class="item">
                                    <span class="icon"><i class="icofont icofont-phone"></i></span>
                                    <div class="cont">
                                        <h6>Phone : </h6>
                                        <p><?php echo $phone_number ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="icon"><i class="icofont icofont-map"></i></span>
                                    <div class="cont">
                                        <h6>Address : </h6>
                                        <p><?php echo $address ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <span class="icon"><i class="icofont icofont-email"></i></span>
                                    <div class="cont">
                                        <h6>Email : </h6>
                                        <p><?php echo $email ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 contact-form">
                        <div class="form" id="contact-form">

                            <div class="messages"></div>

                            <div class="controls">

                                <div class="row">

                                    <div class="section-head col-sm-12">
                                        <h4>
                                            <span>Submit</span><br>
                                            Your CV
                                        </h4>
                                    </div>

                                    <?php echo do_shortcode('[contact-form-7 id="63" title="CV submission"]'); ?>

<?php /*
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email" placeholder="Email" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="form_subject" type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="CV">Attach your CV : </label>
                                            <input type="file" id="form_CV" name="CV" placeholder="Attach your CV" rows="4" required="required"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit"><span>Send Message</span></button>
                                    </div>
*/ ?>
                                </div>                             
                            </div>
    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact ====
        ======================================= -->
        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHAodSH1YNrC5tgqSxdPp3K3Ka891YRHo&callback=initMap" async defer></script>
        <script>
        
        initMap();

        </script>