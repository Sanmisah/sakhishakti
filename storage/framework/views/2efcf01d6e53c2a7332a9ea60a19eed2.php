
<?php if (isset($component)) { $__componentOriginal1d4e40438baebe03e79704896ba2f23a = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.auth','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.auth'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  

<div class="flex justify-center items-center min-h-screen bg-gradient-to-t from-[#c39be3] to-[#f2eafa]">
        <div class="text-center p-5 font-semibold">
            <h2 class="text-[50px] md:text-[80px] leading-none mb-8 font-bold">Error 404</h2>
            <h4 class="mb-5 font-semibold text-xl sm:text-5xl text-primary">Ooops!</h4>
            <p class="text-base">The page you requested was not found!</p>
            <a href="/" class="btn btn-primary mt-10 w-max mx-auto">Home</a>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1d4e40438baebe03e79704896ba2f23a)): ?>
<?php $component = $__componentOriginal1d4e40438baebe03e79704896ba2f23a; ?>
<?php unset($__componentOriginal1d4e40438baebe03e79704896ba2f23a); ?>
<?php endif; ?>  
<?php /**PATH /home/sanmisha/@Projects/sakhishakti/resources/views/errors/404.blade.php ENDPATH**/ ?>