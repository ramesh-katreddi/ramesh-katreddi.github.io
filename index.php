<!DOCTYPE html>
<html>

<head  profile="http://www.w3.org/2005/10/profile">
    <title>WhatsDplan – A new way to plan your Hangouts!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale = 1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/features.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32X32" href="/favicon-32x32.png">

</head>
<body>
    <?php include 'header.php';?>
    <div class="jumbo container-fluid">
        <div class="jumbotron text-center">
            <div class="row">
                <div  style="padding-top:50px"  class="col-md-7">
                    <p style="color:white">Redefining the way we plan</p>
                    <img width="300" src="images/redefining.png">
                </div>
                <div class="col-md-4">
                    <p class="text-center" style="font-size:18px;margin-top:30px;color:white">WhatsDplan is a Mobile Platform for Groups/Friends to easily and collectively explore, visualize, collaborate and decide on a hangout or any social activity</p>
                    <p><a class="btn btn-primary btn-lg" href="features.php" role="button">Check Out Features</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="intro" class="container shallowBg" style="min-height:180px;">
        <div class="row">
            <div class="col-sm-4 whoareu text-center">
                <img width=70 height=70 src="images/our_offering.png">
            
                <p class="text-center text-primary"><h4>The Offering</h4></p>
                <p class="text-justify" style="padding-top:20px;">An Android Mobile Application designed for all those who enjoy their time with friends and never want to miss out on any happening or an event!</p>
            </div>
            <div class="col-sm-4 whoareu text-center ">
                <img width=70 height=70 src="images/our_features.png">
                <p class="text-center text-primary"><h4>App Features</h4></p>
                <p class="text-justify" style="padding-top:20px;">By understanding different pain points, we identified the best features and made a successful attempt in addressing all the touch points when friends plan for any hangout. Check our <a href="features.php">Features</a> for more details</p>
            </div>
            <div class="col-sm-4 whoareu text-center">
                <button type="button" class="btn-circle"><i class="glyphicon glyphicon-cloud-download"></i></button>
                <p class="text-center text-info"><h4>How To Use</h4></p>
                <p class="text-justify" style="padding-top:20px;">
                    Currently we are under active development. We are going to be live soon on Android Play store and Apple Store. Please watch out this space for more details.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid text-center">
        <div id="features" class="row">
            <div class="col-md-12">
                <h2 style="color:#024d87; margin-bottom:40px;" class="text-info">Planning hangouts made easy</h2>
            </div>
            <div class="col-md-12">
                <div class="feature">
                    <a href="features.php#add_option">
                        <img src="images/feature_icons/add_option.png" />
                    </a>
                    <p>Voting</p>
                </div>
                <div class="feature">
                    <a href="features.php#consolidate">
                        <img src="images/feature_icons/consolidate.png" />
                    </a>
                    <p>Consolidation</p>
                </div>
                <div class="feature">
                    <a href="features.php#location_sharing">
                        <img src="images/feature_icons/location_sharing.png" />
                    </a>
                    <p>Location Sharing</p>
                </div>
                <div class="feature">
                    <a href="features.php#public_events">
                        <img src="images/feature_icons/public_events.png" />
                    </a>
                    <p>Public Events</p>
                </div>
                <div class="feature">
                    <a href="features.php#chat">
                        <img src="images/feature_icons/chat.png" />
                    </a>
                    <p>Chat</p>
                </div>
                <div class="feature">
                    <a href="features.php#local_sites">
                        <img src="images/feature_icons/local_sites.png" />
                    </a>
                    <p>Weekend Destinations</p>
                </div>
            </div>
        </div>
        </div>
        <?php include 'footer.php';?>
        <script src="js/jquery-1.11.2.min.js" type="application/javascript"></script>
        <script src="js/bootstrap.min.js" type="application/javascript"></script>
</body>

</html>