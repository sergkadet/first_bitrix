<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?// print_r($arResult["ITEMS"]);?>
<?foreach($arResult["ITEMS"] as $key=>$arItem){?>
<?
    $res = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], "sort", "asc", array("CODE" => "USERS"));
     while ($ob = $res->GetNext())
      {
       $rsUser = CUser::GetByID($ob['VALUE']);
       $arUser = $rsUser->Fetch();
       $arResult["ITEMS"][$key]['NAME_USERS'][]=$arUser['NAME'];       
      }

    $res = CIBlockElement::GetProperty($arItem['IBLOCK_ID'], $arItem['ID'], "sort", "asc", array("CODE" => "ELEMENTS"));
     while ($ob = $res->GetNext())
      {
       $arResult["ITEMS"][$key]['ID_ELEMENT'][]=$ob['VALUE'];       
      }

?>
<?}?>
