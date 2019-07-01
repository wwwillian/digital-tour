<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<title>Galereya</title>
    <link href="css/jquery.galereya.css" rel="stylesheet"/>
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/jquery.galereya.ie.css">
    <![endif]-->

    <script src="js/jquery.galereya.min.js"></script>
    <script>
        $(function() {
            $('#galleryherepls').galereya({
                load: function(next) {
                    $.getJSON('images.json', function(data) {
                        next(data);
                    });
                }
            });
        });
    </script>
</head>
<body>
    <div id="galleryherepls"></div>
</body>
</html>
