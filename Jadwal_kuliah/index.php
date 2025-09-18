<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harvey's University</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel = "icon" href="assets/Flavicon.png" type="image/x-icon">
</head>
<body>
    <div class="welcome">
        <h1>Welcome,<br> 
        <b>
            <span style = "color : #483725">Hans Harvey</span>
        </b>
    </h1>
    </div>
    <div class="container">
        <?php include 'dashboard.php'; ?>
        <hr>
        <div class="forms">
            <!-- <?php include 'form_jadwal.php'; ?> -->
            <?php include 'form_tugas.php'; ?>
        </div>
        <hr>
        <div id="jadwal-list">
            <?php include 'list_jadwal.php'; ?>
        </div>
        <div id="tugas-list">
            <?php include 'list_tugas.php'; ?>
        </div>
    </div>
    <script src="assets/app.js"></script>
</body>
</html>
