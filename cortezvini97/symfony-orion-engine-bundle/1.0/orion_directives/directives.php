<?php

use Orion\OrionEngine\Utils\OrionSymfony;

OrionSymfony::directive('helloworld', function ($expression) {
    return '<?php echo msg('.$expression.'); ?>';
});

return OrionSymfony::getAllDirectives();

?>
