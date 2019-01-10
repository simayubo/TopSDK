<?php
/**
 * TOP API: taobao.dmp.dataupload.start request
 * 
 * @author auto create
 * @since 1.0, 2015.04.22
 */
class DmpDatauploadStartRequest
{
	/** 
	 * 表名
	 **/
	private $tablecode;
	
	private $apiParas = array();
	
	public function setTablecode($tablecode)
	{
		$this->tablecode = $tablecode;
		$this->apiParas["tablecode"] = $tablecode;
	}

	public function getTablecode()
	{
		return $this->tablecode;
	}

	public function getApiMethodName()
	{
		return "taobao.dmp.dataupload.start";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tablecode,"tablecode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
