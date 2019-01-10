<?php
/**
 * TOP API: taobao.zuanshi.banner.creative.bind request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiBannerCreativeBindRequest
{
	/** 
	 * 单元ID
	 **/
	private $adgroupId;
	
	/** 
	 * 计划ID
	 **/
	private $campaignId;
	
	/** 
	 * 创意ID列表
	 **/
	private $creativeIdList;
	
	private $apiParas = array();
	
	public function setAdgroupId($adgroupId)
	{
		$this->adgroupId = $adgroupId;
		$this->apiParas["adgroup_id"] = $adgroupId;
	}

	public function getAdgroupId()
	{
		return $this->adgroupId;
	}

	public function setCampaignId($campaignId)
	{
		$this->campaignId = $campaignId;
		$this->apiParas["campaign_id"] = $campaignId;
	}

	public function getCampaignId()
	{
		return $this->campaignId;
	}

	public function setCreativeIdList($creativeIdList)
	{
		$this->creativeIdList = $creativeIdList;
		$this->apiParas["creative_id_list"] = $creativeIdList;
	}

	public function getCreativeIdList()
	{
		return $this->creativeIdList;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.banner.creative.bind";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->creativeIdList,"creativeIdList");
		RequestCheckUtil::checkMaxListSize($this->creativeIdList,20,"creativeIdList");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
