<?php

if (!empty($_REQUEST['text']))
{
    $str = $_REQUEST['text'];
    $Length = strlen($str);
    $Count = count(explode(' ', $str));
    $spaceCount = $Count - 1;
    echo 'В тексте '.$Count.' слов, '.$Length.' символов.';
}
?>
    <form action="" method="get">
        <textarea name="text" placeholder="Enter text in english..."></textarea>
        <input type="submit">
    </form>
