<?php
/**
 * TOP API: taobao.taojimu.pages.list request
 * 
 * @author auto create
 * @since 1.0, 2018.08.07
 */
class TaojimuPagesListRequest
{
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * true|false 倒序/正序
	 **/
	private $desc;
	
	/** 
	 * 页面名称
	 **/
	private $name;
	
	/** 
	 * 排序字段 [modify_date|create_date]
	 **/
	private $orderBy;
	
	/** 
	 * 每页条目数
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.taojimu.pages.list";
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
