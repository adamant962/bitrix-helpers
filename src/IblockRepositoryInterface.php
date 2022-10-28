<?php

declare(strict_types=1);

namespace BitrixHelp;

interface IblockRepositoryInterface
{
    /**
     * @param int $element_id идентификатор элемента
     */
    public function getElementById(int $element_id, array $ar_select): IblockElementInterface;

    public function getSectionById(int $element_id, array $ar_select): IblockSectionInterface;
}