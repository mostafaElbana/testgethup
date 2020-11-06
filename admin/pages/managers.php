
<body class="login-bg">
<div class="login-body">
    <div class="login-heading">
        <h1>Sign up</h1>
    </div>
    <div class="login-info">
        <form action="controllers/AddUserController.php" role="form" method="post">
            <input type="text" class="user" name="username" placeholder="UserName" required="">
            <input type="text" class="user" name="email" placeholder="Email" required="">
            <input type="password" name="password" class="lock" placeholder="Password">
            <input type="password" name="cpassword" class="lock" placeholder="Confirm Password">
            <input type="submit" name="submitUser" value="Sign up">

        </form>
    </div>
</div>

