<footer>
    <?php wp_footer();?>
    <div class="row row-footer">
        <div class="background-opacity"></div>
    	<div class="col-12 no-padding footer" style="background-image: url('<?php echo site_url()?>/wp-content/uploads/2018/01/web-developement.jpg');">
    		<div class="col-2 borodigital-footer-img">
                <img class="" src="http://localhost/borodigitalrelease/wp-content/uploads/2018/01/boro-01.png" alt="">
            </div>
            <div class="col-md-10 offset-md-2 borodigital-footer-text">
                <div class="row">
                    <div class="col-md-4 twitter-footer">
                        <p class="text-center text-section-footer">Twitter</p>
                        <div class="time-line">
                            <a class="twitter-timeline" data-height="300" href="https://twitter.com/boro_digital?ref_src=twsrc%5Etfw">Tweets by boro_digital</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
                    <div class="col-md-4 social-network-footer">
                        <p class="text-center text-section-footer">Social Networks</p>
                        <div>
                            <img src="http://localhost/borodigitalrelease/wp-content/uploads/2018/01/instagram-logo-e1515282809297.png" class="rounded mx-auto d-block img-fluid img-social" alt="">
                            <img src="http://localhost/borodigitalrelease/wp-content/uploads/2018/01/twitter-logo-e1515284178410.png" class="rounded mx-auto d-block img-fluid img-social" alt="">
                            <img src="http://localhost/borodigitalrelease/wp-content/uploads/2018/01/facebook-logo-e1515284250867.png" class="rounded mx-auto d-block img-fluid img-social" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 contact-us-footer">
                        <p class="text-center text-section-footer">Contact Us</p>
                        <p><?php gravity_form( 1, false, false, false, '', false );?></p>
                    </div>
                </div>
            </div>
    	</div>
        <div class="col-12 directions">
            <p class="text-center email-direction"><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top">Send Mail </a>- Caracas, Venezuela</p>
        </div>
    </div>
</footer>
</body>
</html>