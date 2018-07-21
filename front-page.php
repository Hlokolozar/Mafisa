<?php get_header()?>
   <!--courses start-->
   <section class="u-PaddingBottom10 u-xs-PaddingTop10 u-xs-PaddingBottom70">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h1 class=" u-MarginBottom10">Our Courses</h1>
                </div>
                <div class="col-md-8 col-md-offset-2 col-sm-12 ">
                    <p class="u-LineHeight2 text-lg">Empower yourself, empower others.</p>
                </div>
            </div>
            <div class="row col-md-12  u-MarginTop10 u-xs-MarginTop50">
                <div class="col-md-4 col-sm-6 u-MarginBottom50 flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="u-PaddingRight10 u-sm-PaddingLeft5 u-sm-PaddingRight5 flipper">
                        <div class="u-BoxShadow100 u-BorderRadius4 front">
                            <div class="Blurb Blurb--wrapper">
                         <?php    $service1 = get_page_by_path('service1');
                                   $content= $service1->post_content;
                                   $content = apply_filters('the_content', $content);
                                   $content = str_replace(']]>', ']]>', $content); ?>
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service1->post_title?></h3>
                                <p>
                                 
                                </p>
                                <p class="u-MarginTop50 u-MarginBottom0">
                                    <a class="btn btn-gradient btn--alien" href="#" role="button">Book This Course <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="u-BoxShadow100 u-BorderRadius4 back">
                            <div class="Blurb Blurb--wrapper">
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service1->post_title?></h3>
                                <p>
                                 <?php echo $content?>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 u-MarginBottom50 flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="u-PaddingLeft5 u-PaddingRight5 flipper">
                        <div class="u-BoxShadow100 u-BorderRadius4 front">
                            <div class="Blurb Blurb--wrapper" style="background: linear-gradient(310deg,#457aff,#30d4b9)">
                         <?php   $service2 = get_page_by_path('service2');
                                   $content= $service2->post_content;
                                   $content = apply_filters('the_content', $content);
                                   $content = str_replace(']]>', ']]>', $content);?>
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service2->post_title?></h3>
                                <p>
                                   
                                </p>
                                <p class="u-MarginTop50 u-MarginBottom0">
                                    <a class="btn btn-primary" href="#" role="button">Book This Course <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="u-BoxShadow100 u-BorderRadius4 back">
                            <div class="Blurb Blurb--wrapper" style="background: linear-gradient(310deg,#457aff,#30d4b9)">
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service2->post_title?></h3>
                                <p>
                                   <?php echo $content?>
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 u-MarginBottom50 flip-container" ontouchstart="this.classList.toggle('hover');">
                    <div class="u-PaddingLeft10 u-sm-PaddingLeft5 u-sm-PaddingRight5 flipper">
                        <div class="u-BoxShadow100 u-BorderRadius4 front">
                            <div class="Blurb Blurb--wrapper">
                                <?php 
                                   $service3 = get_page_by_path('service3');
                                   $content= $service3->post_content;
                                   $content = apply_filters('the_content', $content);
                                   $content = str_replace(']]>', ']]>', $content);
                                ?>
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service3->post_title?></h3>
                                <p>
                                    
                                </p>
                                <p class="u-MarginTop50 u-MarginBottom0">
                                    <a class="btn btn-gradient btn--alien" href="#" role="button">Book This Course <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="u-BoxShadow100 u-BorderRadius4 back">
                            <div class="Blurb Blurb--wrapper">
                                <h3 class="Blurb__hoverText u-MarginTop0"><?php echo $service3->post_title?></h3>
                                <p>
                                    <?php echo $content?>
                                </p>
                                <p class="u-MarginTop50 u-MarginBottom0">
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
              
                    
            </div>
              <div class="clearfix"></div>
                <div class="col-md-12 text-center u-MarginTop30">
<!--                    <a href="#" class="btn btn-primary text-uppercase">Get Started</a>-->
                </div>
        </div>
    </section>
    <!--courses end-->
        <!--promo start-->
        <section class="u-PaddingTop0 u-PaddingBottom100 u-xs-PaddingBottom50">
        <div class="container">
            <div class="Blockquote Blockquote--borderLeft5 u-BoxShadow40 u-BorderRadius4">
                <div class="row u-FlexCenter u-xs-Block">
                    <div class="col-sm-9">
                        <h3 class="u-MarginTop0 u-MarginBottom10 u-Weight700">Interesting Topics</h3>
                        <div class="row">
                            <div class="col-md-8">
                                <p class="u-Margin0">Be part of a great change, enlighten the world and share your views.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 text-right text-left--xs u-xs-MarginTop20">
                        <a class="btn btn-gradient btn--alien" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--promo end-->

<?php get_footer()?>