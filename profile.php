<?php include('api/config.php');  ?>

<!DOCTYPE html>
<html>
<hcssead>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title> 

    <!-- Latest compiled and minified JavaScript -->
     <link rel="stylesheet" href="css/jarvis-lib.css">
    <link rel="stylesheet" href="css/jarvis-main.css">
    <link rel="stylesheet" href="css/jarvis-tv.css">


    <link rel="stylesheet" href="css/jarvis-theme-2.css">
    <link rel="stylesheet" href="css/common.css">
<?php include('inc/js.php'); ?>


    </head>

    <body>
        <!-- Static navbar -->
       <?php include('inc/header.php'); ?>

<?php include('inc/channel.php'); ?>

<div class="container">
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="be-setting" id="jsid-user-setting">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidebar-tab">
                            <ul class="nav nav-pills nav-stacked">
                                <li class=""><a rel="nofollow" href="settings.php">Account</a>
                                </li>
                                <div class="divider"></div>
                                <li class=""><a rel="nofollow" href="password.php">Password</a>
                                </li>
                                <li class="active"><a rel="nofollow" href="profile.php">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- / col-sm-3 -->
                     <div class="col-sm-9">
        <form action="http://9gag.tv/account/password" class="form-horizontal"
        id="settingForm" method="post" name="settingForm">
            <input name="nav" type="hidden" value="password">

            <div class="page-header">
                <h1>Password</h1>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputoldpassword1">Old Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputoldpassword1" name=
                    "setting[password][password][oldPassword]" type="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputnewpassword1">New Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputnewpassword1" name=
                    "setting[password][password][newPassword]" type="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputconfirmnewpassword1">Confirm Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputconfirmnewpassword1"
                    name="setting[password][password][newPasswordConfirm]"
                    type="password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="btn-container">
                        <input class="btn btn-primary" type="submit" value=
                        "Save Changes">
                    </div>
                </div>
            </div>
        </form>
    </div>
                    <!-- / col-sm-9 -->
                </div>
                <!-- / row -->
            </div>
            <!-- / be-account -->
        </div>
        <!-- / page-wrapper -->
    </div>
</div>

<footer>
        <div class="container">
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-12">
                    <div class="dpa-728">
                        <div class="dpa-container size-728x90">
                            <!-- jarvis-list-footer-728x90 -->

                            <div id="div-gpt-ad-1397179863114-0" style=
                            "width: 728px; height: 90px;">
                                

                                <div id=
                                "google_ads_iframe_/16921351/jarvis-list-footer-728x90_0__container__"
                                style="border: 0pt none;"></div>
                            </div>
                        </div><!-- / dpa-container -->
                    </div><!-- / dpa-728 -->
                </div><!-- / col-md-12 -->
            </div><!-- / row-->

            <div class="row">
                <div class="col-md-12">
                    <p class="links"><a class="badge-evt" data-evt=
                    "SiteAction,Footer,FeedbackClicked" href=
                    ""
                    target="_blank">Send Feedback</a> 9GAG.tv Â© 2015</p>
                </div><!-- / col-md-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </footer>
</body>

</html>