<?php
$packages_json = file_get_contents("./JSON/packages.json");
$payments_json = file_get_contents("./JSON/payments.json");
$modules_json = file_get_contents("./JSON/modules.json");
$features_json = file_get_contents("./JSON/features.json");
$tools_json = file_get_contents("./JSON/tools.json");
$banner_benefits_json = file_get_contents("./JSON/banner_benefits.json");
$navigation_tabs_json = file_get_contents("./JSON/navigation.json");
$advantages_json = file_get_contents("./JSON/advantages.json");


$packages = json_decode($packages_json, true);
$payments = json_decode($payments_json, true);
$modules = json_decode($modules_json, true);
$features = json_decode($features_json, true);
$tools = json_decode($tools_json, true);
$banner_benefits = json_decode($banner_benefits_json, true);
$navigation_tabs = json_decode($navigation_tabs_json, true);
$advantages = json_decode($advantages_json, true);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'functions/head.php'?>
    <body>
        <?php include 'functions/header.php'?>  
        <?php include 'functions/banner.php' ?>
        <?php include 'functions/middle_container.php'?>
        <?php include 'functions/modules.php'?>
        <?php include 'functions/advertisement.php'?>
        <?php include 'functions/share.php'?>
        <?php include 'functions/help.php'?>
        <?php include 'functions/footer.php'?>
        <script src="./helpers/toggle.js"></script>
    </body>
</html>