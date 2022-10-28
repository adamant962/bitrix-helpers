<?php

declare(strict_types=1);

namespace BitrixHelp;

class IblockRepository implements IblockRepositoryInterface
{
    private int $iblockId;

    public function __construct($iblockId)
    {
        $this->iblockId = $iblockId;
    }

    public function getElementById(int $element_id, array $ar_select): IblockElementInterface
    {
        $arSelect = $ar_select;

        $arFilter = [
            "IBLOCK_ID" => $this->iblockId,
            "ID" => $element_id,
        ];

        $result_data = \CIBlockElement::GetList([], $arFilter, false, false, $arSelect)->Fetch();

        if ($result_data) {
            return new IblockElement($result_data);
        }

        throw new \Exception('Iblock element not found');
    }

    public function getSectionById(int $section_id, array $ar_select): IblockSectionInterface
    {
        $arSelect = $ar_select;

        $arFilter = [
            "IBLOCK_ID" => $this->iblockId,
            "ID" => $section_id,
        ];

        $result_data = \CIBlockSection::GetList([], $arFilter, false, $arSelect, false)->Fetch();

        if ($result_data) {
            return new IblockSection($result_data);
        }

        throw new \Exception('Iblock element not found');
    }
}