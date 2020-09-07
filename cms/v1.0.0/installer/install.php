<?php
session_start();
ob_start();

require_once '../content/config/sql.install.php';

if(@$_POST['page']==1){
    $_SESSION['dbhost']=$_POST['host'];
    $_SESSION['dbname']=$_POST['databasename'];
    $_SESSION['dbuser']=$_POST['username'];
    $_SESSION['dbpass']=$_POST['password'];
}else if(@$_POST['page']==2){
    $_SESSION['siteTitle']=$_POST['title'];
    $_SESSION['siteDescription']=$_POST['description'];
    $_SESSION['siteUrl']=$_POST['weburl'];
    $response = '<?php
 		$db_host = "'.$_SESSION['dbhost'].'";
		$db_name = "'.$_SESSION['dbname'].'";
		$db_user = "'.$_SESSION['dbuser'].'";
		$db_pass = "'.$_SESSION['dbpass'].'";
        $base_site_url = "'.$_SESSION['siteUrl'].'";
?>';
    $fp = fopen('../content/config/config.php', 'w');
    fwrite($fp, $response);
    fclose($fp);
}else if(@$_POST['page']==3){
    $_SESSION['defaultUsername']=$_POST['defaultUsername'];
    $_SESSION['defaultUserPass']=$_POST['defaultUserPass'];
}else if(@$_POST['page']==4){
    require_once '../content/system/class/class.database.php';
    createUsersTable();
    createUsersOAuthCodeTable();
    createPagesTable();
    createNoticesTable();
    createGeneralSettingsTable();
    createGalleryImagesTable();
    createGalleryTable();
    createDailyUniqueVisitorsTable();
    createDailyStatsTable();
    createCommentsTable();
    createBlogTermsTable();
    createCategoryTable();
    createBlogTable();
    header("Location: ../admin");
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link href="bootstrap.min.css" rel="stylesheet" />
<style>
body{
	height: 100%;
    margin-top: 40px;
	background-color: #e1e2e1;
	font-family: Arial;
}
.center {
	background-color:#00acc1;
	min-height:250px;
	margin: auto;
	width: 500px;
	border: 3px solid #007c91;
	padding: 10px;
}
.backgroundImage{
	height:250px;
	border: 2px solid #5ddef4;
	text-align: center;
	background-color: #fff;
	background-image: url('bg01.jpg');
	border-radius:10px;
}
.description{
	min-height:50px;
	font-size: 14px;
	margin-top:10px;
	border: 2px solid #5ddef4;
	padding:2px;
	border-radius:10px;
	background-color: #fff;
	padding:5px;
}
.action{
	margin-top:10px;
	height:auto;
	border: 2px solid #5ddef4;
	padding:2px;
	border-radius:10px;
	background-color: #fff;
}
.copyright{
	margin-top:10px;
	text-align: center;
	font-weight:bold;
	color:#007c91;
}
.copyright p{
	margin: auto;
	width: 500px;
	font-size: 12px;
}
</style>
</head>
<body>


<div class="center">
  <div id="backgroundImage" class="backgroundImage">
  </div>
  <div id="description" class="description">
  </div>
  <div class="action">
<?php
if(!isset($_POST['page'])){
?>
<form method="post" style="text-align:center; padding:5px;">
	<div class="row">
		<div class="col">
		  <input type="text" class="form-control" name="host" placeholder="Host">
		</div>
		<div class="col">
		  <input type="text" class="form-control" name="databasename" placeholder="Database Name">
		</div>
	</div>
	<div class="row">
		<div class="col">
		  <input type="text" class="form-control" name="username" placeholder="User">
		</div>
		<div class="col">
		  <input type="text" class="form-control" name="password" placeholder="Password">
		</div>
	</div>
	<div class="row" style="margin-top:5px;">
		<div class="col">
			<input type="hidden" name="page" value="1" />
		  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Bağla"/>
		</div>
	</div>
</form>
<?php
}
?>

<?php
if($_POST['page']==1){
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$actual_link = str_replace("installer/index.php","",$actual_link);
?>
<form method="post" style="text-align:center; padding:5px;">
	<div class="row">
		<div class="col-lg">
		  <input type="text" class="form-control" name="title" value="" placeholder="Web/Blog Sayfanızın Başlığı">
		</div>
	</div>
	<div class="row">
		<div class="col-lg">
		  <input type="text" class="form-control" name="description" value="" placeholder="Web/Blog Sayfa Açıklaması">
		</div>
	</div>
	<div class="row">
		<div class="col-lg">
		  <input type="text" class="form-control" name="weburl" value="<?php echo $actual_link; ?>" placeholder="Web sayfası url">
		</div>
	</div>
	<div class="row" style="margin-top:5px;">
		<div class="col">
			<input type="hidden" name="page" value="2" />
		  <input type="submit" class="btn btn-primary btn-lg btn-block" value="İlerle"/>
		</div>
	</div>
</form>
<?php
}
?>

<?php
if($_POST['page']==2){
?>
<form method="post" style="text-align:center; padding:5px;">
	<div class="row">
		<div class="col-lg">
		  <input type="text" class="form-control" name="defaultusername" value="" placeholder="Admin Username">
		</div>
	</div>
	<div class="row">
		<div class="col-lg">
		  <input type="password" class="form-control" name="defaultpassword" value="" placeholder="Admin Password">
		</div>
	</div>
	<div class="row" style="margin-top:5px;">
		<div class="col">
			<input type="hidden" name="page" value="3" />
		  <input type="submit" class="btn btn-primary btn-lg btn-block" value="İlerle"/>
		</div>
	</div>
</form>
<?php
}
?>


<?php
if($_POST['page']==3){
?>
<form method="post" style="text-align:center; padding:5px;">
	<div class="row" style="margin-top:5px;">
		<div class="col">
			<input type="hidden" name="page" value="4" />
		  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Bitir"/>
		</div>
	</div>
</form>
<?php
}
?>
  </div>
</div>
<div class="copyright"><p>Linker CMS (VERSION 1.0.1)</p><p>GUNGORONLINE INC</p></div>
<script type="text/javascript">
var index = -1;
var time = 5000;
var images = [
	'bg01.jpg',
	'bg02.jpg',
	'bg03.jpg',
	'bg04.jpg',
	'bg05.jpg',
	'bg06.jpg',
];
var texts = [
'Kurulum sadece 5 dakika kadar sürer !&nbsp; Ek kurulum ücreti asla ödemezsiniz.',
'Siteyi kurduğunuzda, Android uygulamanız dakikalar içerisinde hazırdır.',
'Tüm temalarımız %100 SEO uyumludur. Bir tema yükleyin veya satın alın.',
'Arama motorlarında üst sıralara çıkmak için sadece içeriklerinizi girin ;)',
'Henüz Destek Verdiğimiz Diller;<br>Türkçe, İngilizce, İtalyanca, Arapça, Almanca, Bulgarca, Fransızca',
'Sahip olduğunuz yönetim paneli ile, farklı sitelere de yetki alıp içerik girebilirsiniz !'
];
function init(){
	document.getElementById("description").innerHTML = texts[0];
	(function f(){
		index = (index + 1) % texts.length;
		document.getElementById("description").innerHTML = texts[index]; 
		document.getElementById("backgroundImage").style.backgroundImage = "url("+images[index]+")"; 
		console.log(texts[ index ]);
		setTimeout(f, time);
	 })();
}
init();
</script>

</body>
</html>
