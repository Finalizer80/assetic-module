<?php

namespace AsseticBundleTest\CacheBuster;

use PHPUnit\Framework\TestCase;
use AsseticBundle\CacheBuster\LastModifiedStrategy,
    Assetic\Asset\FileAsset,
    Assetic\Factory\AssetFactory;

class LastModifiedStrategyTest extends TestCase
{
    public function setUp()
    {
        $this->cacheBuster = new LastModifiedStrategy();
    }

    public function testAssetLastModifiedTimestampIsPrependBeforeFileExtension()
    {
        $asset = new FileAsset(TEST_ASSETS_DIR . '/css/global.css');
        $asset->setTargetPath(TEST_PUBLIC_DIR . '/css/global.css');

        $factory = new AssetFactory('');

        $this->cacheBuster->process($asset, $factory);

        $this->assertSame(
            TEST_PUBLIC_DIR . '/css/global.' . $asset->getLastModified() . '.css',
            $asset->getTargetPath()
        );
    }
}
