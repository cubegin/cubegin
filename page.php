<?php 
    $page    = $_GET['page'];
    $sublink = $_GET['sublink'];
    if ( !isset($page) )
        $page = "home";
    if ( !isset($sublink) )
    {
        $sublink      = $page;
        $sublink_temp = NULL;
    }
    else $sublink_temp = " : " . $sublink;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>CubeGin - Solutions | Web App | Multimedia : <?php echo ucwords( str_replace( "_", " ", $page . $sublink_temp ) ); ?> </title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link href="stylesheets/page.css" media="screen, projection"
        rel="stylesheet" type="text/css" />
        <link href="stylesheets/print.css" media="print" rel="stylesheet"
        type="text/css" />
        <link rel="stylesheet" href="blueprint/plugins/fancy-type/screen.css"
        type="text/css" media="screen, projection" />  
        <!--[if IE]>
            <link href="stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
        <![endif]-->

        <script type='text/javascript' src='scripts/jquery-1.3.2.min.js'></script>
        <script type='text/javascript'>
            $(document).ready(function() {
                $('#container').hide();
                $('#container').fadeIn(1000);
            });
        </script>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <?php include('includes/header.inc'); ?>
            </div>
            <div id="content">
                <div id="column-1">
                    <div class='top'></div>
                    <div class='content'>
                        <h3> <?php echo ucwords( str_replace( "_", " ", $page ) ); ?> </h3>
                        <ul>
                        <?php
                            $filename = 'pages/' . strtolower($page) . '/sublinks.php';

                            if ( file_exists($filename) ) {
                                include($filename);
                            }
                        ?>
                        </ul>
                    </div>
                    <div class='bottom'></div>
                </div>
                <div id="column-2">
                    <?php
                        $filename = 'pages/'. strtolower($page) .'/'. strtolower($sublink) . '.php';
                        if ( file_exists($filename) ) {
                            include($filename);
                        }
                        else {
                            include('pages/error/404.php');
                        }
                    ?>
                
                </div>
            </div>
            <div id="footer">
                <?php include('includes/footer.inc'); ?>
            </div>
        </div>
    </body>
</html>
