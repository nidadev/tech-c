<?php include 'getdata.php';?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css?v=5">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
                <div class="col-sm-2">
                    <a href="index.html" class="logo"><img class="img-fluid able-logo" src="images/TestLogo.svg"
                            alt="Theme-logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="header-left">
                        <div class="dropdown for-notification">
                            <div class="navbar">
                                <a href="#home"><i class="menu-icon fa fa-home"></i>Overview</a>
                                <a href="#news"><i class="menu-icon fa fa-user-o"></i>Patients</a>
                                <a href="#home"><i class="menu-icon fa fa-calendar-o"></i>Schedule</a>
                                <a href="#news"><i class="menu-icon fa fa-envelope-o"></i>Messages</a>
                                <a href="#home"><i class="menu-icon fa fa-envelope-open-o"></i>Transaction</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="user-area dropdown float-left">
                        <ul id="menu-user">
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">

                                </a></li>
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <p class="user">Dr. Jose Simmons<br><a style="font-weight:200">Practitioner</a> </p>

                                </a></li>



                        </ul>
                    </div>
                </div>
            </div>
            </div>

    </header><!-- /header -->
    <!-- Header-->
    <div class="content">
        <!--/.col-->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">               
                         <ul class="patient scroll">
                        <h3>Patients</h3>                  
                        
                        <?php foreach($data as $d){   
    echo '<li class="active"><a href="index.html"> <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:35px; height:35px;" alt=""
                        src='.$d->profile_picture.'>
     </a> <a class="" href="./">'.$d->name.'</a><p>'.$d->gender.','.$d->age.'</p>
                        </li>';
}
?>                        
                    </ul>

                   
                </div>              
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h2>Diagnosis History</h2>

                    <!--/.row-->
                    <div class="chart-wrapper mt-4 bgcolor-chart">
                        <h4 class="card-title mb-0">Blood Pressure</h4>

                        <canvas id="trafficChart" style="height:200px;" height="200"></canvas>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body bgcolorblue">
                                <section class="">
                                    <div class="">        
                                        <div class="media">
                                            <a href="#">
                                                <img class="align-self-center rounded-circle mr-3" style="width:96px; height:96px;" alt="" src="images/r2.png">
                                            </a>
                                      </div>  
        
                                    </div>
                    <div class="weather-category twt-category">                                       
                        <h4>Respiratory Rate</h4>
                        20 bpm
                            </div>                            
                                </section>                        
            
                            </div>
                          
                        </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body bgcolorred">
                                <section class="">
                                    <div class="">        
                                        <div class="media">
                                            <a href="#">
                                                <img class="align-self-center rounded-circle mr-3" style="width:96px; height:96px;" alt="" src="images/t2.png">
                                            </a>
                                      </div>       
                                    </div>
                                    <div class="weather-category twt-category">                                       
                                                <h4>Temperature</h4>
                                                98.6 F
                                                 </div>                                  
                                </section>                               
                
                                </div>                             
                            </div>
                            </div> 
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body bgcolorpink">
                                    <section class="">
                                    <div class="">        
                                        <div class="media">
                                            <a href="#">
                                                <img class="align-self-center rounded-circle mr-3" style="width:96px; height:96px;" alt="" src="images/h2.png">
                                            </a>
                                      </div>        
                                    </div>
                                    <div class="weather-category twt-category">                                       
                                                <h4>Heart Rate</h4>
                                                786 bpm
                                                 </div>                                  
                                </section>     
                                        <!--/.row-->                 
                    
                                    </div>
                                  
                                </div>
                                </div> 
                </div>
               <div class="row">
                <div class="col-lg-12">
                    <div class="card scroll">
                        <div class="">
                            <h2>Diagnostic List<h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr class="tabledg">
                                        <th scope="col">Problem/Diagnosis</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach($data as $df)
                                    {
                                       
                                        echo '<tr><td>'.$df->phone_number.'</td>
                                        <td>'.$df->age.'</td>
                                        <td>'.$df->insurance_type.'</td></tr>';
                                     
                                    }
                                   
                                    ?>                                  
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
               </div>
            </div>
            
        </div>

        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" style="width:185px; height:185px;" src="images/Layer 2.png" alt="Card image cap">
                        <?php 
                            echo  '<h5 class="text-md-center mt-2 mb-1">'. $d->name.'</h5>
                           <div class="location text-md-left"><i class="fa fa-calendar"></i>   Date Of Birth<p class="text-md-left">
                           '.$d->age.'</p></div>
                         <div class="location text-md-left"><i class="fa fa-venus"></i>  Gender<p class="text-md-left">
                           '.$d->gender.'</p></div>
                            <div class="location text-md-left"><i class="fa fa-phone"></i> Contact Info<p class="text-md-left">
                           '.$d->phone_number.'</p></div>
                           <div class="location text-md-left"><i class="fa fa-phone"></i> Emergency Contact<p class="text-md-left">
                           '.$d->emergency_contact.'</p></div>
                            <div class="location text-md-left"><i class="fa fa-calendar"></i> Insurance<p class="text-md-left">
                           '.$d->insurance_type.'</p></div>';
                        ?>                   

                    </div>
                    <hr>
                    <div class="card-text text-sm-center navbar">
                        <a href="#">Show All Information</a>
                       
                    </div>
                </div>              
            </div>
            <div class="card scroll">
                <div class="card-header">
                    <h2>Lab Test</h2>
                </div>
                <div class="card-body">
                    <table class="table">                      
                        <tbody>                      
                        <?php
                               foreach($data as $x) { 
                                echo '<tr><td>'.$x->name.'</td>
                                <td><img class="rounded-circle mx-auto d-block" style="width:20px; height:20px;" src="images/d3.png" alt="Card image cap">
</td></tr>';
                               }
                                ?>                                              
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- .content -->
   
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="vendors/jquery/dist/jquery.min.js?v=1"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js?v=1"></script>
    <script src="assets/js/main.js"></script>

    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>
</html>