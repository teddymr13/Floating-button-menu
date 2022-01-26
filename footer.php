<div id="div_footer">
    <div class="section group">
        <div class="inner_section">
            <div align="center" class="span_24_of_24 col">
                <div class="group container_icon_social_media_footer">
                    <?php
                    foreach($soc_med as $item){
                        ?>
                        <a class="icon_link_socmed_footer" href="<?php echo $item["url"]; ?>" title="<?php echo $item["nama"]; ?>"><i class="fa fa-fw <?php echo $item["icon_class"]; ?>"></i></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="group section">
        <div class="col span_24_of_24">
            <div class="line-style1"></div>
        </div>
    </div>
    <div class="group section">
        <div class="inner_section">
            <div class="col span_24_of_24" align="center">
                <h2>We're Glad to Assist Our Customer 24/7</h2>
                Customer Service<!--&nbsp;&nbsp;·&nbsp;&nbsp;<a class="links_middle_footer" href="#">+<?php /*echo $info_per->telp; */?></a>-->&nbsp;&nbsp;·&nbsp;&nbsp;<a class="links_middle_footer" href="mailto:<?php echo $info_per["email"]; ?>"><?php echo $info_per["email"]; ?></a>
            </div>
        </div>
    </div>

    <div class="section group seksi_bottom_footer">
        <div class="inner_section">
            <div class="col span_24_of_24" align="center"></div>
            <div class="col span_24_of_24" align="center">
                <a class="a_bottom_footer" href="<?php echo $url_iso_country; ?>/about/">About</a>&nbsp;&nbsp;·&nbsp;&nbsp;<a class="a_bottom_footer" href="<?php echo $url_iso_country; ?>/policies/">Policies</a>&nbsp;&nbsp;·&nbsp;&nbsp;<a class="a_bottom_footer" href="<?php echo $url_iso_country; ?>/partnership/">Partnership</a>
                <div class="spacer_8"></div>
                <span style="color: #FFFFFF;">&copy; <?php echo date("Y") . " " . $info_per["nama_pt"]; ?>, <span class="style_teks_registry"><?php echo $info_per["sebutan"]; ?></span></span>
            </div>
            <div class="col span_24_of_24" align="center"></div>
        </div>
    </div>
</div>
<?php
if(!isset($status_subs)) $status_subs = false;
if($status_subs) {
    //
}
$link_back_to_index = $url_iso_country . "/" . MainHelper::getStrPage('url') . "/";
?>



<div id="chatscustom">
    <div class="sywhservices">
     <a href="https://wa.me/6287781220033?text=Hello,%20there%20is%20something%20i%20want%20to%20ask" class="whatsapp" target="_blank"><i class="fa fa-whatsapp"></i></a>   
     <a href="mailto:info@registrye.com" class="messenger" target="_blank"><i class="fa fa-envelope"></i></a>
     <a href="tel:+622122638050" class="call"><i class="fa fa-phone"></i></a>
    </div>

    <a class="openservices">
       <i class="fa fa-comments"></i>
       <i class="fa fa-times"></i>
    </a>
</div>

<?php
if(isset($bennersaddsfootertwo) && is_array($bennersaddsfootertwo) && count($bennersaddsfootertwo) > 0){
        foreach ($bennersaddsfootertwo as $banners) {
?>
<div id="fixedban"> 
    <div>
        <a id="close-fixedban" onclick="document.getElementById(&apos;fixedban&apos;).style.display = &apos;none&apos;;">
        <img class="btnimgsclose" alt="close" src="assets/images/close-windows.png" title="close button"/></a>
    </div>
    <div class="imgsfooters">
        <a href="<?php echo $banners["url_linkadsfootertwo"]; ?>"><img class="imgsfoot" alt="Banner iklan disini" src="<?php echo $banners["url_gbradsfootertwo"]; ?>"/>
             <span class="btn-gradfooters">Ads</span>
        </a>

    </div>
</div>
<?php
  }
}
?>


<img id="button_back_to_top" class="button_back_to_top" src="assets/images/ButtonHamburgerRegistryE.png" title="Navigation">
<img id="button_back_topup" class="button_back_topup" src="assets/images/button-back-to-top.png" title="Back To Top">
<!-- <a href="<?php //echo $link_back_to_index; ?>"><img id="button_back" class="button_back" src="assets/images/Back-Menu.png" title="Back Menu"></a> -->
