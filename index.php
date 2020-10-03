<?php require_once 'system/class.url.php'; ?>
<!doctype html>
<html lang="en" data-theme="dark">
<head>
    <title>Vealtex.com &mdash; url.vealtex.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/@bybas/latte-ui@1.9.0-beta.1/dist/latte-ui.css"/>
    <link rel="stylesheet" type="text/css" href="assets/app.css">
    <meta property="og:title" content="Vealtex &mdash; url.vealtex.com" />
    <meta property="og:site_name" content="Vealtex.com - Contact me: support@vealtex.com" />
    <meta property="og:description" content="URL Shorten on the subdomain http://localhost - You can only use this URL shortener with a PIN. Interested in a PIN? Contact Adam by email." />
    <meta property="og:image" content="http://localhost" />
    <meta property="og:url" content="https://localhost />
    <link rel="icon" type="image/png" sizes="32x32" href="http://localhost">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-B9BoFFAuBaCfqw6lxWBZrhg/z4NkwqdBci+E+Sc2XlK/Rz25RYn8Fetb+Aw5irxa" crossorigin="anonymous">
</head>
<body">
<main id="emc">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5" style=" margin-top: 100px;">
                <!-- UNLOCK -->
                <div class="panel">
                    <div class="panel-header"><span class="panel-title">Short my URL</span></div>
                    <?php (new url)->postURL(); ?>
                    <form method="post">
                        <div class="panel-body">
                            You know, the problem of long URLs, that is now a thing of the past, a shortened URL on the subdomain of vealtex.
                            Before you can shorten a domain, you first have to enter your own personal pin(code). No pin(code), but interested? Please contact Adam.
                        </div>

                        <div class="panel-body">
                            <div class="form-group input-group">
                                <div class="input-group-addon"><i class="fad fa-key"></i></div>
                                <input type="password" name="pincode" id="pincode" class="form-control" placeholder="Pin">
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-addon"><i class="fad fa-link"></i></div>
                                <input type="text" name="url" id="url" class="form-control" placeholder="https://vealtex.com (for example)">
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit-url" class="btn btn-pill btn-contained btn-info"><i class="fad fa-external-link-alt ulicon"></i> <span>Short!</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END UNLOCK -->
            </div>
        </div>
    </div>

</main>
</body>
<script nomodule src="/assets/app.js"></script>
</html>
