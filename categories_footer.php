<section id="categories-footer" class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
    <div class="container">
        <div class=" row"> 
        
<div class="col-md-7">    
    <h4>Categories:</h4>
    <ul class="list-unstyled">
        <!-- RESPONSIVE MENU ITEMS -->
        <?php        
            $query = "SELECT * FROM blog_categories";
            $select_blog_categories_sidebar = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_blog_categories_sidebar)) {
                $blog_categories = $row['blog_category_name'];
                $blog_category_id = $row['blog_category_id'];

                echo    "<li>
                        <a href='categories.php?category=$blog_category_id '>{$blog_categories}
                        </a>
                        </li>";
            }       
        ?>   
    </ul>
</div>
            
<div class="col-md-5">
    <!-- search Form -->
    <form action="search.php" method="post">
        <div class="input-group">
            <input name="search" type="text" class="form-control" placeholder="php...">
            <span class="input-group-btn sidebar_button"><button class="btn btn-block" name="submit" type="submit"><i class="fa fa-search" ></i></button></span>
        </div>
    </form>
</div>              
            
        </div>
    </div>
</section>