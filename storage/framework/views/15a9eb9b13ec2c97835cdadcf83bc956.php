<?php if (isset($component)) { $__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.default','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="<?php echo e(route('visitors.index')); ?>" class="text-primary hover:underline">Visitors</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Add</span>
        </li>
    </ul>       
    <div class="pt-5">
        <form action="<?php echo e(route('addMedicalAssessment')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Add Visitor Code </h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'visitor_code','value' => ''.e(old('visitor_code')).'','label' => __('Visitor Code'),'messages' => $errors->get('visitor_code'),'require' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'visitor_code','value' => ''.e(old('visitor_code')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Visitor Code')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('visitor_code')),'require' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>  
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6)): ?>
<?php $component = $__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6; ?>
<?php unset($__componentOriginal9d5893b966d42bc9a39e2bb81c9df0c6); ?>
<?php endif; ?>
<?php /**PATH /home/sanmisha/@Projects/sakhishakti/resources/views/visitors/add.blade.php ENDPATH**/ ?>