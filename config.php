<?php

define("SITE_URL","http://localhost/saeed/");
define("APP_TITLE","برنامه اول من");


foreach (glob("lib/*.php") as $file) {
    require_once $file;
}

create_db_tables();
initialize_users();
initialize_users_1();
