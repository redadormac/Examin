<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container47xNiwl\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container47xNiwl/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container47xNiwl.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container47xNiwl\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container47xNiwl\srcDevDebugProjectContainer(array(
    'container.build_hash' => '47xNiwl',
    'container.build_id' => '362dfea9',
    'container.build_time' => 1525098595,
));
