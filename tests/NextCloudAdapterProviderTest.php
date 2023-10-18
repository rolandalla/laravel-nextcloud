<?php

namespace  Roland\NextCloudAdapter\Tests;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\WebDAV\WebDAVAdapter;
use Tests\TestCase;

class NextCloudAdapterProviderTest extends TestCase
{


    /** @test */
    public function it_registers_a_nextCloud_driver()
    {
        $filesystem = Storage::disk('nextCloud');
        $adapter = $filesystem->getAdapter();

        $this->assertInstanceOf(WebDAVAdapter::class, $adapter);
    }
}
