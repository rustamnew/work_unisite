<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<?
$nameReq;
$phoneReq;
$messageReq;
foreach($arParams["REQUIRED_FIELDS"] as $item):?>
	<?if($item === "NAME") {
		$nameReq = true;
	}?>

	<?if($item === "PHONE") {
		$phoneReq = true;
	}?>

	<?if($item === "MESSAGE") {
		$messageReq = true;
	}?>
<?endforeach;?>



<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}?>


<section class="contact py-100">
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="sec-title sec-title-2 text-center">
					<h2>Have A Question</h2>
					<h3>Get in touch.</h3>
					<p>Consulto specially designed for Consulting and Finance industry, Financial Advisors, Accountants, Consultants or other Finance and Consulting related businesses.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="row quote">
					<form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="feedback-form">
						<?=bitrix_sessid_post()?>
						<div class="col-md-6">
							<div class="quote-item">
								<label>Your Full Name</label>
								<input type="text" name="user_name" placeholder="<?echo GetMessage("YOUR_NAME")?>" <?if($nameReq):?>required<?endif;?>>

							</div>
						</div>
						<div class="col-md-6">
							<div class="quote-item">
								<label>Your PHONE</label>
								<input type="text" name="user_phone" placeholder="<?echo GetMessage("YOUR_PHONE")?>" <?if($phoneReq):?>required<?endif;?>>

							</div>
						</div>
						<div class="col-md-12">
							<div class="quote-item">
								<label>Your Subject</label>
								<input type="text" name="user_subject" placeholder="<?echo GetMessage("YOUR_SUBJECT")?>" <?if($phoneReq):?>required<?endif;?>>

							</div>
						</div>
						<div class="col-md-12">
							<div class="quote-item">
								<label>Your Message</label>
								<textarea name="MESSAGE" placeholder="<?echo GetMessage("YOUR_MESSAGE")?>" <?if($messageReq):?>required<?endif;?>><?=$arResult["MESSAGE"]?></textarea>
							</div>

							<?if($GLOBALS['global_info']['captcha_show']):?>
								<div class="captcha-wrap">
									<div class="g-recaptcha" id="recaptcha_mainform"></div>
								</div>
							<?endif;?>
						</div>
						<div class="col-md-6">
							<input type="hidden" name="FORM_PAGE" value="<?=$arParams["FORM_PAGE"]?>">
							<input type="hidden" name="FORM_SECTION" value="<?=$arParams["FORM_SECTION"]?>">
							<input type="hidden" name="FORM_TYPE" value="<?=$arParams["FORM_TYPE"]?>">
							
							<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn-1">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>