<?php
/**
 * Created by PhpStorm.
 * User: pawww
 * Date: 12.11.2018
 * Time: 16:10
 * Не понятно зачем такой класс нужен, если
 */

class IblockElement
{

    /**
     * @param array $arOrder
     * @param array $arFilter
     * @param array $arSelect
     * @param int $cacheTime
     * @return array
     */
    public static function getList($arOrder = [], $arFilter = [], $arSelect = [], $cacheTime = 3600) {
        Bitrix\Main\Loader::includeModule('iblock');
        $arResult = [];
        $dbQuery = \Bitrix\Iblock\ElementTable::getList([
            'order' => $arOrder,
            'filter' => $arFilter,
            'select' => $arSelect,
            'cache' => [
                'ttl' => $cacheTime,
                'cache_joins' => true
            ]
        ]);
        while ($element = $dbQuery->fetch()) {
            $arResult[] = $element;
        }
        return $arResult;
    }
}