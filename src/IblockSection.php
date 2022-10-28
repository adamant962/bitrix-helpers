<?php

declare(strict_types=1);

namespace BitrixHelp;

class IblockSection implements IblockSectionInterface
{
    private array $section_data;
    private ?string $section_code = null;
    private ?string $section_xmlId = null;
    private ?string $section_iblock_section_id = null;


    public function __construct(array $section_data)
    {
        $this->section_data = $section_data;
    }

    public function getId(): string
    {
        return $this->section_data['ID'];
    }

    public function getName(): string
    {
        return $this->section_data['NAME'];
    }

    public function getCode(): ?string
    {
        if ($this->section_code !== null) {
            return $this->section_code;
        }

        if (!empty($this->section_data['CODE'])) {
            $this->section_code = $this->section_data['CODE'];
        }

        return $this->section_code;
    }

    public function getXmlId(): ?string
    {
        if ($this->section_xmlId !== null) {
            return $this->section_xmlId;
        }

        if (!empty($this->section_data['XML_ID'])) {
            $this->section_xmlId = $this->section_data['XML_ID'];
        }

        return $this->section_xmlId;
    }

    public function getDepthLevel(): string
    {
        return $this->section_data['DEPTH_LEVEL'];
    }

    public function getIblockSectionId(): ?string
    {
        if ($this->section_iblock_section_id !== null) {
            return $this->section_iblock_section_id;
        }

        if (!empty($this->section_data['IBLOCK_SECTION_ID'])) {
            $this->section_iblock_section_id = $this->section_data['IBLOCK_SECTION_ID'];
        }

        return $this->section_iblock_section_id;
    }
}