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


<div class="single-practice-areas-box">
	<div class="img-box">
		<img class="img-fluid" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="01 Blog">
		<ul>
			<li><a class="price-detail"><?=$arResult["PROPERTIES"]["price"]["VALUE"]?></a></li>
		</ul>
	</div>
	<h3><?=$arResult["NAME"]?></h3>
	<p class="services-detail-text"><?=$arResult["DETAIL_TEXT"]?></p>

	<a class="summonFormButton btn-1" href="<?=SITE_DIR?>">Заказать звонок</a>
</div>



<div class="service-linked-items">
	<?if(!CModule::IncludeModule("iblock"))
	return;?>

	<?if($arResult["PROPERTIES"]["reviews"]["VALUE"]):?>
		<?
		$i = 0;
		?>
		<h4 class="linked-items-title"><?=GetMessage("REVIEWS_TITLE")?></h4>
		<div class="row">
			<div class="owl-testimonial-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["reviews"]["VALUE"] as $itemId):?>

				<?
				$res = CIBlockElement::GetByID($itemId);
				if($ar_res = $res->GetNext()) {?>

					<?
					$db_props = CIBlockElement::GetProperty($ar_res["IBLOCK_ID"], $ar_res["ID"], "sort", "asc", array());
					while ($ar_props = $db_props->Fetch())
					{?>

						<div class="box-item">
							<div class="text-box">
								<p><?=$ar_res["PREVIEW_TEXT"]?></p>

								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-reviews<?=$i?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>
							</div>
							<div class="clients-talk">
								<?if($ar_res["PREVIEW_PICTURE"]):?>
									<div class="img-box">
										<img class="img-fluid" src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="01 Testimonials">
									</div>
								<?endif;?>
								
								<div class="info">
									<h5><?=$ar_res["NAME"]?></h5>
									<span><?=$ar_props["VALUE"];?></span>
								</div>
							</div>

							<div class="testimonial_popup content_fancybox_modal" style="display: none;" id="hidden-content-reviews<?=$i?>">
								<div class="text-box">
									<p><?=$ar_res["PREVIEW_TEXT"]?></p>
								</div>
								<div class="clients-talk">
									<?if($ar_res["PREVIEW_PICTURE"]):?>
										<div class="img-box">
											<img class="img-fluid" src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="01 Testimonials">
										</div>
									<?endif;?>
									
									<div class="info">
										<h5><?=$ar_res["NAME"]?></h5>
										<span><?=$ar_props["VALUE"];?></span>
									</div>
								</div>
							</div>
						</div>
						<?$i = $i + 1;?>
					<?}?>
				<?}?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>

	<?if($arResult["PROPERTIES"]["promo"]["VALUE"]):?>
		<?
		$n = 0;
		?>
		<h4 class="linked-items-title"><?=GetMessage("PROMO_TITLE")?></h4>
		<div class="row">
			<div class="owl-promo-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["promo"]["VALUE"] as $itemId):?>

				<?
				$res = CIBlockElement::GetByID($itemId);
				if($ar_res = $res->GetNext()) {?>

					<?
					$db_props = CIBlockElement::GetProperty($ar_res["IBLOCK_ID"], $ar_res["ID"], "sort", "asc", array());
					while ($ar_props = $db_props->Fetch())
					{?>

						<div class="col">
							<div class="item-careers">
								<h4><a><?=$ar_res["NAME"]?></a></h4>
								<ul>
									<li class="active"><?echo FormatDateFromDB($ar_res["DATE_ACTIVE_TO"], 'SHORT');?></li>
									<li><?=$ar_props["VALUE"];?></li>
								</ul>

								<?if($ar_res["PREVIEW_PICTURE"]):?>
									<div class="discounts-image">
										<img src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="image">
									</div>
								<?endif;?>

								<p><?=$ar_res["PREVIEW_TEXT"]?></p>

								<a class="testimonial-expand-button" data-fancybox data-src="#hidden-content-discounts<?=$n?>" href="javascript:;">
									<?=GetMessage("BUTTON_DETAIL");?>
								</a>

								<a href="#" class="summonFormButton btn-1 discounts__button"><?echo GetMessage("REQUEST_CALL")?></a>

								<div class="item-careers_popup content_fancybox_modal" style="display: none;" id="hidden-content-discounts<?=$n?>">
									<h4><a><?=$ar_res["NAME"]?></a></h4>
									<ul>
										<li class="active"><?echo FormatDateFromDB($ar_res["DATE_ACTIVE_TO"], 'SHORT');?></li>
										<li><?=$ar_props["VALUE"];?></li>
									</ul>

									<?if($ar_res["PREVIEW_PICTURE"]):?>
										<div class="discounts-image">
											<img src="<?echo CFile::GetPath($ar_res["PREVIEW_PICTURE"]);?>" alt="image">
										</div>
									<?endif;?>

									<p><?=$ar_res["PREVIEW_TEXT"]?></p>

									<a href="#" class="summonFormButton btn-1 discounts__button"><?echo GetMessage("REQUEST_CALL")?></a>
								</div>

							</div>
						</div>
						<?$n = $n + 1;?>
					<?}?>
				<?}?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>

	<?if($arResult["PROPERTIES"]["lawyer"]["VALUE"]):?>
		<h4 class="linked-items-title"><?=GetMessage("LAWYER_TITLE")?></h4>
		<div class="row">
			<div class="owl-advisors-2 owl-carousel owl-theme">
				<?foreach($arResult["PROPERTIES"]["lawyer"]["VALUE"] as $itemId):?>
					<?
					$res = CIBlockElement::GetByID($itemId);
					if($item = $res->GetNext()) {
					$props = CIBlockElement::GetByID($itemId)->GetNextElement()->GetProperties();?>

					<div class="advisors-item">
						<div class="advisors-box">
							<div class="img-box">
								<img class="img-fluid" src="<?echo CFile::GetPath($item["PREVIEW_PICTURE"]);?>" alt="advisor">
								<div class="img-box-hover">
									<ul>
										<?if($props["link_Vk"]["VALUE"]):?>
											<li><a href="<?=$props["link_Vk"]["VALUE"];?>"><i class="fab fa-vk"></i></a></li>
										<?endif;?>

										<?if($props["link_Instagram"]["VALUE"]):?>
											<li><a href="<?=$props["link_Instagram"]["VALUE"];?>"><i class="fab fa-instagram"></i></a></li>
										<?endif;?>

										<?if($props["link_Facebook"]["VALUE"]):?>
											<li><a href="<?=$props["link_Facebook"]["VALUE"];?>"><i class="fab fa-facebook-f"></i></a></li>
										<?endif;?>

										<?if($props["link_Twitter"]["VALUE"]):?>
											<li><a href="<?=$props["link_Twitter"]["VALUE"];?>"><i class="fab fa-twitter"></i></a></li>
										<?endif;?>

										<?if($props["link_Youtube"]["VALUE"]):?>
											<li><a href="<?=$props["link_Youtube"]["VALUE"];?>"><i class="fab fa-youtube"></i></a></li>
										<?endif;?>
									</ul>
								</div>
							</div>
							
							<div class="text-box text-center">
								<a href="<?=$item["DETAIL_PAGE_URL"]?>"><h5><?=$item["NAME"]?></h5></a>
								<span><?=$props["speciality"]["VALUE"];?></span>
							</div>
						</div>
					</div>

					<?};?>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>
</div>