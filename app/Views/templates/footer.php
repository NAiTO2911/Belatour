        <!-- Footer Mini
		============================================= -->
		<footer id="footer-mini">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="logo-footer" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/images/files/logo.png" alt=""></a>
						<div class="copyrights-message"><?php echo date("Y"); ?> © <span>BelaTour</span>. All rights reserved.</div>
						<a href="#" class="scroll-top-btn"><i class="fa fa-angle-up"></i></a>
					</div><!-- .col-md-12 end -->
				</div><!-- .row end -->
			</div><!-- .container end -->

		</footer><!-- #footer-mini end -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="auth/login" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Login">
			<input class="btn btn-danger btn-block" data-dismiss="modal" value="Cancel">
          </form>
        </div>
        <div class="modal-footer">
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>

	</div><!-- #full-container end -->

	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

	<!-- External JavaScripts
	============================================= -->
	<script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jRespond.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.fitvids.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.stellar.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/simple-scrollbar.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/superfish.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/scrollIt.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.waitforimages.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/google-map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA1vAzZpKh9vsQvF3e4MeClkyYB-MWtnA&callback=initMap"></script>
	<script src="<?php echo base_url() ?>/assets/js/functions.js"></script>

</body>
</html>
