<?php include 'templates/header.php'; ?>
<div class="body">
    <h2> Employee Login </h2>
    <form id="login" action='login/login_u.php' method="post" accept-charset="UTF-8">
        <fieldset>
            <input type="hidden" name="submitted" id="submitted" value="1" />
            <label for="username">Email: </label>
            <input type="text" name="username" id="username" maxlength="255" />
            <label for="password"> Password </label>
            <input type="password" name="password" id="password" maxlength="255" />
            <input type="submit" name="Submit" value="Submit" />
        </fieldset>
    </form>
</div>
<?php include 'templates/footer.php'; ?>