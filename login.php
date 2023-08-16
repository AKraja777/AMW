<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap/bootstrap-icons-1.9.1/bootstrap-icons.css" />
    <link rel="stylesheet" href="login.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="background-container">
        <div class="fullscreen-bg">
            <div class="background-color-layer"></div>
            <img src="img/login/background.png" alt="graphic-logo" class="background-image" />
            <img src="img/login/Gobal.png" alt="graphic-logo" class="custom-image" />
            <img src="img/logo.png" alt="logo" class="logo-image"/>
        </div>
    </div>
    <div class="welcome-text">
        <p>Welcome to</p>
    </div>
    <div class="ams-text">
        <p>AMS SOFT SOLUTION</p>
    </div>
    <div class="log-text">
        <p>Please Login to Web GIS Your E-mail Address</p>
    </div>
    <div class="login-text">
        <p>Login</p>
    </div>
    <div class="forgot-text">
        <p>Forget password?</p>
    </div>
    <div class="logo-text">
        <img src="img/logo.png" alt="logo"/>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="form-group2 mb-5">
                    <input type="text" id="name" name="name" placeholder="E-mail Address" class="form-control form-control-lg"required />
                </div>
                <div class="form-group1 mb-5">
                    <input type="text" id="mobile" name="mobile" placeholder="Password" class="form-control form-control-lg" required />
                </div>
            </div>
        </div>
        <div class="form-group mb-5">
            <button type="button" id="mobile" name="mobile"  class="form-control form-control-lg">Login</button>
        </div>
    </div>
</body>
</html>
