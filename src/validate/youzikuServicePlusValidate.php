<?php
class youzikuServicePlusValidate {

	static function getFontface($param) {
		return youzikuServicePlusValidate :: commonGetFontface($param);
	}

	static function getScopeFontface($param) {
		youzikuServicePlusValidate :: commonGetFontface($param);
		if (!array_key_exists("text", $param)) {

			throw new Exception("text is null ！");
		}
		
		return $param;

	}

	static function commonGetFontface($param) {
		if (!is_array($param)) {

			throw new Exception("参数错误！");
		}

		if (!array_key_exists("accessKey", $param)) {

			throw new Exception("accessKey is null ！");
		}

		if (!array_key_exists("content", $param)) {

			throw new Exception("content is null ！");
		}

		if (!array_key_exists("useRanFontFamily", $param)) {
			$param["useRanFontFamily"] = "false";
		}

		if (!array_key_exists("option", $param)) {

			 $param["option"]=array();
		}

		if (!array_key_exists("ranNumber", $param["option"])) {
			$param["option"]["ranNumber"] = "true";

		}

		if (!array_key_exists("ranEnglish", $param["option"])) {
			$param["option"]["ranEnglish"] = "true";

		}

		if (!array_key_exists("ranChinese", $param["option"])) {
			$param["option"]["ranChinese"] = "true";

		}
		return $param;
	}

}
?>
