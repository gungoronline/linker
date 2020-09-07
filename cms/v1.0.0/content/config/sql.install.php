<?php
function createUsersTable() {
    $query = "
    CREATE TABLE `__users` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `username` varchar(25) COLLATE utf8_turkish_ci NOT NULL,
      `passwrd` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
      `user_about` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
      `email` varchar(35) COLLATE utf8_turkish_ci NOT NULL,
      `name` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
      `surname` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
      `photo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
      `birthday` date NOT NULL,
      `gender` int(1) NOT NULL,
      `register_date` datetime NOT NULL,
      `register_ip` varchar(23) COLLATE utf8_turkish_ci NOT NULL,
      `authorization` int(3) DEFAULT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createUsersOAuthCodeTable() {
    $query="
    CREATE TABLE `__users_oauth_code` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `userid` int(11) NOT NULL,
      `service` int(1) NOT NULL DEFAULT '0' COMMENT 'erişim verilen = 1, erişim alınan = 2',
      `oauth_code` varchar(25) NOT NULL,
      `secret_code` varchar(25) NOT NULL,
      `oauth_site` varchar(30) NOT NULL,
      `oauth_site_title` varchar(255) NOT NULL,
      `oauth_create_datetime` datetime NOT NULL,
      `oauth_create_ip` varchar(15) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createPagesTable() {
    $query = "
    CREATE TABLE `__pages` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `page_title` varchar(255) NOT NULL,
      `page_url` varchar(255) NOT NULL,
      `page_content` text NOT NULL,
      `page_share_time` int(11) NOT NULL,
      `page_view_count` int(11) NOT NULL DEFAULT '0',
      `page_lastview` varchar(20) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createNoticesTable() {
    $query = "
    CREATE TABLE `__notice` (
      `n_id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `n_type` int(11) DEFAULT NULL,
      `n_datetime` varchar(25) NOT NULL,
      `n_title` varchar(75) NOT NULL,
      `n_content` text NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createGeneralSettingsTable($param='') {
    $query = "
    CREATE TABLE `__generalsettings` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `uniqueName` varchar(45) COLLATE utf8_turkish_ci NOT NULL UNIQUE KEY,
      `value` text COLLATE utf8_turkish_ci NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
        
    INSERT INTO `__generalsettings` (`id`, `uniqueName`, `value`) VALUES
    (1, 'blogName', 'Şerif GÜNGÖR Blog'),
    (2, 'blogSlogan', 'android,androiddersleri,java,android studio dersleri,php,programlama'),
    (3, 'blogDescription', 'Android/Java Trainer. C# MCP. PHP Developer. Entrepreneur, Founder. Some Geek <br> Life is like writing code, but you write poetry. Keyboard looks like a piano.'),
    (4, 'blogUrl', 'http://localhost:8888/'),
    (5, 'defaultLanguage', 'tr'),
    (6, 'alternateLanguage', 'en'),
    (7, 'selectedTheme', 'canvas'),
    (8, 'displayWriterPhoto', 'images/my-photo.jpg'),
    (9, 'displayAuth', '1'),
    (10, 'sendRegisterEmail', '1'),
    (11, 'loginWithCaptcha', '1');
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createGalleryImagesTable() {
    $query = "
    CREATE TABLE `__gallery_images` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `gallery_id` int(11) NOT NULL,
      `title` varchar(255) NOT NULL,
      `description` text NOT NULL,
      `image_url` varchar(255) NOT NULL,
      `view_count` int(11) NOT NULL DEFAULT '0'
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createGalleryTable() {
    $query = "
    CREATE TABLE `__gallery` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `gallery_share_userid` int(11) NOT NULL,
      `gallery_share_strtotime` varchar(25) NOT NULL,
      `gallery_update_strtotime` varchar(25) NOT NULL,
      `gallery_title` varchar(90) NOT NULL,
      `gallery_seo_link` varchar(90) NOT NULL,
      `gallery_share_mode` int(1) NOT NULL DEFAULT '0',
      `gallery_display_image` varchar(255) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createDailyUniqueVisitorsTable() {
    $query = "
    CREATE TABLE `__daily_unique_visitors` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `selectdate` text,
      `ip` text,
      `page` text,
      `useragent` text,
      `lang` text
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createDailyStatsTable() {
    $query = "
    CREATE TABLE `__daily_stats` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `selectdate` text,
      `count_daily_visits` int(11) DEFAULT NULL,
      `count_daily_referance_view` int(11) DEFAULT NULL,
      `count_daily_unique_visits` int(11) DEFAULT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createCommentsTable() {
    $query = "
    CREATE TABLE `__comments` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `comment_type` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
      `comment_targetid` int(11) NOT NULL,
      `comment_namesurname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
      `comment_email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
      `comment_website` varchar(75) COLLATE utf8_turkish_ci NOT NULL,
      `comment_title` varchar(34) CHARACTER SET utf8 NOT NULL,
      `comment_share_strtotime` varchar(20) CHARACTER SET utf8 NOT NULL,
      `comment_share_userip` varchar(15) CHARACTER SET utf8 NOT NULL,
      `comment_lang` varchar(2) COLLATE utf8_turkish_ci NOT NULL,
      `comment_content` text CHARACTER SET utf8 NOT NULL,
      `comment_action` int(1) NOT NULL DEFAULT '0'
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createBlogTermsTable() {
    $query = "
    CREATE TABLE `__blog_terms` (
      `term_id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `term_name` varchar(30) NOT NULL UNIQUE KEY,
      `term_link` varchar(30) NOT NULL,
      `term_type_id` int(3) NOT NULL,
      `term_using_count` int(11) NOT NULL DEFAULT '1',
      `term_view_count` int(11) NOT NULL DEFAULT '0'
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createCategoryTable() {
    $query = "
    CREATE TABLE `__blog_categories` (
      `id` int(11) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `visibility` int(1) NOT NULL DEFAULT '1',
      `parent` int(1) NOT NULL DEFAULT '0',
      `parent_id` int(3) NOT NULL DEFAULT '0',
      `ranking_id` int(11) NOT NULL COMMENT 'sıralama id',
      `category_name` varchar(28) NOT NULL,
      `category_link` varchar(30) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}

function createBlogTable() {
    $query = "
    CREATE TABLE `__blog` (
      `id` int(6) NOT NULL PRIMARY KEY AUTO INCREMENT,
      `blog_share_userid` int(6) NOT NULL,
      `blog_share_userip` varchar(16) NOT NULL,
      `blog_share_strtotime` varchar(25) NOT NULL,
      `blog_share_lastupdate_strtotime` varchar(25) NOT NULL,
      `blog_share_geocoords` varchar(50) NOT NULL,
      `blog_share_lang` varchar(2) NOT NULL,
      `blog_seo_title` varchar(90) NOT NULL,
      `blog_seo_link` varchar(90) NOT NULL,
      `blog_seo_ogimage` varchar(255) NOT NULL,
      `blog_seo_description` varchar(110) NOT NULL,
      `blog_seo_keywords` varchar(90) NOT NULL,
      `blog_do_category` int(4) DEFAULT NULL,
      `blog_do_content` text NOT NULL,
      `blog_do_keywords` varchar(255) NOT NULL,
      `blog_do_share_mode` int(1) NOT NULL DEFAULT '1',
      `blog_share_by_this_site` varchar(255) NOT NULL DEFAULT 'this',
      `blog_do_comment_mode` int(1) NOT NULL DEFAULT '1',
      `blog_do_viewcount` int(11) NOT NULL DEFAULT '0',
      `blog_do_lastview` varchar(25) DEFAULT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
    ";
    global $coreDatabase;
    $coreDatabase->query($query)->insert();
}
