<?php
/**
 * dingtalk API: dingtalk.corp.invoice.gettitle request
 * 
 * @author auto create
 * @since 1.0, 2017.07.13
 */
class CorpInvoiceGettitleRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "dingtalk.corp.invoice.gettitle";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
