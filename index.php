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
                
            </main>
            
            <aside class="wdac-sidebar">
                <a href="#"><i class="uk-icon-phone"></i> (314) 555-0123</a>
                <hr />
                <form class="uk-form">
                    <input type="text" placeholder="Your Name" class="uk-width-1-1">
                    <input type="text" placeholder="Your Email" class="uk-width-1-1">
                    <textarea placeholder="How can we help you?"></textarea>
                    <input type="submit" value="Send Message" class="uk-width-1-1 uk-button uk-button-success uk-button-large">
                </form>
            </aside> 
        </div>
        <footer>
            <?php require("footer.php"); ?>
        </footer>
    </body>
</html>

<?php
    
?>