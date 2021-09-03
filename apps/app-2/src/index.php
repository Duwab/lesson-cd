<?php

$readJSONFile = file_get_contents('../config.json');
$array = json_decode($readJSONFile, TRUE);
$version = $array['version'];

?>

<h1>Hello World</h1>
<p>
    This is <code>app-2</code> version: <code><?php echo $version; ?></code>
</p>