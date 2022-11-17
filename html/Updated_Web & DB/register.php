<html>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com.bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <head>
        <body>
            <section id="nav-bar">
                        <nav class="navbar navbar-expand-lg bg-dark">
                            <div class="container-fluid">
                            <a class="navbar-brand" href="#">ANYX</a>
                            <a class="navbar-brand" href="#"><img src= "Logo2.png"></a>

                            <button class="navbar-toggler" type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                            aria-label="Toggle navigation" back>
                            <span class="navbar-toggler-icon"> 
                                <i class="bi bi-arrow-bar-down"></i>
                            </span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="nav-link"  href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sponsors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Team</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="http://10.0.0.107/register.php">Sign up</a> -->
                                    <!-- <button onclick="window.location.href = 'http://172.25.81.17/index.php';">Sign Up</button> -->
                                </li>
                                </ul>
                            </div>
                            </div>
                        </nav>
                    </section>
            <section>
                <form method="post" action="" name="signup-form">
                <div class="form-element d-flex justify-content-center">
                <label>Username</label>
                <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                </div>
                <div class="form-element d-flex justify-content-center">
                <label>Phonenumber</label>
                <input type="email" name="email" required />
                </div>
                <div class="form-element d-flex justify-content-center">
                <label>Password</label>
                <input type="password" name="password" required />
                </div>
                <div class="text-center">
                <button type="submit" name="register" value="register" class="btn btn-dark">Register</button>
                </div>
                </form>
            </section>
        </body>
    </head>
</html>

