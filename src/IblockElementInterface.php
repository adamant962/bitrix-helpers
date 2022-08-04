<?php

declare(strict_types=1);

namespace Tanais;

interface IblockElementInterface
{
    /** Идентификатор */
    public function getId(): int;

    /** Наименование */
    public function getName(): string;

    /** Символьный код */
    public function getCode(): string;

    /** Внешний код */
    public function getXmlId(): string;

    /** Превью текст */
    public function getPreviewText(): ?array;

    /** Превью изображение */
    public function getPreviewPicture(): ?array;
}