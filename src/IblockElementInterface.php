<?php

declare(strict_types=1);

namespace Tanais;

interface IblockElementInterface
{
    /** Идентификатор */
    public function getId(): string;

    /** Наименование */
    public function getName(): string;

    /** Символьный код */
    public function getCode(): string;

    /** Внешний код */
    public function getXmlId(): string;

    /** Превью текст */
    public function getPreviewText(): ?string;

    /** Детальный текст */
    public function getDetailText(): ?string;

    /** Превью изображение */
    public function getPreviewPicture(): ?array;
}