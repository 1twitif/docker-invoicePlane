<?php
$safeDomain = preg_replace("/[/ ,;\\?]/g",'',substr($_GET['externDomain'],0,50));
if($safeDomain) {
        $laConfig = file_get_contents("application/config/config.php");
        $laConfig = preg_replace("/config\['base_url'\]\s+= '';/", "config['base_url']     = 'http://".$safeDomain."/';", $laConfig);
        $laConfig = preg_replace("/config\['cookie_domain'\]\s+= '';/", "config['cookie_domain']     = '".$safeDomain."';", $laConfig);
        file_put_contents("application/config/config.php",$laConfig);
        unlink('index.php');
        rename('trueIndex.php','index.php');
        http_redirect('./');
} else {
?>
<script>
document.location.replace(document.location+'?externDomain='+document.location.host);
</script>
<?php
}
