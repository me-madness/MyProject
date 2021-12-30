<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Login Form</h1>
        <form action="login.php" method="POST">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                <label for="exampleInputUsername" class="col-form-label">User Name</label>
                <br>
                <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text"></div>
            </div>
            <!--User Name: <input type="text" name="username">-->
            <br>
            <!--Password form-->
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-auto">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                    </span>
                </div>
            </div>
            <!--Password: <input type="password" name="password">-->
            <br>
            <button type="submit" class="btn btn-primary">Log in</button> 
        </form>
    </body>
</html>
