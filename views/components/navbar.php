<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://avatars.githubusercontent.com/u/28140896?s=200&v=4">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-menu" id="navbar1">
            <ul class="navbar-nav col-md-5 fw-500 fb-fc ms-lg-5 ms-md-0 ms-sm-0">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/Results.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/About%20Us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/Contact.php">Contact</a>
                </li>
            </ul>
            <form class="search-form d-md-block d-lg-none w-50 my-sm-4 my-md-4">
                <div class="input-form">
                    <label class="input-label w-100">
                        <input type="search" class="form-control" placeholder="Search"/>
                    </label>
                </div>
            </form>

            <ul class="navbar-nav d-flex flex-row ms-auto">
                <li class="nav-item me-3 me-lg-0">
                    <button type="button" class="log-in-btn" id="showLogin">Log In</button>
                </li>
                <div class="popup ">
                    <div class="close-btn">&times;</div>
                    <form action="contactForm.php" method="post">
                        <div class="form">
                            <h3>Log In</h3>
                            <div class="form-element d-flex flex-column">
                                <label for="email">Username</label>
                                <input type="text" name="uname" id="email" placeholder="Enter username">
                            </div>
                            <div class="form-element d-flex flex-column">
                                <label for="password">Password</label>
                                <input type="text" id="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="form-element">
                                <input type="checkbox" id="remember-me">
                                <label for="remember-me">Remember me</label>
                            </div>
                            <div class="form-element">
                                <button>Sign In</button>
                            </div>
                            <div class="form-element">
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <li class="nav-item me-3 me-lg-0 ">
                    <button type="button" class="register-btn">Register</button>
                </li>
            </ul>
        </div>
    </div>
</nav>