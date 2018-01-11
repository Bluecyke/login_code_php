<!-- Blog Sidebar Widgets Column -->
<div class="sidebar col-md-4 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1s">
    
    
    <!-- Blog Search Well -->
    
    <div class="search row">
        <!-- Login Form -->
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control" placeholder="Javascript libraries...">
                <span class="input-group-btn sidebar_button">
                <button class="btn btn-block" name="submit" type="submit"><i class="fa fa-search" ></i></button>
                </span>
            </div>
            <!-- /.input-group -->
        </form>
        <!-- /.search form -->
    </div>
    <!-- /.search .row -->
    
    
    <!-- Blog Categories Well -->
    
        <div class="categories row">
            <h1>Categories</h1><br>
                <ul class="list-unstyled">
                <hr align="left" width="100%">
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
        </div> <!-- /.categories .row -->
    
   
   
    <!-- Side Widget Well -->



    <!-- /.column -->


</div>
<!-- /.column -->