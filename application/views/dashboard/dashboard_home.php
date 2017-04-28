    <head>
    <meta charset="utf-8" />
    <link href=<?php echo ASSETS_URL."dashboard/img/favicon.ico"; ?> rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Richard Karsan Exposition Booking</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Canonical SEO  -->

    <!-- Bootstrap core CSS     -->
    <link href=<?php echo ASSETS_URL."dashboard/css/bootstrap.min.css"; ?> rel="stylesheet" />

    <link href=<?php echo ASSETS_URL."dashboard/css/font-awesome.min.css"; ?> rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href=<?php echo ASSETS_URL."dashboard/css/animate.min.css"; ?> rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href=<?php echo ASSETS_URL."dashboard/css/light-bootstrap-dashboard.css"; ?> rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=<?php echo ASSETS_URL."dashboard/css/main.css"; ?> rel="stylesheet" />

    <link href="<?php echo ASSETS_URL.'dashboard/css/map.css'; ?>" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <script src="<?php echo ASSETS_URL."dashboard/js/jquery-1.10.2.js"; ?>" type="text/javascript"></script>
    <script src="<?php echo ASSETS_URL."angularjs/angular.min.js"; ?>" type="text/javascript"></script>

</head>
<body>

    <div class="wrapper">
    <?php 
        $sidebar = isset($sidebar)? $sidebar : 'dashboard/dashboard_sidebar' ;
        $this->load->view($sidebar); 
    ?>

        <div class="main-panel">
        <!-- SIDEBAR INITIALIZATION -->
        <?php 
            $header = isset($header)? $header : 'dashboard/dashboard_header' ;
            $this->load->view($header); 
        ?>
        <!-- END OF SIDEBAR INITIALIZATION -->


            <div class="content">
                <div class="container-fluid">
                    <?php 
                        $content = isset($content)? $content : 'dashboard/dashboard_default' ;
                        $this->load->view($content); 
                    ?>
                </div>
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy; 2017 <a href="http://expo_portal/">Richard Karsan</a>
                    </p>
                </div>
            </footer>

        </div>
    </div>

</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 id="modal-title" class="modal-title"><?php $modal_title = isset($modal_title)? $modal_title:NULL; echo $modal_title; ?></h4>
            </div>
            <div id="modal-body" class="modal-body">
                <?php $modal_body = isset($modal_body)? $modal_body:NULL; echo $modal_body; ?>
            </div>
            <div id="modal-footer" class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary button-wording">Save</button> -->
            </div>
        </div>
    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo ASSETS_URL."dashboard/js/bootstrap.min.js"; ?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo ASSETS_URL."dashboard/js/bootstrap-checkbox-radio-switch.js"; ?>" type="text/javascript"></script>


<!--  Notifications Plugin    -->
<script src="<?php echo ASSETS_URL."dashboard/js/bootstrap-notify.js"; ?>" type="text/javascript"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo ASSETS_URL."dashboard/js/light-bootstrap-dashboard.js"; ?>" type="text/javascript"></script>

<!--  Sharrre plugin     -->
<script src="<?php echo ASSETS_URL."dashboard/js/jquery.sharrre.js"; ?>" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="<?php echo ASSETS_URL."dashboard/js/chartist.min.js"; ?>" type="text/javascript"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<!-- <script src="<?php echo ASSETS_URL."dashboard/js/demo.js"; ?>" type="text/javascript"></script> -->

<script type="text/javascript">
    $(document).ready(function(){

        // demo.initChartist();

        /*$.notify({
            message: "Welcome to Booking"

        },{
            type: 'info',
            timer: 4000
        });*/

    });
</script>
