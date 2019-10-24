<?php

namespace Codeception\Extension;

use Codeception\Events;
use Codeception\Extension;
use Codeception\Event\TestEvent;

class PauseOnFail extends Extension {
    public static $events = [
        Events::TEST_FAIL => 'pause',
        Events::TEST_ERROR => 'pause'
    ];

    public function pause(TestEvent $event)
    {
	    $metaData = $event->getTest()->getMetadata()->getCurrent();

	    $actor = $metaData['actor'];
	    $I = new $actor($event->getTest()->getScenario());
	    $I->pause();
    }
}

