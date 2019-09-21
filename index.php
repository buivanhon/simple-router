<?php

require __DIR__.'/bootstrap/app.php';


Router::load('routes/web.php')
            ->direct(Request::uri());


var_dump(App::$registry);
//var_dump(get_included_files());

?>