<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>So Simple SCSS Grid</title>
    <link rel="stylesheet" href="dist/grid.min.css">
    <style>
        body {
            margin: 0;
            border: 0;
            padding: 0;
        }
        .content {
            background-color: silver;
            text-align: center;
            font-family: sans-serif;
            font-weight: bold;
            color: white;
            padding: 1em;
        }
        img {
            display: block;
            max-width: 100%;
            object-fit: cover;
            float: left;
        }
        .c50 {
            width: 50%;
        }
        .right {
            float: right;
        }
    </style>
</head>
<body>
    <?php
        function rc()
        {
            return strtoupper(dechex(mt_rand(0, 10000000)));
        }

        function ima($size = "2560x1280", $class = "")
        {
            echo '<img class="' . $class . '" src="http://placehold.it/' . $size . '/' . rc() . '/ffffff" alt="">';
        }

    ?>
    <div class="extended-wrapper hg-fluid-wrapper">
        <div class="row">
            <div class="hg-6-12 lg-12-12">
                <?php ima('1280x800', 'lg-6-12 md-12-12') ?>
                <?php ima('1280x1600', 'lg-6-12 md-12-12 right') ?>
                <?php ima('1280x800', 'lg-6-12 md-12-12') ?>
            </div>
            <div class="hg-6-12 lg-12-12"><?php ima('1920x1200') ?></div>
        </div>
    </div>
    <div class="extended-wrapper hg-fluid-wrapper">
        <div class="row">
            <div class="lg-8-12 md-12-12 sm-12-12">
                <?php ima('1280x400', 'lg-12-12 md-12-12') ?>
                <?php ima('1280x800', 'lg-6-12 md-12-12') ?>
                <?php ima('1280x800', 'lg-6-12 md-12-12') ?>
            </div>
            <div class="lg-4-12 md-12-12 sm-12-12">
                <?php ima('800x1000') ?>
            </div>
        </div>
    </div>
</body>
</html>