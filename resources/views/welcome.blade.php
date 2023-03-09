<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Laravel con React</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, viewport-fit=cover">
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="PrimeReact Apollo Layout" />

    <link rel="icon" href="/public/favicon.ico" />
    <link id="theme-css" rel="stylesheet" type="text/css" href="/public/asset/theme/red/theme-dark.css">
    <link id="layout-css" rel="stylesheet" type="text/css" href="/public/asset/layout/css/red/layout-dark.css">

    @viteReactRefresh
    @vite("resources/js/app.js")
</head>

<body>
    <noscript>
        You need to enable JavaScript to run this app.
    </noscript>
    <div id="root">
        <div class="loader">
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</body>

</html>