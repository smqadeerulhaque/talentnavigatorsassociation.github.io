<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Login Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h3> PLEASE LOGIN HERE </h3>
                    </div>

                    <?php
                    
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert"><?php echo $_GET['Empty']?></div>
                    <?php
                        }
                    ?>


                    <?php
                    
                        if(@$_GET['Invalid']==true)
                         {
                    ?>
                        <div class="alert"><?php echo $_GET['Invalid']?></div>
                    <?php
                         }
                    ?>

                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input class="name" type="text" name="UName" placeholder="User Name"> <br/>
                            <input class="pasword" type="Password" name="Passowrd" placeholder="Password">
                            <button class="btn"name="Login">Login</button>
                        </form>
                    </div>
                   <!-- <p>ALL THE BEST! </P> -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>