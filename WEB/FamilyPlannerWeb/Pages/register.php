<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags, contain document properties for the browser  -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- the page header that will be displayed in a browser tab  -->
    <title>FamPlan</title> <!-- tab title -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> the tab icon -->
    <!-- stylesheets  -->
    <link rel="stylesheet" href="/WEB/FamilyPlannerWeb/CSS/root.css">
    <link rel="stylesheet" href="/WEB/FamilyPlannerWeb/CSS/register.css">
    <!-- scripts  -->
    <script src="/WEB/FamilyPlannerWeb/JS/register.js" defer></script>
</head>
<body>
    <div class="wrapper">
        <div class="navbar">
            <h1>NAVBAR</h1>
        </div>
        <div class="main">
            <div class="formwrapper">
                <div class="title">
                    <h1 class="formtitle">Je account aanmaken</h1>
                </div>
                <div class="subtitle">
                    <h1 class="sub">Nog één stap te gaan voordat je toegang hebt tot FamilyPlanner!</h1>
                </div>
                <div class="input">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off" class="container">
                        <div class="inputwrap step1">
                            <div class="firstname inputblock">
                                <h3 class="inputTitle">Voornaam</h3>
                                <input type="text" name="fname" id="" class="field" placeholder="Jan">
                                
                            </div>
                            <div class="lastname inputblock">
                                <h3 class="inputTitle">Achternaam</h3>
                                <input type="text" name="fname" id="" class="field" placeholder="Janssens">
                            </div>
                            <div class="email inputblock">
                                <h3 class="inputTitle">Emailladres</h3>
                                <input type="text" name="fname" id="" class="field" placeholder="janjanssens@email.nl">
                            </div>
                            <div class="password inputblock">
                                <h3 class="inputTitle">Wachtwoord</h3>
                                <input type="password" name="fname" id="" class="field">
                            </div>
                        </div>
                        <div class="button">
                            <button type="submit">Account aanmaken</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>