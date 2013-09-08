<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html >
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>jQuery UI Autocomplete</title>
        <script type="text/javascript" src="jquery/jquery-1.4.2.js"></script>
        <script type="text/javascript" src="jquery/ui/jquery.ui.core.js"></script>
        <script type="text/javascript" src="jquery/ui/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="jquery/ui/jquery.ui.position.js"></script>
        <script type="text/javascript" src="jquery/ui/jquery.ui.autocomplete.js"></script>
    <link type="text/css" href="jquery/themes/base/jquery.ui.all.css" rel="stylesheet"/>
    <script type="text/javascript">
    $(function() {
       
        $("#tags").autocomplete({
            source: "recibe.php"
        });
    });
    </script>
</head>
<body>
   <input type="text" id="tags" />
</body>
</html>