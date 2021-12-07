<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="col-lg-7 col-md-7 col-sm-12">
	<div class="footer-nav white-text">
		<nav>
			<ul>
			<?
			foreach($arResult as $arItem):
				if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
					continue;
			?>
				<?if($arItem["SELECTED"]):?>
					<li class="mega-parent"><a href="<?=$arItem["LINK"]?>" style="color:#ccc"><?=$arItem["TEXT"]?></a></li>
				<?else:?>
					<li class="mega-parent"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
				<?endif?>
				
			<?endforeach?>
			</ul>
		</nav>
	</div>
</div>
<?endif?>