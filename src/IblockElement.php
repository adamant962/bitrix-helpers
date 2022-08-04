<?php

declare(strict_types=1);

namespace Tanais;

class IblockElement implements IblockElementInterface
{
    private array $element_data;
    private ?array $preview_picture = null;

    public function __construct(array $element_data) {
        $this->element_data = $element_data;
    }

    public function getId(): int {
        return $this->element_data['ID'];
    }

    public function getName(): string {
        return $this->element_data['NAME'];
    }

    public function getCode(): string {
        return $this->element_data['CODE'];
    }

    public function getXmlId(): string {
        return $this->element_data['XML_ID'];
    }

    public function getPreviewText(): ?array {
        return $this->element_data['PREVIEW_TEXT'];
    }

    public function getPreviewPicture(): ?array
    {
        if ($this->preview_picture !== null) {
            return $this->preview_picture;
        }

        if (!empty($this->element_data['PREVIEW_PICTURE'])) {
            $this->preview_picture = \CFile::GetFileArray(
                $this->element_data['PREVIEW_PICTURE']
            );
        }

        return $this->preview_picture;
    }
}