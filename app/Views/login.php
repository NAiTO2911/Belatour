<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 
    <title>Login</title>
  </head>
  <body class="login-page sidebar-collapse">
    <div class="page-header header-filter" style="background-image: url('<?php echo base_url() ?>/assets/img/bg-literasi.png'); background-repeat: no-repeat; background-size: contain; background-position: center bottom;">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login text-right" style="min-height: 275px;">
                <form class="form" method="post" action="<?php echo base_url() ?>/instansi/login">
                <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">Masuk</h4><div></div>
                </div>
                <div class="card-body">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">user_id</i>
                        </span>
                    </div>
                    <input type="user_id" class="form-control" name="user_id" placeholder="user_id...">
                    </div>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password...">
                    </div>
                    <p class="card-text ">Belum punya akun? <a href="signup">Daftar sekarang</a></p>
                </div>
                <div class="footer text-center">
                    <input type="submit" class="btn btn-primary btn-link btn-wd btn-lg" value="Ayo masuk!">
                </div>
                </form>
            </div>
            </div>
        </div>
        <?php
        use Config\Services;
            $session = Services::session();
            $errors = $session->getFlashdata('errors');
            if (isset($errors)) {
            echo '<div class="alert alert-danger">
            <div class="container">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
            <ul>';
            foreach ($errors as $error) :
                echo '<li>'.esc($error).'</li>';
            endforeach;
            echo '</ul>
            </div></div>';
            } else {
            echo $session->getFlashdata('msg');
            }
        ?>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url() ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>/assets/js/plugins/moment.min.js"></script>
    </body>
</html>