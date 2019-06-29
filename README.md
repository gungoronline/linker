# Linker Core

## Installation
- No required to installation. You should configure to /content/config/
- config.email.php, config.php
## Admin Dashboard
- Linker Core's you haven't a admin dashboard with Linker Core. for this, You would like to Linker CMS ?
## Classes
### Linkify class
- require_once("system/class/class.linkify.php");	
- $linkify = new Linkify();
- $linkify->BASE_URI = $base_site_url
- GET BASE URL -> $linkify->base_url();
### Uploadify class
### Datetimes class
- require_once("system/class/class.datetimes.php");
- $dateTime = new DateTimes();
- echo $dateTime->getTimeStamp();
- echo $dateTime->getDayCountBetweenDates('01.03.2019','07.03.2019');
- echo $dateTime->getDateNow(2);
- print_r($dateTime->getToDate());

### Database class
- There are 3 types of classes. Type 1 is Linker methods, type 2 and type 3 are PDO crud methods.
- - Linker methods on /content/system/class/class.database.php
- - PDO crud methods on /content/system/class/class.coreDatabase.php
- - PDO crud methods on /content/system/class/class.coreDatabaseSqlite.php

## Benefits
- Instant SEO (after then installation)
- - Sitemap.xml, feed.xml ready
- - SEO Friendly URL
- Mobile App Web Services Ready !
- Webservice to Webservice (Share with another website)
- Theme Selection/Change system
- Theme Repository system.
- Installation system

# Linker CMS
Repository of the Linker Core &amp; Linker CMS

## Installation
- visit to /installer/install.php file. If you create with successfully, this folder delete after installation.
- After the installation, should be change or creating to /content/config folder in sql.install.php, config.php, config.email.php files. Don't lose them.


# We Team
- Şerif GÜNGÖR (Lead of Linker CMS)
