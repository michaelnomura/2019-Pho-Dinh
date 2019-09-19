<?php include 'includes/header.php';?>
<section>
    <div id='content'>
    <h2><?=$myPageID?></h2>
    <?php
    /*
    * Below are 2 different forms to be re-used       
    * 
    * Only use one at a time, comment out the other 1!       
    *
    */
    include 'includes/simple.php'; #demonstrates a simple contact form
    //include 'includes/multiple.php';#demonstrates multiple form elements
    ?>
    <p class="clear-recaptcha"></p>
    <!-- END HTML FORM -->
        
    <script type="text/javascript"
    src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
    </div>
    </section>

<!--Start Aside-->   
<aside>
    <div id='side'>
    <p>Monthly Specials!</p>
    <img src='images/phoSoup.jpg' alt='Beef Pho' style="width:100%">
    </div>
    </aside>

<!--Start Footer-->
<?php include 'includes/footer.php';?>
