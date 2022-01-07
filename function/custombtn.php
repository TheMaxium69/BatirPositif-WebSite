<?php
function custombtn($url, $text, $textColor, $backgroundColor)
{
    echo '<a class="custombtn" style="color: '. $textColor .'; background-color: '. $backgroundColor.';" href="'. $url .'">'. $text .'</a>';
}
?>



