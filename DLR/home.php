

     <div class="owl-carousel homepage-slider-area">
        <div class="single-slider slide-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="slider-text">
                        <h2>Welcome To The <br>
                            DLR  Platform</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slide-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="slider-text">
                            <h2>Welcome To The <br>
                            DLR  Platform</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div class="testimonial-area">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="owl-carousel testimonial-slider">


                        <?php 
                        $sql="select name, email, message from feedback";
                         $table = mysqli_query($cn, $sql);
                         ?>

                            <?php while ($row = mysqli_fetch_assoc($table)) { ?>
                            <div class="testimonial-single-slider">
                                <p><?php echo htmlentities($row["message"]); ?></p>
                                <p class="name"><?php echo htmlentities($row["name"]); ?></p>
                            </div>

                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    