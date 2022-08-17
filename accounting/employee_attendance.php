<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/attendance.css">
    <link rel="stylesheet" type="text/css" href="../components/bootstrap_icons/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <title>Employee Attendance</title>
</head>

<body class="attendance"> <!-- add class to body tag according to link name -->
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- Put include below for sidebar -->
            <?php
                include 'includes/sidebar.html';
            ?>

            <div class="col py-3">
                <h1> Employee Attendance </h1>
                <small class="text-muted">Home / Employee Attendance </small>
                <hr>
                <div class="card" id="attendance-card">
                    <div class="card-body">Attendance</div>
                </div>

               
                <div class="row flex-nowrap mt-3" id=testing>
            
                    <!-- Download to PDF button -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary" id="download">
                            Download to PDF &nbsp;<i class="bi bi-download"> </i> 
                        </button>
                    </div>
            
                    
                    <!-- Date picker -->
                    <div class="col-4">
                        <div class="input-group date" id="datepicker">
                            <input type="date" class="form-control" id="from-date" placeholder="Start Date" />
                            
                            <small class="text-muted mt-2">&nbsp; To &nbsp;</small>

                            <input type="date" class="form-control" id="to-date" placeholder="End Date"/>
                            
                        </div>
                    </div>


            
                    <!-- Search bar for employees -->
                    <div class="col-3">
                        <div class="form-outline">
                            <input type="search" id="search-employee" class="form-control" placeholder="Search Employee"/>
                        </div>
                    </div>

                    <div class="col-1">
                        <button type="submit" class="btn btn-primary" id="search-button">
                        <i class="bi bi-search"></i>
                    </div>
                    


                </div>
                


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