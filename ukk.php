<?php 
require_once('config.php');
require_once('functions.php');
//require_once('dbFunctions.php');
SSLon();

include('includes/iheader.php');
?>
<div id="selaa-bg">
    <h1>Usein kysytyt kysymykset (FAQ)</h1>
    <!-- 'details' ja 'summary' toimivat vain selaimilla: Chrome 12.0+, Safari 6.0+ ja Opera 15.0+ -->
    <!-- Ei kuitenkaan riko muilla selaimilla. Näyttää vain kuin 'details' ja 'summary' -tageja ei olisi. -->
    <details>
        <summary>
            <h2 style="display: inline;">Mikä on Lumnium?</h2>
        </summary>
        <p>Lumnium on helppokäyttöinen julkaisupalvelu, johon käyttäjät voivat luoda oman yksityiskohtaisen profiilin sekä ladata omia tuotoksiaan muiden nähtäväksi.</p>
    </details>    
    <br>
    <details>
        <summary>
            <h2 style="display: inline;">Kuka voi käyttää Lumniumia?</h2>
        </summary>
        <p>Lumniumia voivat käyttää kaikki rekisteröityneet käyttäjät. Rekisteröityä voi <a href="index.php">etusivulta</a>.</p>
    </details>    
    <br>
    <details>
        <summary>
            <h2 style="display: inline;">Mikä on projekti?</h2>
        </summary>    
        <p>Käyttäjät voivat luoda portfolioonsa useita projekteja. Projektiin voidaan lisätä kuvia, tekijän rooli ja kuvaus.</p>
    </details>    
    <br>
    <details>
        <summary>
            <h2 style="display: inline;">Kuinka luon uuden projektin?</h2>
        </summary>
        <p>Kun olet kirjautuneena sisään klikkaa käyttäjätunnustasi oikeasta yläkulmasta ja valitse tiputusvalikosta "Luo projekti".</p>
    </details>
    <br>
</div>
<?php include('includes/ifooter.php'); ?>
