<?php
/**
 * Created by PhpStorm.
 * User: Adasdad
 * Date: 06.11.2015
 * Time: 15:33
 */
?>
<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<!-- Footer -->
<div id="footer">
    <p class="left">
        <a href="#">Home</a>
        <span>|</span>
        <a href="#">Support</a>
        <span>|</span>
        <a href="#">My Account</a>
        <span>|</span>
        <a href="#">The Store</a>
        <span>|</span>
        <a href="#">Contact</a>
    </p>
    <p class="right">
        &copy; <?php echo date(Y);?> Shop Around.
    </p>
    </p><p class="center">
        <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array( "COMPONENT_TEMPLATE" => ".default", "AREA_FILE_SHOW" => "file", "AREA_FILE_SUFFIX" => "inc", "EDIT_TEMPLATE" => "", "PATH" => SITE_TEMPLATE_PATH."/include_areas/phonenumber.php" ));?>
    </p>
</div>
<!-- End Footer -->

</div>
<!-- End Shell -->


</body>
</html>
