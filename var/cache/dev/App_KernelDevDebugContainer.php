<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMWwErb8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMWwErb8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMWwErb8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMWwErb8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMWwErb8\App_KernelDevDebugContainer([
    'container.build_hash' => 'MWwErb8',
    'container.build_id' => 'aef0052e',
    'container.build_time' => 1666967630,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMWwErb8');
