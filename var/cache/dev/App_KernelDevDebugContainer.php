<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\ContainerXK2F6Iq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXK2F6Iq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXK2F6Iq.legacy');
=======
if (\class_exists(\ContainerXmY5Gfg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXmY5Gfg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXmY5Gfg.legacy');
>>>>>>> 2b5a5be8c33b93a2ea2500b9c6aa226dbc5bc939

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\ContainerXK2F6Iq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXK2F6Iq\App_KernelDevDebugContainer([
    'container.build_hash' => 'XK2F6Iq',
    'container.build_id' => 'fb71f8a1',
    'container.build_time' => 1709302494,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXK2F6Iq');
=======
    \class_alias(\ContainerXmY5Gfg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXmY5Gfg\App_KernelDevDebugContainer([
    'container.build_hash' => 'XmY5Gfg',
    'container.build_id' => 'a0957694',
    'container.build_time' => 1710777559,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXmY5Gfg');
>>>>>>> 2b5a5be8c33b93a2ea2500b9c6aa226dbc5bc939
