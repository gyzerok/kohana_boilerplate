<!DOCTYPE html>
<html>
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <link rel="stylesheet" href="{URL::site('/import/bootstrap-3.0.0/css/bootstrap.min.css')}">
        <link rel="stylesheet" href="{URL::site('/import/bootstrap-3.0.0/css/bootstrap-theme.min.css')}">
        <script src="{URL::site('/import/bootstrap-3.0.0/js/bootstrap.min.js')}"></script>

    </head>
    <body>
        {block "content"}{/block}
        {ProfilerToolbar::render()}
    </body>
</html>