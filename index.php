<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 6</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <h1>Exercice 6</h1>
            <a href="http://exephpp9/">Index</a>
        </nav>
        <p>Le mois de février 2016 contient 
            <?= cal_days_in_month(CAL_GREGORIAN, 2, 2016); ?>
            jours</p>
    </body>
</html>
