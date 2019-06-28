# Linker Core

## Installation
- No required to installation. You should configure to /content/config/
- config.email.php, config.php
## Classes
### Linkify class
- require_once("system/class/class.linkify.php");	
- $linkify = new Linkify();
- $linkify->BASE_URI = $base_site_url
- GET BASE URL -> $linkify->base_url();
### Uploadify class

### Database class
- There are two types of classes. Type 1 is Linker methods, type 2 is PDO crud methods.
- - Linker methods on /content/system/class/class.database.php
- - PDO crud methods on /content/system/class/class.coreDatabase.php

# Linker CMS
Repository of the Linker Core &amp; Linker CMS
