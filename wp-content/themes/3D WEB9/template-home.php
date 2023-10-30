<?php
/*Template Name: Homepage*/
?>


<?php
$page1_text = get_field('page1_text');
$page1_text2 = get_field('page1_text2');
$page1_text3 = get_field('page1_text3');
$page1_text4 = get_field('page1_text4');
$page2_text = get_field('page2_text');
$page2_text2 = get_field('page2_text2');
$page2_img = get_field('page2_img');
$page3_text = get_field('page3_text');
$page3_text1 = get_field('page3_text1');
$page4_text = get_field('page4_text');
$page4_text2 = get_field('page4_text2'); 
$page4_text3 = get_field('page4_text3');
$page5_text = get_field('page5_text');
$page5_text1 = get_field('page5_text1');
$page5_text2 = get_field('page5_text2');
$page5_second = get_field('page5_second');
$page5_second2 = get_field('page5_second2');
$page5_second3 = get_field('page5_second3');
$page5_second4 = get_field('page5_second4');
$page5_second5 = get_field('page5_second5');
$page5_second6 = get_field('page5_second6');
$page6_text = get_field('page6_text');
$page6_text1 = get_field('page6_text1');
$page6_text2 = get_field('page6_text2');
$page6_text3 = get_field('page6_text3');
$page6_text4 = get_field('page6_text4');
$page6_text5 = get_field('page6_text5');
?>


<?php
get_header();
?>

<div class="main">
        <div class="page1">
            <div class="page1-text">
                <h1><?php echo $page1_text ?> <br>
                     <?php echo $page1_text2 ?></h1>
                     <p><?php echo $page1_text3?> <br> <?php echo $page1_text4?></p>
            </div>
            <canvas></canvas>
        </div>

        <div class="page2">
            <div class="page2-text"><h2><?php echo $page2_text ?> <br>
                 <?php echo $page2_text2?></h2></div>

                 <div class="page2-img"><img src="<?php echo get_template_directory_uri() ?>/image/ring.webp" alt=""></div>
        </div>

        <div class="page3">
            <div class="page3-text"><h6><?php echo $page3_text ?></h6></div>
            <div class="page3-text2"><p><?php echo $page3_text1 ?></p></div>
        </div>
        <div class="page4">
            <div class="page4-text"><h6><?php echo $page4_text ?></h6></div>
            <div class="page4-text2"><p><?php echo $page4_text2 ?><br> <br>   <?php echo $page4_text3 ?>
            </p></div>

            
        </div>
    
        <div class="page5">
            <canvas></canvas>
            <div class="page5-text">
                <h2><?php echo $page5_text ?> <span><?php echo $page5_text1 ?></span> <span><?php echo $page5_text2 ?></span></h2>

                <div class="text-flex5">
                    <div class="page5-text2">
                        <h6><?php echo $page5_second ?></h6>
                        <div class="h5"><?php echo $page5_second2 ?></div>
                    </div>
                    <div class="page5-text2">
                        <h6><?php echo $page5_second3?></h6>
                        <div class="h5"><?php echo $page5_second4 ?></div>
                    </div>
                    <div class="page5-text2">
                        <h6><?php echo $page5_second5 ?></h6>
                        <div class="h5"><?php echo $page5_second6 ?></div>
                    </div>
                </div>

                
            </div>
        </div>
        <div class="page6">
            
            <div class="page6-text">
                    <h6><?php echo $page6_text ?></h6>
    
                    <h2><?php echo $page6_text1 ?><br> <?php echo $page6_text2 ?> <br><?php echo $page6_text3 ?><br><?php echo $page6_text4 ?></h2>
                </div>
                <div class="underline"><?php echo $page6_text5 ?></div>
            
          
        </div>

        

        <?php
get_footer();
?>
    </div>


