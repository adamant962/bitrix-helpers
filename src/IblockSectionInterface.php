<?php

declare(strict_types=1);

namespace BitrixHelp;

interface IblockSectionInterface
{
    /** Идентификатор */
    public function getId(): string;

    /** Наименование */
    public function getName(): string;

    /** Символьный код */
    public function getCode(): ?string;

    /** Внешний код */
    public function getXmlId(): ?string;

    /** Уровень вложенности группы. Начинается с 1. Вычисляется автоматически (не устанавливается вручную) */
    public function getDepthLevel(): string;

    /** ID группы родителя, если не задан то группа корневая */
    public function getIblockSectionId(): ?string;
}