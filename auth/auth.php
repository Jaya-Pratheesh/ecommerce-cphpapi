<?php

require_once "authorise.php";

use authorisation\authorise as authGuard;

 $_guard = authGuard::auth(apache_request_headers());
