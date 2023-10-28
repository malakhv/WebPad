<!DOCTYPE html>

<html>
    
    <!-- The page html header -->
    <?php MakeHtmlHead(); ?>

<body><div id="content">

    <!-- Header -->
    <?php InsertPageHeader(); ?>

    <!-- Page content -->
    <?php
        IncludeContent('common/about.htm');
        IncludeContent('common/logo.htm');
        IncludeContent('common/stub.htm');
    ?>

    <!-- Disclaimer -->
    <?php InsertDisclaimer(); ?>
    <!-- Footer -->
    <?php InsertPageFooter(); ?>

</div></body></html>
