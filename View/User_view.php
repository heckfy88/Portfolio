<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Table</title>
</head>
<body>
<h1 align="center">User Information Table</h1>
<form method='post'>
    <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-secondary active">
        <input type='submit' name='submit' onclick='window.location;' value='All'>
        </label>
        <label class="btn btn-secondary">
        <input type='submit' name='submit' onclick='window.location;' value='Last Day'>
        </label>
        <label class="btn btn-secondary">
        <input type='submit' name='submit' onclick='window.location;' value='Last Hour'>
        </label>
        <label class="btn btn-secondary">
        <input type='submit' name='submit' onclick='window.location;' value='Last 30 Minutes'>
        </label>
    </div>
    <table class="table">

        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Country</th>
            <th>State</th>
            <th>Zip</th>
            <th>Registration time</th>
        </tr>
        </thead>
        <tbody>
        <?php include "/Users/ruslanagaev/Desktop/PHP_STORM/Portfolio/Controller/Users_controller.php"; ?>
        </tbody>
    </table>
</form>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
