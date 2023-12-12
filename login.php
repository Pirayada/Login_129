<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script> -->


    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="js/login.js"></script> -->
</head>

<body>

    <h1 class="text-center">Sign in</h1>
    <div class="form-login">
        <img src="img/log-in.png" height="300">
        <form>
            <div class="form-floating  mb-3 ">
                <input type="text" class="form-control" id="username" placeholder="Username">
                <label for="username">
                    <i class="fa fa-address-book"></i> Username
                </label>
            </div>
            <div class="form-floating  mb-3 ">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <label for="password">
                <i class="fa fa-lock"></i> Password
                </label>
            </div>
            <br>
            <button type="button" class="btn btn-primary w-100 ">Login</button>

        </form>
    </div>

</body>

</html>