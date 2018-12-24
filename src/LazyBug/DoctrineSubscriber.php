<?php

declare(strict_types=1);

namespace App\LazyBug;

use Doctrine\Common\EventSubscriber;

class DoctrineSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [];
    }
}
