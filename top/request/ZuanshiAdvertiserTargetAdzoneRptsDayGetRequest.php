<?php
/**
 * TOP API: taobao.zuanshi.advertiser.target.adzone.rpts.day.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ZuanshiAdvertiserTargetAdzoneRptsDayGetRequest
{
	/** 
	 * 推广单元id
	 **/
	private $adgroupId;
	
	/** 
	 * 资源位id
	 **/
	private $adzoneId;
	
	/** 
	 * 计划id
	 **/
	private $campaignId;
	
	/** 
	 * 效果周期，取值范围：3,7,15。分别表示效果转化周期-3天/7天/15天。
	 **/
	private $effect;
	
	/** 
	 * 效果类型。“impression”：展现效果；“click”：点击效果
	 **/
	private $effectType;
	
	/** 
	 * 结束日期
	 **/
	private $endTime;
	
	/** 
	 * 开始日期
	 **/
	private $startTime;
	
	/** 
	 * 定向id
	 **/
	private $targetId;
	
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

	public function setAdzoneId($adzoneId)
	{
		$this->adzoneId = $adzoneId;
		$this->apiParas["adzone_id"] = $adzoneId;
	}

	public function getAdzoneId()
	{
		return $this->adzoneId;
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

	public function setEffect($effect)
	{
		$this->effect = $effect;
		$this->apiParas["effect"] = $effect;
	}

	public function getEffect()
	{
		return $this->effect;
	}

	public function setEffectType($effectType)
	{
		$this->effectType = $effectType;
		$this->apiParas["effect_type"] = $effectType;
	}

	public function getEffectType()
	{
		return $this->effectType;
	}

	public function setEndTime($endTime)
	{
		$this->endTime = $endTime;
		$this->apiParas["end_time"] = $endTime;
	}

	public function getEndTime()
	{
		return $this->endTime;
	}

	public function setStartTime($startTime)
	{
		$this->startTime = $startTime;
		$this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime()
	{
		return $this->startTime;
	}

	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
		$this->apiParas["target_id"] = $targetId;
	}

	public function getTargetId()
	{
		return $this->targetId;
	}

	public function getApiMethodName()
	{
		return "taobao.zuanshi.advertiser.target.adzone.rpts.day.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupId,"adgroupId");
		RequestCheckUtil::checkNotNull($this->adzoneId,"adzoneId");
		RequestCheckUtil::checkNotNull($this->campaignId,"campaignId");
		RequestCheckUtil::checkNotNull($this->effect,"effect");
		RequestCheckUtil::checkNotNull($this->effectType,"effectType");
		RequestCheckUtil::checkNotNull($this->endTime,"endTime");
		RequestCheckUtil::checkNotNull($this->startTime,"startTime");
		RequestCheckUtil::checkNotNull($this->targetId,"targetId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
