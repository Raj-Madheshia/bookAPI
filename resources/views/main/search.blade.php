<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Search</title>
    </head>
    <body>
        <form action='/api/value' method="GET">
            <label>
                Title: 
                <input type = text, name = "title">
            </label>
            <input type="submit">
        </form>
    </body>
</html>
