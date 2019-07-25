# Linker Core

## Installation
- No required to installation. You should configure to /content/config/
- config.email.php, config.php
## Admin Dashboard
- Linker Core's you haven't a admin dashboard with Linker Core. for this, You would like to Linker CMS ?
- if you using to Linker CMS, you can look /content/dashboard folder. There must be a folder.
## Classes
### Linkify class
- require_once("system/class/class.linkify.php");	
- $linkify = new Linkify();
- $linkify->BASE_URI = $base_site_url
- GET BASE URL -> $linkify->base_url();
### Stringify class
- require_once("system/class/class.stringify.php");	
- $stringify = new Stringify("Hello, php world ! Im programmer at linker cms");
- $stringify->isEveryCharInAlphabeth(); //true or false
- $stringify->isNumeric(); //true or false
- $stringify->charAt(0); //return character
- $stringify->toUpperCase(); //return all characters to upper
- $stringify->toLowerCase(); //return all characters to lower
- $stringify->equals("linker"); //true or false
- $stringify->length(); //return string length
- $stringify->indexOf("programmer"); //return integer
- $stringify->lastIndexOf("php"); //return integer
- $stringify->startsWith("Hello"); //return true
- $stringify->endsWith("linker"); //return false
- $stringify->splite("-"); //return array
- $stringify->toString(); //return string
- $stringify->toCharArray(); //return all characters
- $stringify->toTrim(); //removing all spaces
- $stringify->toLTrim(); //removing to left space
- $stringify->toRTrim(); //removing to right space
- $stringify->toTrim("-"); //removing to all -> -
- $stringify->toLTrim("Hello, ");
- $stringify->toRTrim("cms");
- $stringify->substring(5);
- $stringify->substring(5,10);
- $stringify->getBytes();
- $stringify->concat("test");
- $stringify->reverseString(); // show reverse to string
- $stringify->toJson();
### Uploadify class
### Thumbnailify class
### Datetimes class
- require_once("system/class/class.datetimes.php");
- $dateTime = new DateTimes();
- echo $dateTime->getTimeStamp();
- echo $dateTime->getDayCountBetweenDates('01.03.2019','07.03.2019');
- echo $dateTime->getDateNow(2);
- print_r($dateTime->getToDate());
### Calculate class
- require_once("system/class/class.calculate.php");
- $calculate = new Calculate();
- $calculate->addition(1,9); //10
- $calculate->subtraction(9,5); //4
- $calculate->multiplication(9,9); //81
- $calculate->division(10,2); //5
- $calculate->factorial(2);
- $calculate->perfectNumber(5);
- $calculate->isMod(10); //true
- $calculate->isNumeric("selam"); //false
- $calculate->isPositive(1); //true
- $calculate->isNegative(1); //false
### Database class
- There are 3 types of classes. Type 1 is Linker methods, type 2 and type 3 are PDO crud methods.
- - Linker methods on /content/system/class/class.database.php
- - PDO crud methods on /content/system/class/class.coreDatabase.php
- - PDO crud methods on /content/system/class/class.coreDatabaseSqlite.php
## POJO/Models
- model.email.php
- model.sys_blog.php
- model.sys_gallery.php
- model.sys_login.php
- model.sys_sitemap.php
- model.webservice_blogs.php
- model.webservice_categories.php
- model.webservice_home.php
- model.webservice_images.php
- model.webservice_pages.php
## Cronjobs
- controller.php
- daily
- mountly
- weekly
- yearly
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
- Visit to /installer/install.php file. If you create with successfully, this folder delete after installation.
- After the installation, should be change or creating to /content/config folder in sql.install.php, config.php, config.email.php files. Don't lose them.

## Installation with Console
- Can you install to CMS with Command Line 
- php install/install.php -u admin -p passw0rd -db dbname -dbuser username -dbpass dbuserpw -title site title -baseurl http://localhost/linkercms/
- Parameters
- - -u is Default Admin Username
- - -p is Default Admin Password
- - -db is Database Name
- - -dbuser is Database Connection Username
- - -dnpass is Database Connection User Password
- - -title is Website Title
- - -baseurl is Site URL 

# We Team
- Şerif GÜNGÖR (Lead of Linker CMS)
