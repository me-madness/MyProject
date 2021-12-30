<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registry Form</title>
    </head>
    <body>
        <h1>Registry Form</h1>
        <form action="login_form.php" method="POST">
            <form action="login.php" method="POST">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="exampleInputUsername" class="col-form-label">User Name</label>
                        <br>
                        <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                        <div id="usernameHelp" class="form-text">We'll never share your username.</div>
                    </div>                    
                    <br>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                            <span id="passwordHelpInline" class="form-text">
                                Must be 8-20 characters long.
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <br>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button> 
                        </form>
                        <?php
                        ?>
                        </body>
                        </html>
