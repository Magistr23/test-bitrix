<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul class="b-menu">

<?foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
	continue;
	?>
	<?if($arItem["SELECTED"]):?>
		<li class="menu__item">
			<a class="menu__link selected" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?else:?>
		<li class="menu__item">
			<a class="menu__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?endif?>
<?endforeach?>

</ul>
<?endif?>