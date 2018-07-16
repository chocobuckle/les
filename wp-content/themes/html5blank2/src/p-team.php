
         <!-- =====================================
        ==== Start Team -->
        <section class="team" id="OurPeople" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    
                    <div class="section-head col-sm-12">
                        <h4>
                            <span>About</span><br>
                            Us
                        </h4>
                    </div>

                   
                        
                        <?php
                        if( have_rows('member',  'options')):
                            while ( have_rows('member', 'options')) : the_row();
                                $picture_teammember = get_sub_field('picture_teammember', 'option');
                                $picture_teammember_colored = get_sub_field('picture_teammember_colored', 'option');
                                $name = get_sub_field('name', 'option');
                                $position_title = get_sub_field('position_title', 'option');
                                $description = get_sub_field('description', 'option');
                                ?>
                                <div class="titem text-center col-md-3">
                                    <div class="team-img">
                                        <img src="<?php echo $picture_teammember ?>" alt="">
                                        <img class="disabled" src="<?php echo $picture_teammember_colored ?>" alt="">
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
                                                <a href="<?php echo $linkedin ?>"><i style="font-size: 24px;" class="icofont icofont-brand-linkedin"></i></a>  
                                                <a href="mailto:<?php echo $email ?>"><i style="font-size: 24px;" class="icofont icofont-email"></i> </a> 
                                                <a href="tel:<?php echo $email ?>"><i style="font-size: 24px;" class="icofont icofont-phone"></i> </a> 

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
        </section>

        <!-- End Team ====
        ======================================= -->