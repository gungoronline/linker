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
- $stringify->toUpperEveryCase(); //return every word to upper
- $stringify->equals("linker"); //true or false
- $stringify->length(); //return string length
- $stringify->indexOf("programmer"); //return integer
- $stringify->lastIndexOf("php"); //return integer
- $stringify->startsWith("Hello"); //return true
- $stringify->endsWith("linker"); //return false
- $stringify->splite("-"); //return array
- $stringify->toString(); //return string
- $stringify->toCharArray(); //return all characters
- $stringify->toTrim(" "); //removing spaces in first and last indexes
- $stringify->toTrimEvery(); //removing all spaces
- $stringify->toLTrim(" "); //removing to left space
- $stringify->toRTrim(" "); //removing to right space
- $stringify->substring(5);
- $stringify->substring(5,10);
- $stringify->getBytes();
- $stringify->concat("test");
- $stringify->reverseString(); // show reverse to string
- $stringify->reverseEachString(" "); // Hello world -> world Hello
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
- Cronjob detecter in content/check_requires.php. You can automatically forward your statistic messages to the mail address you specified on the config / config_email.php page. It is not necessary to do a server-side operation for this operation.
- You will encounter statistics visuals in mail content. You can download it as a picture.
- Folders
- - controller.php (File)
- - daily
- - mountly
- - weekly
- - yearly
## Benefits
- Instant SEO (after then installation)
- - sitemap.xml, sitemap_index.xml, keywords.xml, pages.xml, feed.xml, atom.xml ready
- - SEO Friendly URL
- Mobile App Web Services Ready !
- Daily, Weekly, Monthly and Annual Statistics Reports are Ready!
- Webservice to Webservice (Share with another website)
- Theme Selection/Change system
- Theme Repository system.
- Installation system

# Linker CMS
Repository of the Linker Core &amp; Linker CMS

## Installation
- Visit to /installer/install.php file. If you create with successfully, this folder delete after installation.
- After the installation, should be change or creating to /content/config folder in sql.install.php, config.php, config.email.php files. Don't lose them.

## Installation in Console
- Can you install to CMS with Command Line 
- php install/install.php -u admin -p passw0rd -db dbname -dbuser username -dbpass dbuserpw -title site title -baseurl http://localhost/linkercms/
- Parameters
- - -u is Default Admin Username
- - -p is Default Admin Password
- - -db is Database Name
- - -dbuser is Database Connection Username
- - -dbpass is Database Connection User Password
- - -title is Website Title
- - -baseurl is Site URL 

## Folder Tree
- index.php (File)
- .htaccess (File)
- content (Folder)
- - api
- - - json
- - - post
- - config
- - - config.email.php
- - - config.php
- - - sql.install.php
- - - config_local.php
- - cronjobs
- - - daily
- - - mountly
- - - weekly
- - - yearly
- - dashboard (For LinkerCMS)
- - external
- - - ogimage
- - package
- - - language
- - - phpMailer
- - - verotUploader
- - - phpMailSent.php
- - plugins
- - - captcha
- - pojo
- - - include_models.php
- - - model.email.php
- - - model.sys_blog.php
- - - model.sys_gallery.php
- - - model.sys_login.php
- - - model.sys_sitemap.php
- - - model.webservice_blogs.php
- - - model.webservice_categories.php
- - - model.webservice_home.php
- - - model.webservice_images.php
- - - model.webservice_pages.php
- - - model.webservice_todayOrganicSearch.php
- - sitemaps
- - - __archives.php
- - - __atomfeed.php
- - - __categories.php
- - - __galleries.php
- - - __keywords.php
- - - __pages.php
- - - __rssfeed.php
- - - __rssfeed_category.php
- - - __sitemap.php
- - - __sitemap_index.php
- - system
- - - class
- - - - class.analyseCrawlers.php
- - - - class.analyseRefers.php
- - - - class.calculate.php
- - - - class.coreDatabase.php
- - - - class.coreDatabaseSqlite.php
- - - - class.database.php
- - - - class.datetimes.php
- - - - class.functions.php
- - - - class.getip.php
- - - - class.hook.php
- - - - class.linkify.php
- - - - class.mail.phpmailer.php
- - - - class.mail.pop3.php
- - - - class.mail.smtp.php
- - - - class.pagePing.php
- - - - class.security.php
- - - - class.seo.php
- - - - class.seolink.php
- - - - class.stringify.php
- - - - class.unzipper.php
- - - - class.upload.php
- - - - include_classes.php
- - - database
- - - - offline.db
- - themes
- - - repository.json
- uploads (Folder)
- - gallery
- - images
- - pdf
- - rar

# We Team
- Şerif GÜNGÖR (Lead of Linker CMS)
