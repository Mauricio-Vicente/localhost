<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/normalize.css"/>
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/small.css"/>
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/medium.css"/>
        <title>Template | ACME, Inc.</title>
    </head>
    <body>

        <header>
            <div class="left">
                <a href="/" title="Visit the ACME home page for more great roadrunner catching products.">
                    <img class="logo" src="/acme/images/site/logo.gif" alt="ACME Roadrunner catching products for coyotes who want to eat.">
                </a>
            </div>

            <div class="right">
                <a href="/" title="Login to your ACME account.">
                    <img class="login-pic" src="/acme/images/site/account.gif" alt="ACME account login."><strong>My Account</strong></a>
            </div>
        </header>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php'; ?>

        <main>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/main.php'; ?>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </footer>

    </body>
</html>