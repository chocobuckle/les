
         <!-- =====================================
        ==== Start Team -->
        <section class="team section-padding" id="OurPeople">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            People
                        </h4>
                    </div>

                    <div class="owl-carousel owl-theme col-sm-12">
                        
                        <?php
                        if( have_rows('member',  'options')):
                            while ( have_rows('member', 'options')) : the_row();
                                $picture_teammember = get_sub_field('picture_teammember', 'option');
                                $name = get_sub_field('name', 'option');
                                $position_title = get_sub_field('position_title', 'option');
                                $description = get_sub_field('description', 'option');
                                ?>
                                <div class="titem text-center">
                                    <div class="team-img">
                                        <img src="<?php echo $picture_teammember ?>" alt="">
                                    </div>
                                    <div class="info">
                                        <h6><?php echo $name ?></h6>
                                        <span><?php echo $position_title ?></span>
                                        <p><?php echo $description ?></p>
                                        <div class="social">
                                            <?php if( have_rows('social',  'options')): 
                                                while ( have_rows('social',  'options')) : the_row(); 
                                                $linkedin = get_sub_field('linkedin', 'option');
                                                $telephone = get_sub_field('telephone', 'option');
                                                $mobile = get_sub_field('mobile', 'option');
                                                $email = get_sub_field('email', 'option');
                                                $vcard = get_sub_field('vcard', 'option');
                                                ?> 
                                                <a href="<?php echo $linkedin ?>"><i class="icofont icofont-brand-linkedin"></i></a>       
                                            <?php endwhile;
                                                else :
                                                    // no rows found
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    // no rows found
                                endif;
                            ?>
                        
                    </div>

                </div>
            </div>
        </section>

        <!-- End Team ====
        ======================================= -->