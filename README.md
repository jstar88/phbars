phbars
======

css3 bars built with php

### Example of usage:

```php
<?php

include ('GetBars.php');

$first = array(
    'name' => 'first',
    'currentVal' => 10,
    'maxVal' => 100);
$second = array(
    'name' => 'second',
    'currentVal' => 60,
    'maxVal' => 120);   
$third = array(
    'name' => 'third',
    'currentVal' => 200,
    'maxVal' => 200);

$infos = array($first, $second, $third);
$size = "300px";
$precision = 0;
$path = substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));

echo '
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="' . $path . '/formate.css">
        </head>
        <body>
            ' . GetBars($infos, $size, $precision) . '    
        </body>
    </html>';

?>
```

![screenshot](https://github.com/jstar88/phbars/blob/master/screen.PNG?raw=true "screenshot")
