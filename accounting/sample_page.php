<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/sample_page.css">
    <link rel="stylesheet" type="text/css" href="../components/bootstrap_icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Sample Page</title>
</head>

<body class="dashboard"> <!-- add class to body tag according to link name -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Put include below for sidebar -->
            <?php
                include 'includes/sidebar.html';
            ?>

            <div class="col py-3">
                Put your page content here...
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/sidebar.js"></script>
</body>

</html>