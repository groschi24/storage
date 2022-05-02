<?php

namespace Utopia\Tests;

use Utopia\Storage\Device\BackBlaze;
use Utopia\Tests\S3Base;

class BackBlazeTest extends S3Base
{
    protected function init(): void
    {

        $key = $_SERVER['BACKBLAZE_ACCESS_KEY'] ?? '';
        $secret = $_SERVER['BACKBLAZE_SECRET'] ?? '';
        $bucket = "backblaze-demo-1";

        $this->object = new BackBlaze($this->root, $key, $secret, $bucket, BackBlaze::EU_CENTRAL_003, BackBlaze::ACL_PRIVATE);
    }

    protected function getAdapterName(): string
    {
        return 'BackBlaze B2 Storage';
    }

    protected function getAdapterDescription(): string
    {
        return 'BackBlaze B2 Storage';
    }
}
