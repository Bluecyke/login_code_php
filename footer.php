<?php 
//RECEIVING THE SUBMITTED FORM
if($_POST['status'] == 'footer_page') {
    //the recipient's email adresss
    $to = "jvrcalderon@gmail.com"; 
    //assigns variables based on the 'name' of the inputs on the form, use wordwrap() for subject if lines are longer than 70 characters
    $subject = "Vegan Fox Website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $text = $_POST['text-body'];
    //email body, /n are line breaks. Dont forget to add the dots to concatinate
    $body = "From: " . $email . "\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Body: " . $text . ".";
    //email where it's coming from
    $headers = "FROM: " . $_POST['email'];

    //Checks for PHP injection in the email address   
   if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email ) || (strlen($email)) == 0){
    ?>  <script>
            alert("ERROR: Please enter a valid email address");
    
        </script>
    <?php
    //Checks for PHP injection in the name field, Quotation Marks need to be around the 0 or elese it won't work!        
    }elseif(!preg_match("/^[a-zA-Z ]*$/", $name) || (strlen($name)) == 0) {
    ?>  <script>
            alert("ERROR: Please only letters and white space allowed in the Name Field, or the name field was empty");
        </script>
    <?php
    } else {
    //send email (recipient, subject line, body, header)
    mail($to, $subject, $body);
    ?>  <script>
            alert("EMAIL WAS SENT, THANK YOU!");
        </script>
    <?php
   }//.else
}//.if
?>

<footer class="footer wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img class="fox-footer" src="images/fox3.png" alt="">
              <a href="" class="footer-contact" data-toggle="modal" data-target="#modal"><i class="fas fa-envelope fa-2x"></i></a>
               <ul class="social_media_buttons list-inline">
                    <a target="_blank" href="https://github.com/Bluecyke"><i class="fab fa-github-alt"></i></a>
                    <a target="_blank" href="https://www.instagram.com/vegfox28/"><i class="fab fa-instagram"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/in/javiercalderon28/"><i class="fab fa-linkedin-in"></i></a>
                </ul>
                
                
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Contact Me</h2>  
      </div>
      <div class="modal-body" style="text-align:center;">
            <form role="form" action="" method="post" id="login-form" autocomplete="off">
             <!--HIDDEN-->
            <input type="hidden" name="status" value="footer_page">            
             <!--FULL NAME-->
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter full name" required>
                <small id="emailHelp" class="form-text text-muted">Only letters and white space allowed</small>
              </div> <!-- /.full name -->
              <!--EMAIL-->
              <div class="form-group">
                <label for="email-address">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="myemail@something.com" required>
                <small id="emailHelp" class="form-text text-muted">I will never share your email with anyone else</small>
              </div> <!-- /.email --> 
              <!--RADIO BUTTONS-->
              <!--TEXT AREA-->
              <div class="form-group">
                <textarea class="form-control" name="text-body" rows="10" required placeholder="I am writting to you regarding...."></textarea>
              </div><!--/.text area-->
            <!--SUBMIT BUTTON-->
                <button type="submit" class="btn btn-block btn-primary" name="submit-email">Submit</button>
            </form>
      </div>
      <div class="modal-footer">
       <div class="col-8" style="text-align:left;">
        <span><i class="far fa-clock"></i> Date here </span>
        </div> 
        <div class="col-4" style="text-align:right;"><button type="button" class="read_more_btn btn" data-dismiss="modal">Close</button>
        </div> 
      </div>
    </div>
  </div>
</div>                 
                
                
        </div>
        <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->

<div class='row location'>
    <div class='col-md-12'>
       <p>Chicago, IL</p>
<!--       <img src="/images/chicago-skyline.png" alt="">       -->
    </div>
    <!-- /.col-md-12 -->
</div>      
            
<div class='row'>
    <div class='col-md-12'>
        <p>&copy; 2017 Designed by Javier Calderon-Morales</p>
    </div>
    <!-- /.col-md-12 -->
</div>        
<!-- /.row --> 
</div>     
<!--/.container-->
    
</footer>

