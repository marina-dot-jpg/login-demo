<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css" media="all">
</head>
<div class="topbar"></div>
<div class="container">
    <div class="navbar">
        <div class="item"><a href="/login-demo/">Home</a></div>
        <div class="item"><a href="/login-demo/register/">Register</a></div>
        <div class="item"><a href="/login-demo/login/">Login</a></div>
    </div>
    <div class="form">
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>

                <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="textbox" id="username" name="username" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="textbox" id="password" name="password" placeholder="Password" />
                    </div>
                    <p style="font-size:10px; margin-left:10px;"><a href="../forgot-password/">Forgot password?</a><br>
                        <br><a href="../forgot-username/">Forgot username?</a>
                    </p>

                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
        </form>
    </div>
</div>
</body>

</html>