<?php include("head.php"); ?>
<body class="external-page sb-l-c sb-r-c">
    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1">

                    <div class="row mb15 table-layout">

                        <div class="col-xs-6 va-m pln">
                            <a href="dashboard.html" title="Return to Dashboard">
                                <img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                            </a>
                        </div>

                        <div class="col-xs-6 text-right va-b pr5">
                            <div class="login-links">
                                <a href="pages_login.html" class="active" title="Sign In">Sign In</a>
                                <span class="text-white"> | </span>
                                <a href="pages_register.html" class="" title="Register">Register</a>
                            </div>

                        </div>

                    </div>

                    <div class="panel panel-info mt10 br-n">

                        <div class="panel-heading heading-border bg-white">
                            <span class="panel-title hidden"><i class="fa fa-sign-in"></i>Register</span>
                            <div class="section row mn">
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                        <span><i class="fa fa-facebook"></i>
                                        </span>Facebook</a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                        <span><i class="fa fa-twitter"></i>
                                        </span>Twitter</a>
                                </div>
                                <div class="col-sm-4">
                                    <a href="#" class="button btn-social googleplus span-left btn-block">
                                        <span><i class="fa fa-google-plus"></i>
                                        </span>Google+</a>
                                </div>
                            </div>
                        </div>

                        <!-- end .form-header section -->
                        <form method="post" action="/" id="contact">
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-7 pr30">

                                        <div class="section row hidden">
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                                    <span><i class="fa fa-facebook"></i>
                                                    </span>Facebook</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                                    <span><i class="fa fa-twitter"></i>
                                                    </span>Twitter</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="#" class="button btn-social googleplus span-left btn-block">
                                                    <span><i class="fa fa-google-plus"></i>
                                                    </span>Google+</a>
                                            </div>
                                        </div>

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                            <label for="username" class="field prepend-icon">
                                                <input type="text" name="username" id="username" class="gui-input" placeholder="Enter username">
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                            <label for="password" class="field prepend-icon">
                                                <input type="password" name="password" id="password" class="gui-input" placeholder="Enter password">
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                    </div>
                                    <div class="col-sm-5 br-l br-grey pl30">
                                        <h3 class="mb25"> You'll Have Access To Your:</h3>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Unlimited Service Tickets</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" class="button btn-primary mr10 pull-right">Register</button>
                                <label class="switch block switch-primary pull-left input-align mt10">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    <label for="remember" data-on="YES" data-off="NO"></label>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <!-- end .form-footer section -->
                        </form>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

 <?php include("footer.php"); ?>
