<?php
/**
 * Sample layout
 */

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;
use Helpers\Session;
use Helpers\Database;
use Models\Login2;

//initialise hooks
$hooks = Hooks::get();
?>

<?php
//hook for plugging in code into the footer
$hooks->run('footer');

?>




</body>
</html>
