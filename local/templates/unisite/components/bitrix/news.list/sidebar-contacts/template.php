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

<?$arItem = $arResult["ITEMS"][0];?>

<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="call-back" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

	<?if($arItem["PROPERTIES"]["phone_show"]["VALUE"] == "Y"):?>
		<div class="call-back-item">
			<div class="call-back-icon">
				<?$path = CFile::GetPath($GLOBALS['global_info']['icon_phone']);?>
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?$path?>>
				<?endif;?>
			</div>
			<h5><?=$arItem["PROPERTIES"]["phone_title"]["VALUE"]?></h5>

			<?if($GLOBALS['global_info']['contacts_phone_show']):?>
				<p><?=$GLOBALS['global_info']['contacts_phone1'];?></p>
				<p><?=$GLOBALS['global_info']['contacts_phone2'];?></p>
			<?endif;?>
		</div>
	<?endif;?>

	<?if($arItem["PROPERTIES"]["email_show"]["VALUE"] == "Y"):?>
		<div class="call-back-item">
			<div class="call-back-icon">
				<?$path = CFile::GetPath($GLOBALS['global_info']['icon_email']);?>
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?$path?>>
				<?endif;?>
			</div>
			<h5><?=$arItem["PROPERTIES"]["email_title"]["VALUE"]?></h5>

			<?if($GLOBALS['global_info']['contacts_email_show']):?>
				<p><?=$GLOBALS['global_info']['contacts_email1'];?></p>
				<p><?=$GLOBALS['global_info']['contacts_email2'];?></p>
			<?endif;?>
		</div>
	<?endif;?>

	<?if($arItem["PROPERTIES"]["address_show"]["VALUE"] == "Y"):?>
		<div class="call-back-item">
			<div class="call-back-icon">
				<?$path = CFile::GetPath($GLOBALS['global_info']['icon_address']);?>
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?$path?>>
				<?endif;?>
			</div>
			<h5><?=$arItem["PROPERTIES"]["address_title"]["VALUE"]?></h5>

			<?if($GLOBALS['global_info']['contacts_address_show']):?>
				<p><?=$GLOBALS['global_info']['contacts_address1'];?></p>
				<p><?=$GLOBALS['global_info']['contacts_address2'];?></p>
			<?endif;?>
		</div>
	<?endif;?>

	<?if($arItem["PROPERTIES"]["text"]["VALUE"]):?><a href="<?=$arItem["PROPERTIES"]["url"]["VALUE"];?>" class="<?if(!$arItem["PROPERTIES"]["url"]["VALUE"]):?>summonFormButton <?endif;?>btn-1 btn-2"><?=$arItem["PROPERTIES"]["text"]["VALUE"];?></a><?endif;?>
</div>
