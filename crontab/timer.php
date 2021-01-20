<?php
use Workerman\Worker;
use Workerman\Timer;

require_once __DIR__ . '/vendor/autoload.php';

$task = new Worker();
$task->onWorkerStart = function ($task) {
    // 2.5 seconds
    $time_interval = 2.5; 
    $timer_id = Timer::add($time_interval, function () {
		$second = date('s');
        echo "Timer run {$second}\n";
		file_put_contents(__DIR__ . '/1.log', date('YmdHi s') . "\n", FILE_APPEND);
    });
};

// Run all workers
Worker::runAll();

// cmd command:
// > php timer.php

