<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVe1QKTi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVe1QKTi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVe1QKTi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVe1QKTi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVe1QKTi\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ve1QKTi',
    'container.build_id' => 'dbed7d55',
    'container.build_time' => 1670583249,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVe1QKTi');
