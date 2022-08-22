<?php

declare(strict_types=1);

namespace Tanais;

interface IblockRepositoryInterface
{
    /**
     * @param int $element_id идентификатор элемента
     */
    public function getElementById(int $element_id): IblockElementInterface;

    public function getSectionById(int $element_id): IblockSectionInterface;
}