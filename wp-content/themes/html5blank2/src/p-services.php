


        <!-- =====================================
        ==== Start Services Tabs -->

       
        
        <?php
        $services = get_field('services_images', 'options');	
        if( $services ): ?>
             <div id="hiddenContent">
                <span id="image_1"><?php echo $services['image_1'] ?></span>
                <span id="image_2"><?php echo $services['image_2'] ?></span>
                <span id="image_3"><?php echo $services['image_3'] ?></span>
                <span id="image_4"><?php echo $services['image_4'] ?></span>

            </div>
            <?php 
               $executive_search_left_text = $services['executive_search_left_text'];
               $executive_search_right_text = $services['executive_search_right_text'];
               $interim_management_right_text = $services['interim_management_right_text'];
               $interim_management_left_text = $services['interim_management_left_text'];
               $executive_coaching_left_text = $services['executive_coaching_left_text'];
               $executive_coaching_right_text = $services['executive_coaching_right_text'];
               $organisational_consulting_left_text = $services['organisational_consulting_left_text'];
               $organisational_consulting_right_text = $services['organisational_consulting_right_text'];
               
        endif; ?>     


        

        <section class="serv-tabs section-padding bg-img" id="Services" data-overlay-dark="0" style="background-image : url(<?php echo $services['image_1'] ?>)" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    
                     <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Services 
                        </h4>
                    </div>

                    <div class="tabs col-sm-12">

                        <div class="content">
                            <div id="tab-1-content" class="tab-item curent">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p><?php echo $executive_search_left_text?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p><?php echo $executive_search_right_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-2-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p><?php echo $interim_management_right_text ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p><?php echo $interim_management_left_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-3-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p><?php echo $executive_coaching_left_text ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p><?php echo $executive_coaching_right_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-4-content" class="tab-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="item bord">
                                            <p><?php echo $organisational_consulting_left_text ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="item spcial">
                                            <p><?php echo $organisational_consulting_right_text ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tabs-icon row">

                            <div id="tab-1" class="col-md-3 col-sm-6 active item">
                                <div>
                                    <span class="icon"><i style="font-size: 36px;" class="icofont icofont-laptop-alt"></i></span>
                                    <h6>Executive Search</h6>
                                </div>
                            </div>

                            <div id="tab-2" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i style="font-size: 36px;" class="icofont icofont-brand-htc"></i></span>
                                    <h6>Interim management</h6>
                                </div>
                            </div>

                            <div id="tab-3" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i style="font-size: 36px;" class="icofont icofont-idea"></i></span>
                                    <h6>Executive coaching</h6>
                                </div>
                            </div>

                            <div id="tab-4" class="col-md-3 col-sm-6 item">
                                <div>
                                    <span class="icon"><i style="font-size: 36px;" class="icofont icofont-touch"></i></span>
                                    <h6>Organisational Consulting</h6>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Services Tabs ====
        ======================================= -->

        <script>

        function TabSelector() {
            var i = 1;

            for (i = 1; i <= 4 ; i++) {
                const y = i;
                $( "#tab-" + i ).click(function() {
                    var backgroundImage = $("#image_" + y).html();
                    $("#Services").css({"background-image": "url('" + backgroundImage + "')"});
                    console.log('clicked on tab-' + y);
                });
            }
        }

        $( document ).ready(function() {
            TabSelector();
        });

        </script>