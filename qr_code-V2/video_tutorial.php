
    <?php
    // Google Charts Documentation: https://developers.google.com/chart/infographics/docs/qr_codes?csw=1#overview

    // Chart Type
    $cht = "qr";

    // Chart Size
    $chs = "98x98";

    // Chart Link
    // the url-encoded string you want to change into a QR code
    $chl = urlencode("https://www.youtube.com/watch?v=wKoGImLA2KA&list=PLsyeobzWxl7oBxHp43xQTFrw9f1CDPR6C");

    // Chart Output Encoding (optional)
    $choe = "UTF-8";

    $qrcode = 'https://chart.googleapis.com/chart?cht=' . $cht . '&chs=' . $chs . '&chl=' . $chl . '&choe=' . $choe;

    echo "<img src='$qrcode' alt='My QR code'/>";
    ?>

