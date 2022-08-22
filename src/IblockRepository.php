<?php

declare(strict_types=1);

namespace Tanais;

class IblockRepository implements IblockRepositoryInterface
{
    private int $iblockId;

    public function __construct($iblockId)
    {
        $this->iblockId = $iblockId;
    }

    public function getElementById(int $element_id): IblockElementInterface
    {
        $arSelect = [
            "ID",
            "NAME",
            "CODE",
            "XML_ID",
            'PREVIEW_TEXT',
            'DETAIL_TEXT',
            'PREVIEW_PICTURE'
        ];

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

    public function getSectionById(int $section_id): IblockSectionInterface
    {
        $arSelect = [
            "ID",
            "NAME",
            "CODE",
            "XML_ID",
            'DEPTH_LEVEL',
            'IBLOCK_SECTION_ID'
        ];

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