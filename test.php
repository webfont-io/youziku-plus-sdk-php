<?php
require_once 'client/youzikuServicePlusClient.php';

$youzikuServicePlusClient = new youzikuServicePlusClient("xxx");

$option = array (
	"ranNumber" => "true",
	"ranChinese" => "true",
	"ranEnglish" => "true"
);

//1.处理全部文本（全格式）
//$param = array (
//	"accessKey" => "xxx",
//	"content" => "有字库，让中文跃上云端！",
//	"tag" => "#id1,.class1",
//	"useRanFontFamily" => "true",
//	"option" => $option
//);
//$result1 = $youzikuServicePlusClient->getFontFace($param);
//echo var_dump($result1);

//2.处理全部文本（WOFF）
//$param2 = array (
//	"accessKey" => "xxx",
//	"content" => "有字库，让中文跃上云端！",
//	"tag" => "#id1,.class1",
//	"useRanFontFamily" => "true",
//	"option" => $option
//);
//
//$result2 = $youzikuServicePlusClient->getWoffFontFace($param2);
//
//echo var_dump($result2);


//3.处理指定文本(全格式)

//$param3 = array (
//	"accessKey" => "xxx",
//	"content" => "有字库，让中文跃上云端",
//	"tag" => "#id1,.class1",
//	"useRanFontFamily" => "false",
//	"option" => $option,
//	"text"=>"有字库"
//);
//
//$result3 = $youzikuServicePlusClient->getScopeFontFace($param3);
//
//echo var_dump($result3);



//4.处理指定文本（ WOFF）

//$param4 = array (
//	"accessKey" => "xxx",
//	"content" => "有字库，让中文跃上云端",
//	"tag" => "#id1,.class1",
//	"useRanFontFamily" => "false",
//	"option" => $option,
//	"text"=>"有字库"
//);
//
//$result4 = $youzikuServicePlusClient->getScopeWoffFontFace($param4);
//
//echo var_dump($result4);
?>