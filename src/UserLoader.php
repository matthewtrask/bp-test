<?php

namespace Trask\BpTest;

class UserLoader
{
    /**
     * @var array
     */
    private $dataSource;

    private function loadData()
    {
        $this->dataSource = file_get_contents(__DIR__ . '../../data.json');
    }
}
