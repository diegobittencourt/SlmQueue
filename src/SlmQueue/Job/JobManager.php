<?php

namespace SlmQueue\Job;

use Zend\ServiceManager\AbstractPluginManager;

class JobManager extends AbstractPluginManager
{
    /**
     * @var bool
     */
    protected $shareByDefault = false;

    /**
     * @param  mixed $plugin
     * @return bool|void
     */
    public function validatePlugin($plugin)
    {
        return $plugin instanceof JobInterface;
    }
}