 <?php

function GetBars($elements = array(), $size = "519px", $precision = 0)
{
    $table = "<table width=\"$size\">";
    foreach ($elements as $info)
    {
        $table .= buildBlock($info['name'], $info['currentVal'], $info['maxVal'], $precision);
    }
    $table .= '</table>';
    return $table;
}
function buildBlock($name, $current, $max, $precision)
{
    return "
      <tr> 
         <th>$name</th>  
         <th>" . buildProgressionBar($current, $max, $precision) . "</th>
      </tr>";
}
function buildProgressionBar($current, $max, $precision)
{
    $percent = min(100, round(($current / $max) * 100, $precision));
    return "
      <div class=\"bar_main\" style=\"width:50%;height:10px;\">
         <div class=\"inglobator\">
            <div class=\"bar_background\">
               <div class=\"bar\" style=\"left:$percent%;\"></div>
            </div>
         </div>
         <div class=\"captions\">
            <div class=\"left\">$current / $max</div>
            <div class=\"right\">$percent%</div>
         </div>
      </div> ";
}

?> 