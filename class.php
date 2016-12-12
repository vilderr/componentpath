<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

class NEWComponent extends CBitrixComponent
{ 
  public function onPrepareComponentParams($arParams)
	{	
  	return $arParams;
	}
	
	public function executeComponent()
	{	
  	return parent::executeComponent();
	}
}