<?php
include_once dirname(__FILE__).'/init_rebuilder.php';

$deferred=array(
    'deferred_id'=>0,
    'unique_key'=>'Trophy',
    'execute_class'=>'Trophy',
    'execute_data'=> array(
            'batch' => 200,
            'position' => 0
    ),
    'manual_execute'=>1,
    'trigger_date'=>time(),
);

cliRunDeferredTask($deferred);