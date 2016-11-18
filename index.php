<?php
require("functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require("head.php"); ?>
    </head>
    <body>
        <div class="header">
            <h1>WDAC Developer Test</h1>
            <p>HTML/CSS Test (30 Minutes)</p>
            <a class="wdac-button" href="#wdac-instructions" data-uk-modal>View Instructions</a>
        </div>
        <div class="wdac-container">
            <a name="begin" class="begin"></a>
            <main class="body-content">
                <div class="little-boxes">
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                    <div class="all-the-same">
                        <?php byTheNumbers(); ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr />
                <p>If you have trouble reading the instructions or the modal window won't open for some reason, you can find the repository and instructions here: <a href="https://github.com/wdac-davy/developer-test" target="_blank">https://github.com/wdac-davy/developer-test</a></p>
            </main>
        </div>
        <footer>
            <?php require("footer.php"); ?>
        </footer>
    </body>
</html>

<?php
    
?>