<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Description" content="Template page for CIT336 Enhancement#1">
        <title>Template - ACME, Inc.</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/normalize.css"/>
        <link rel = "stylesheet" type = "text/css" href = "/acme/css/small.css"/>
        <link rel = "stylesheet" type = "text/css" href ="/acme/css/medium.css"/>
        <link rel = "stylesheet" type = "text/css" href ="/acme/css/large.css"/>
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
            <h1>Content Title Here</h1>
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </footer>

    </body>
</html>