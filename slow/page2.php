<?php

sleep(6);

echo '<?xml version="1.0" encoding="iso-8859-1" ?>';
echo ' <vxml version="2.0" xmlns="http://www.w3.org/2001/vxml">';
echo '  <form>';

echo '   <block>';
echo '    <submit next="page3.php" method="post"/>';
echo '   </block>';

echo '  </form>';
echo ' </vxml>';

?>