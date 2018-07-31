<?php
$safeDomain = preg_replace("/[^-_a-z0-9.:]/",'',substr($_GET['externDomain'],0,50));
if($safeDomain) {
        $laConfig = file_get_contents("application/config/config.php");
        $laConfig = preg_replace("/config\['base_url'\]\s+= '';/", "config['base_url']     = '//".$safeDomain."/';", $laConfig);
        $laConfig = preg_replace("/config\['cookie_domain'\]\s+= '';/", "config['cookie_domain']     = '".$safeDomain."';", $laConfig);
        file_put_contents("application/config/config.php",$laConfig);
        unlink('index.php');
        rename('trueIndex.php','index.php');
        header('Location: ./');
} else {
?>
<script>
document.location.replace(document.location+'?externDomain='+document.location.host);
</script>
<?php
}
