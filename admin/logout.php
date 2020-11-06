<?php
//session_save_path("/home/users/web/b2830/ipg.rehltycom/cgi-bin/tmp");
session_start();

session_unset();

session_destroy();

die("<meta http-equiv='refresh' content='0; url=index.php'> ");