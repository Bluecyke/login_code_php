<?php

    if(isset($_GET['source'])) {   
        $source = $_GET['source'];
        if($source == contact_page){
            $source = "CONTACT";
        }elseif($source == blog_page){
            $source = "BLOG";
        }elseif($source == skills){
            $source = "SKILLS";
        }elseif($source == post){
            $source = "POST";            
        }
    }else{
            $source = "HOME";
        }
   
?>
   
<section class="page_head wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
    <div class="container">
        <div class="row">
           
            <div class="title_left col-md-8">
                <h1><?php echo $source ?> </h1>
            </div>
            
            
            <!--hidden-sm-down class hides this col on small size windows-->
            <div class="title_right col-md-4 hidden-sm-down">
                <ul class="list-inline">
                    <a target="_blank" href="https://github.com/Bluecyke"><i class="fab fa-github fa-2x"></i></a>
                    <a target="_blank" href="https://www.instagram.com/vegfox28/"><i class="fab fa-instagram fa-2x"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/javiercalderon28/"><i class="fab fa-linkedin fa-2x"></i></a>
<!--                    <a href=""><i class="fab fa-google-plus fa-2x"></i></a>-->
                </ul>
            </div>
            
        </div>
    </div>
</section>
