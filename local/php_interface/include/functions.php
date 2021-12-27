<?php
// use ...

use Bitrix\Main\Loader;
use Bitrix\Iblock\IblockTable;

/**
 * Возвращает ID инфоблока по его символьному коду
 * 
 * @param string $code - код ИБ
 * 
 * @return int - ID найденного ИБ
 * @throws Exception
 */

function getIblockIdByCode($code): int
{
	Loader::includeModule('iblock');

	$iblock = IblockTable::getList([
		'filter' => [
			'CODE' => $code,
		],
		'select' => [
			'ID',
			'CODE',
		],
	])->fetch();

	if(!isset($iblock['ID'])) {
		throw new Exception("Не найден инфоблок с кодом ($code)");
	}

	return (int) $iblock['ID'];
}
