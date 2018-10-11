<?php

include_once 'includes/auth.php';

logout();

header("Location: inlog.php?logout=success");
exit();
