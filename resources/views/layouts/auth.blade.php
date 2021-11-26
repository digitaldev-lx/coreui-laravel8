<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/css/coreui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">
</head>
<body class="c-app flex-row align-items-center">
    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@3.4.0/dist/js/coreui.bundle.min.js"></script>

</body>
</html>
