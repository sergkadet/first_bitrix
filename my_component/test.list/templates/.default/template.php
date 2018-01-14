<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<p class="news-item">
<br />    
<b><?=$arItem['NAME'];?></b>
<br />
<b><?=$arItem['TIMESTAMP_X'];?></b>
<br />

		<?foreach($arItem["NAME_USERS"] as $code=>$value):?>
			<small>
			<?=GetMessage("NAME_USERS")?> :&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
<br />        
		<?foreach($arItem["ID_ELEMENT"] as $code=>$value):?>
			<small>
			<?=GetMessage("ID_ELEMENT")?> :&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<div style="clear: both;"></div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
