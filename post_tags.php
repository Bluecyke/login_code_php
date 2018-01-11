<div class="col-md-8">
    
<?php

    if(isset($_POST['submit'])) {

    $search = $_POST['search'];

    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";

    $search_query = mysqli_query($connection, $query);

    if(!$search_query) {
        die("query failed". mysqli_error($connection));
    }

    $count = mysqli_num_rows($search_query);

    if($count == 0) {
        echo "<h1>NO RESULTS</h1>";
    } else {

        while($row= mysqli_fetch_assoc($search_query)) {

            $post_title = $row['post_title'];
            $post_author = $row['post_author'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];

?><!-- /.php -->

    <!--RESPONSIVE Blog Posts -->
    <h2>
        <?php echo $post_title ?>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post_author ?></a>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ?></p>
    <hr>
    <img class="img-fluid" 
    src="images/<?php echo post_image;?>" alt="">
    <hr>
    <p> <?php echo $post_content ?> </p>
    <a class="btn btn-danger" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<?php 

        }/* /.while loop */                      
    } /* /.else */ 
    } /* /.if */ 

?><!-- /.php -->
           
</div> <!-- /.col -->