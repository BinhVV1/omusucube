<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerP8FTNAX\Eccube_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerP8FTNAX/Eccube_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerP8FTNAX.legacy');

    return;
}

if (!\class_exists(Eccube_KernelProdContainer::class, false)) {
    \class_alias(\ContainerP8FTNAX\Eccube_KernelProdContainer::class, Eccube_KernelProdContainer::class, false);
}

return new \ContainerP8FTNAX\Eccube_KernelProdContainer([
    'container.build_hash' => 'P8FTNAX',
    'container.build_id' => '445485b5',
    'container.build_time' => 1681526451,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerP8FTNAX');
