<?php

declare(strict_types=1);

namespace Fabiang\AsseticBundle\View;

use assetic\asset\assetinterface;
use Laminas\View\Renderer\RendererInterface as Renderer;

interface StrategyInterface
{
    public function setRenderer(?Renderer $renderer): void;

    public function getRenderer(): ?Renderer;

    public function setBaseUrl(?string $baseUrl): void;

    public function getBaseUrl(): ?string;

    public function setBasePath(?string $basePath): void;

    public function getBasePath(): ?string;

    public function setDebug(bool $flag): void;

    public function isDebug(): bool;

    public function setCombine(bool $flag): void;

    public function isCombine(): bool;

    public function setupAsset(assetinterface $asset): void;
}
