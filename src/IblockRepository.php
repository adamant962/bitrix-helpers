<?php

declare(strict_types=1);

namespace Tanais;

class IblockRepository implements IblockRepositoryInterface
{
    private int $iblockId;

    public function __construct($iblockId) {
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
}