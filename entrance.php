<DOCTYPE.html>
    <html>
        <head>
            <title>Sign in/Sign up Area</title>
            <link rel="stylesheet" href="desu.css">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css'integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />;
      
        </head>
        <body>
        <!-- main -->
            <div class="container">
                <div class="forms-container">
                    <div class="signin-signup">
                        <form action='home.php' class="sign-in-form" method="post">
                            <h2 class="title">Sign in</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN in -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' placeholder="Password">
                            </div>
                            <input type="submit" class="btn solid" value="Login">
                            <p class="social-text">Or Sign in with social platform</p>
                            <div class="social-media">
 <!-- SOCIAL ICONS -->          <a href="#" class="social-icon"> 
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </form>
                        </div>

                        <div class="signup-signup">
                        <form action='registercon.php' class="sign-up-form" method="post">
                            <h2 class="title">Sign Up</h2>
                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='fullname' placeholder="Fullname">
                            </div>
        <!-- SIGN uP -->
                            <div class="input-field">
                                <i class="fas fas fa-envelope"></i>
                                <input type="email" name='email' placeholder="Email">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-child"></i>
                                <input type="text" name='age' placeholder="age">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-home"></i>
                                <input type="text" name='add' placeholder="Address">
                            </div>

                            <div class="input-field">
                                <i class="fas fas fa-user"></i>
                                <input type="text" name='uname' placeholder="Username">
                            </div>
        <!-- SIGN up -->
                            <div class="input-field">
                                <i class="fas fas fa-lock"></i>
                                <input type="password" name='pass' placeholder="Password">
                            </div>

                            <input type="submit" class="btn solid" value="Login">
                            <p class="social-text">Or Sign Up with social platform</p>
                            <div class="social-media">
 <!-- SOCIAL ICONS -->          <a href="#" class="social-icon"> 
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                    </div>
                <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content">
                            <h3>New Here?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit autem iure nemo accusamus laborum? Soluta laborum sit magnam ipsam odio.
                            </p>
                            <button class="btn transparent" id="sign-up-button">Sign up</button>
                        </div>
                        <img src="https://www.slazzer.com/downloads/bceef24c-9a9e-11ee-a7fb-42010a800009/gin_prev_ui.png" alt=""  class="image">
                    </div>
                    <div class="panel right-panel">
                    <div class="content">
                            <h3>Already have an account?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit autem iure nemo accusamus laborum? Soluta laborum sit magnam ipsam odio.
                            </p>
                            <button class="btn transparent" id="sign-in-button">Sign in</button>
                        </div>
                        <img src="https://www.slazzer.com/downloads/bceef24c-9a9e-11ee-a7fb-42010a800009/gin_prev_ui.png" alt="" class="image">
                    </div>
                </div>
            </div>
            <script src="function.js"></script>
        </body>
    </html>