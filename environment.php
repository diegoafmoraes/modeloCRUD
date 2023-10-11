<?php

switch($_SERVER['HTTP_HOST']):

	case "site.test":
		define("ENVIRONMENT", "development");
		break;
	case "localhost":
		define("ENVIRONMENT", "development");
		break;
	case "localhost:8080":
		define("ENVIRONMENT", "development");
		break;
	default:
	define("ENVIRONMENT", "production");

endswitch;