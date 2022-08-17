<!DOCTYPE HTML>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/payroll_summary.css">
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
           

            <!-- Insert head navigation here-->

            <!-- Table part ---> 

            <div class="overflow-auto" style="height: 500px;">
              <table class="table">
                <tbody>
                    <tr>
                      <th>Name of Employee:</th>
                      <td></td>
                      <td>John Doe</td>
                    </tr>
                  
                    <tr>
                      <th>Payroll Period:</th>
                      <td></td>
                      <td>August 1-15, 2022</td>
                    </tr>

                    <tr>
                      <th>Payroll Date:</th>
                      <td></td>
                      <td>August 15, 2022</td>
                    </tr>

                    <tr>
                      <th>Status:</th>
                      <td></td>
                      <td>Claimed</td>  
                    </tr>

                    <tr>
                      <th>Rate per Day:</th>
                      <td></td>
                      <td>500</td>  
                    </tr>

                    <tr>
                      <th>Rate per Hour:</th>
                      <td></td>
                      <td>55.56</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Total Number of Hours Worked</th>
                      <td>96</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Adjustment/s (additional):</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Adjustment/s (deduction):</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Total Basic Pay</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Gross Pay</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <th>Deductions</th>
                      <td></td>
                      <td></td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>SSS:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>PHIC:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>HDMF:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>W/tax:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Absence/s:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Advance/s:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>HDMF Loan:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>SSS Loan:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <td></td>
                      <th>Cash Bond:</th>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <th>Total Deduction:</th>
                      <td></td>
                      <td>0.00</td>  
                    </tr>

                    <tr>
                      <th>Net Pay:</th>
                      <td></td>
                      <th>0.00</th>  
                    </tr>

                  </tbody>
              </table>  
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