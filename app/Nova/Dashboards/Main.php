<?php

namespace App\Nova\Dashboards;

use Demo\TestComponentA\TestComponentA;
use Demo\TestComponentB\TestComponentB;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            (new TestComponentA)->width('full'),
            (new TestComponentB)->width('full'),
//            TestComponentA::make()->width('1/1'),
//            TestComponentB::make()->width('1/1'),
            new Help,
        ];
    }
}
