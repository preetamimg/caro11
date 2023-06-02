<?php include 'wait-loader.php' ?>




<!-- Optional JavaScript -->
<script src="<?php echo f_path ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo f_path ?>assets/js/buttons.min.js"></script>



<?php if ((f_path == $actual_link) || (f_path . "index.php" == $actual_link)) { ?>
    <script src="<?php echo f_path ?>assets/libs/OwlCarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?php echo f_path ?>assets/js/index.min.js"></script>


<?php } else if (f_path . "setup.php" == $actual_link) { ?>
    <script src="<?php echo f_path ?>assets/js/setup.min.js"></script>


<?php } ?>

<script src="<?php echo f_path ?>assets/js/app.min.js"></script>


</body>

</html>