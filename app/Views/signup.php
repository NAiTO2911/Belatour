        <!-- Content
		============================================= -->
		<section id="content">

            <div id="content-wrap">

                <!-- === Detail Paket =========== -->
				<div class="container">
							<!-- Three columns of text below the carousel -->
							<div class="row" style="padding: 16px;">

                                <div class="col-sm-4">
                                    <h2>Sign Up</h2>
                                    <p>To use your account properly.</p>

                                    <form action="/auth/signup" method="post">
                                        <div class="input-group" style="margin-bottom: 8px;">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                            <input id="full_name" type="text" class="form-control" name="full_name" placeholder="Full Name">
                                        </div>
                                        <div class="input-group" style="margin-bottom: 8px;">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="input-group" style="margin-bottom: 8px;">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input id="username" type="text" class="form-control" name="username" placeholder="Username">
                                        </div>
                                        <div class="input-group" style="margin-bottom: 8px;">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input id="phone_number" type="number" class="form-control" name="phone_number" placeholder="Phone Number">
                                        </div>
                                        <div class="input-group" style="margin-bottom: 8px;">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn small purply hover-dark" style="width: 100%;" value="Register"/>
                                    </form>
                                </div>
                            
                                <div class="col-sm-8">
                                    <p>Already have an account?</p>
                                    <a href="/login">Login Here!</a><br>

                                    <img style="display: block; padding: 32px; margin-left: auto; margin-right: auto; width: 80%; height: 700dp" src="<?php echo base_url() ?>/images/bus.png"/>

                                    <b>Pro Tip:</b>
                                    <p>New Jetbus 3+ Super Double Decker (SDD)<br>can carry up to 75 Person.</p>
                                </div>

                            </div>
                        </div>

            </div><!-- #content-wrap -->

		</section><!-- #content end -->