<html>
    
    <head>
        <link rel="stylesheet" href="styles/style.css" />
        <title> SlowPayroll </title>
    </head>
    <body>
        <nav>
            <div class="homeLink">
                <a href="./index.php"><img src="imgs/home.png" alt="home icon" /></a>
            </div>
            <div class="headerLinks">
                <?php if($isLoggedInEmployee): ?>
                    <a href="">Overview</a>
                    <a href="">History - Hours</a>
                    <a href="">History - Salary</a>
                    <div class="loginSection">
                        <a href="">Logout</a>
                    </div>
                <?php endif; ?>
                <?php if($isLoggedInEmployer): ?>
                    <a href="">View Employees</a>
                    <a href="">Payroll Overview</a>
                    <a href="">Hours Overview</a>
                    <div class="loginSection">
                        <a href="">Logout</a>
                    </div>
                <?php endif;?>
                <?php if(!$isLoggedInEmployer && !$isLoggedInEmployee): ?>
                    <div class="loginSection">
                        <a href="">Login - Employee</a>
                        <a href="employer_login.php">Login - Employer</a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>