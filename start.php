<?php
require_once('/var/www/simplesaml/lib/_autoload.php');
$as = new SimpleSAML_Auth_Simple('default-sp');
$as->requireAuth();
$attr=$as->getAttributes();
$name=$as->getAuthData("saml:sp:NameID");

include('db_login.php');

$connection = mysql_connect($db_host, $db_username, $db_password);
if(!$connection){
  die ("Could not connect to the database: <br />". mysql_error());
}

$db_select = mysql_select_db($db_database);
if(!$db_select){
  die ("Could not select the database: <br />". mysql_error());
}
?>
<html>
<body>
<h1>ServiceProvider_2</h1>
<h2>ログインが完了しました</h2>
<pre><?php
    $uid = $attr['uid'][0];
    $idp = $attr['idp'][0];
    print('ユーザID : '.htmlspecialchars($uid)."<br />");

    print_r($attr)

    //$not_null1="SELECT uid FROM users WHERE idp1_uid = $uid";
    //$not_null2="SELECT uid FROM users WHERE idp2_uid = $uid";
    //$isnt_null1=mysql_query($not_null1);
    //$isnt_null2=mysql_query($not_null2);
    //if(!$isnt_null1){
    //  if(!isnt_null2){
    //          $query = "INSERT INTO users VALUES ('$user_id', '$mig_id', NULL)";
    //          $result = mysql_query($query);
    //          if(!$result) {
    //                  die ("Could not query the database: <br />".mysql_error());
    //          }
    //          echo "Inserted succesfully!";
    //}
    //else{
    //  echo "User exists";
    //}
?></pre>
<form action="http://ap.local/sample/" method="post">
<input type="hidden" name="mig_id" value="<?php echo substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8); //ランダム文字列生成(引継ID) ?>">
<input type="hidden" name="user_id" value="<?php echo $uid; ?>">
<input type="hidden" name="idp" value="<?php echo $idp; ?>">
<input type="hidden" name="sp" value="sp2">
<input type="submit" value="お引越しサービスに登録する">
</form>
<form action="http://ap.local/sample/migr.php" method="post">
<input type="hidden" name="user_id" value="<?php echo $uid; ?>">
<input type="hidden" name="idp" value="<?php echo $idp; ?>">
<input type="hidden" name="sp" value="sp2">
<input type="submit" value="IdPのお引越しを行う">
</form>
<a href="logout.php">ログアウト</a>
</body>
</html>
