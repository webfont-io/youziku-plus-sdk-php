<?php
require_once 'config/youzikuPlusServiceMethod.php';
require_once 'validate/youzikuServicePlusValidate.php';
require_once 'core/httpClient.php';
class youzikuServicePlusClient {
	private $apiKey;
	private $httpClient;
	private $host;

	public function __construct($apiKey, $host = "http://service.youziku.com") {
		if (empty ($apiKey)) {
			throw new Exception("apiKey is null!");
		}

		$this->apiKey = $apiKey;
		$this->httpClient = new httpClient();
		$this->host = $host;
	}

	function getFontFace($param) {

		$param = youzikuServicePlusValidate :: GetFontface($param);

		$url = $this->host . youzikuPlusServiceMethod :: GetFontface;

		return $this->CommonGetFontface($url, $param);

	}

	function getWoffFontFace($param) {

		$param = youzikuServicePlusValidate :: GetFontface($param);

		$url = $this->host . youzikuPlusServiceMethod :: GetWoffFontFace;

		return $this->CommonGetFontface($url, $param);
	}

	function getScopeFontFace($param) {

		$param = youzikuServicePlusValidate :: getScopeFontface($param);

		$url = $this->host . youzikuPlusServiceMethod :: GetScopeFontface;

		return $this->CommonGetFontface($url, $param);
	}

	function getScopeWoffFontFace($param) {

		$param = youzikuServicePlusValidate :: getScopeFontface($param);

		$url = $this->host . youzikuPlusServiceMethod :: GetScopeWoffFontFace;

		return $this->CommonGetFontface($url, $param);
	}

	function CommonGetFontface($url, $param) {
		$param["apiKey"] = $this->apiKey;
		$jsonparam = json_encode($param);
		$jsonResult = $this->httpClient->Request($url, "Post", $jsonparam);
		if (empty ($jsonResult)) {
			throw new Exception("接口响应null或Empty!");
		}
		return json_decode($jsonResult);
	}

}
?>
