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
            <h1>FamPlan</h1>
        </div>
        <div class="main">
            <div class="formwrapper">
                <div class="pages">
                    <h1 class="currentstep">Stap 1 van de 3</h1>
                </div>
                <div class="title">
                    <h1 class="formtitle">Je account aanmaken</h1>
                </div>
                <div class="subtitle">
                    <h1 class="sub">Lorem ipsum dolor sit amet consectetur.</h1>
                </div>
                <div class="input">
                    <form method="post" action="formhandler.php" autocomplete="off" class="container">
                        <div class="inputwrap step1" data-currentPage="true" data-visible="true" data-used="true">
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
                            <div class="confirmmail inputblock">
                                <h3 class="inputTitle">Wachtwoord</h3>
                                <input type="password" name="fname" id="" class="field">
                            </div>
                        </div>
                        <div class="button">
                            <button type="button" class="clicker" data-submit="false">Account aanmaken</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>