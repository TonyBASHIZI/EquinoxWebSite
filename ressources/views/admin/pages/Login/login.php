<?php 
      if (isset($_POST['submit'])) {
        if (!empty($_POST['passe'])) {
            // var_dump($_POST);die();
           $auth = new \Core\Auth\DBAuth(App\App::getInstance()->getDb());
            $res = $auth->login($_POST['tel'], $_POST['passe']);
			// var_dump($_POST);die();
			// var_dump($res);die();
            if ($res) {
				 $_SESSION['admin'];
				 
                 header("location:index.php?p=adminWelcome");
               
            } else {
           
                $error = "<span style='color:red;'>Le numero  ou mot de passe est incorrect</span>";
               
            }
        } else {
        // die("les chamops sont vide");
            $error = "les champs sont vide";
        }
    }
   
   ?>
<div class="wrapper">
    <div class="m-account-w" data-bg-img="../assets/img/account/wrapper-bg.jpg">
        <div class="m-account">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="m-account--content-w" data-bg-img="../assets/img/account/content-bg.jpg">
                        <div class="m-account--content">
                            <h2 class="h2">Don't have an account?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <a href="register.html" class="btn btn-rounded">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="m-account--form-w">
                        <div class="m-account--form">
                            <div class="logo">
                                <img src="../assets/img/logo.png" alt="">
                            </div>
                            <form action="#" method="post">
                                <label class="m-account--title">Login to your account</label>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend"> <i class="fas fa-user"></i>
                                        </div>
                                        <input type="text" name="username" placeholder="Username" class="form-control"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <i class="fas fa-key"></i>
                                        </div>
                                        <input type="password" name="password" placeholder="Password"
                                            class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="m-account--actions">
                                    <a href="index.php?p=welcome" class="btn-link">Forgot Password?</a>
                                    <button type="submit" class="btn btn-rounded btn-info">Login</button>
                                </div>
                                <div class="m-account--alt">
                                    <p><span>OR LOGIN WITH</span>
                                    </p>
                                    <div class="btn-list">
                                        <a href="#" class="btn btn-rounded btn-warning">Facebook</a>
                                        <a href="#" class="btn btn-rounded btn-warning">Google</a>
                                    </div>
                                </div>
                                <div class="m-account--footer">
                                    <p>&copy; 2018 ThemeLooks</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>