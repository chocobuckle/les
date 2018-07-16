


        <!-- =====================================
        ==== Start Sectors Tabs -->

    

        <section class="serv-tabs section-padding bg-img" id="Sectors" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Sectors
                        </h4>
                    </div>

                    <div class="row">


                    <?php
                    $sectors = get_field('sectors', 'options');	
                    if( $sectors ): 
                            $image = $sectors['image'];
                            $text = $sectors['text'];
                        ?> 

                        <div class="col-md-6">
                            <img src="<?php echo $image ?> " alt="">
                        </div>
                        <div class="col-md-6">
                            <p><?php echo $text ?> </p>
                        </div>

                    <?php endif; ?> 


                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Sectors Tabs ====
        ======================================= -->

    