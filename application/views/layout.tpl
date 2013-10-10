<!DOCTYPE html>
<html>
    <head>
        <script src="{URL::site('/import/jquery/jquery-latest.min.js')}" type="text/javascript"></script>

        <link rel="stylesheet" href="{URL::site('/import/bootstrap/css/bootstrap.min.css')}">
        <link rel="stylesheet" href="{URL::site('/import/bootstrap/css/bootstrap-theme.min.css')}">
        <script src="{URL::site('/import/bootstrap/js/bootstrap.min.js')}"></script>

    </head>
    <body>
        {block "content"}{/block}
        {ProfilerToolbar::render()}
    </body>
</html>