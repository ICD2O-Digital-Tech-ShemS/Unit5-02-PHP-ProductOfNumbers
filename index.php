<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Speed of light in different mediums" />
    <meta name="keywords" content="immaculata, icd2o" />
    <meta name="author" content="Kukwac" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="./Favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./Favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./Favicons/favicon-32x32.png" />
    <link rel="manifest" href="./Favicons/site.webmanifest" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>LOOP</title>
</head>
<body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="./js/script.js"></script>

    <form action="#" method="post">
        <h6> ENTER A POSITIVE NUMBER</h6>
        <div class="mdl-textfield mdl-js-textfield">
            <input type="number" id="userNum" name="userNum" />
            <span class="mdl-textfield__error">Invalid number!</span>
        </div>
    </form>

    <form action="#" method="post">
        <h6> ENTER A POSITIVE NUMBER</h6>
        <div class="mdl-textfield mdl-js-textfield">
            <input type="number" id="userNum2" name="userNum2" />
            <span class="mdl-textfield__error">Invalid number!</span>
        </div>
        <input type="submit" value="ENTER">
    </form>
    <br/>
    <iframe id="results" name="results"></iframe>
</body>
</html>
