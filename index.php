<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta charset="UTF-8">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/class.ajaxsetup.css" type="text/css"/>


    <style type="text/css">
        h1 {
            margin: 2em 0;
            font-size: 1.9em;
            font-weight: bold;
        }

        small {
            font-size: 0.6em
        }
    </style>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="span12">
            <div data-toggle="buttons-radio">
                <button type="button" class="btn btn-warning"
                        onclick="$.ajaxSetup({timeout: 10000,global: false}); return true;">Request without Error-Handler
                </button>
                <button type="button" class="btn btn-danger" onclick="$.ajaxSetup({timeout: 10,global: false});">
                    Request with Error-Handler (for Demo: error-timeout 0.1 seconds)
                </button>
                <br>
                <button type="button" class="btn btn-info" onclick="$.ajaxSetup({timeout: 10000,global: true});">
                    Use jQuery AjaxSetup method!
                </button>
                <button type="button" class="btn btn-info" onclick="$.ajaxSetup({timeout: 10,global: true});">AjaxSetup
                    Timout 0.1 sec
                </button>
                <button type="button" class="btn btn-info" onclick="$.ajaxSetup({timeout: 1000,global: true});">
                    timeout 1 sec
                </button>
            </div>

            <hr>
            <div class="btn-group" data-toggle="buttons-radio">
                <button type="button" class="btn btn-info" onclick="jQueryAjaxSetup.showOverlayMask=true;">mit
                    Overlay
                </button>
                <button type="button" class="btn btn-info"
                        onclick="jQueryAjaxSetup.showOverlayMask=false;jQueryAjaxSetup.ajaxOverlay=false;">ohne
                    Overlay
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span4">
            <div class="form-replace-container dynamic-content">
                <?php include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'data.php'; ?>
            </div>
        </div>
        <div class="span4">
            <div class="form-replace-container2 dynamic-content">
                <?php include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'data2.php'; ?>
            </div>
        </div>
        <div class="span4">
            <div class="form-replace-container3 dynamic-content">
                <?php include_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'inc' . DIRECTORY_SEPARATOR . 'data3.php'; ?>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/class.ajaxsetup.js"></script>
<script type="text/javascript" src="js/singlepageapp.js"></script>
</body>
</html>