<?php
use Carbon\Carbon;
?>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout.default','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout.default'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<div>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="<?php echo e(route('visitors.index')); ?>" class="text-primary hover:underline">Visitors</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Edit</span>
        </li> 
    </ul>
    <div class="pt-5" x-data="data">        
        <form class="space-y-5" action="<?php echo e(route('visitors.update', ['visitor' => $visitor->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Personal Information</h5>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'visitor_code','class' => 'bg-gray-100 dark:bg-gray-700','readonly' => 'true','value' => ''.e(old('visitor_code', $visitor->visitor_code)).'','label' => __('Visitor Code'),'messages' => $errors->get('visitor_code'),'require' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'visitor_code','class' => 'bg-gray-100 dark:bg-gray-700','readonly' => 'true','value' => ''.e(old('visitor_code', $visitor->visitor_code)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Visitor Code')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('visitor_code')),'require' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>   
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <div class="col-span-2">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'full_name','value' => ''.e(old('full_name', $visitor->full_name)).'','label' => __('Full Name'),'require' => true,'messages' => $errors->get('full_name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'full_name','value' => ''.e(old('full_name', $visitor->full_name)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Full Name')),'require' => true,'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('full_name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'dob','type' => 'date','xModel' => 'dob','value' => ''.e(old('dob')).'','xOn:change.debounce' => 'ageCalculate()','id' => 'dob','label' => __('Birth Date'),'messages' => $errors->get('dob')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'dob','type' => 'date','x-model' => 'dob','value' => ''.e(old('dob')).'','x-on:change.debounce' => 'ageCalculate()','id' => 'dob','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Birth Date')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('dob'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'age','type' => 'age','xModel' => 'age','value' => ''.e(old('age', $visitor->age)).'','label' => __('Age'),'xOn:change.debounce' => 'dobChange()','messages' => $errors->get('age'),'require' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'age','type' => 'age','x-model' => 'age','value' => ''.e(old('age', $visitor->age)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Age')),'x-on:change.debounce' => 'dobChange()','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('age')),'require' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <div>
                        <label>Gender :</label>
                        <select class="form-input" name="gender">
                            <option>Select gender</option>
                            <option value="Male" <?php if($visitor->gender == 'Male'): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Male</option>
                            <option value="Female" <?php if($visitor->gender == 'Female'): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Female</option>  
                            <option value="Other" <?php if($visitor->gender == 'Other'): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Other</option>                      
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('gender'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('gender')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div class="col-span-2">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'parent_name','value' => ''.e(old('parent_name', $visitor->parent_name)).'','label' => __('Guardian/Parent Name'),'messages' => $errors->get('parent_name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'parent_name','value' => ''.e(old('parent_name', $visitor->parent_name)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Guardian/Parent Name')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('parent_name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'parent_contact_no','value' => ''.e(old('parent_contact_no', $visitor->parent_contact_no)).'','label' => __('Guardian/Parent Contact No'),'messages' => $errors->get('parent_contact_no')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'parent_contact_no','value' => ''.e(old('parent_contact_no', $visitor->parent_contact_no)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Guardian/Parent Contact No')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('parent_contact_no'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'address','value' => ''.e(old('address', $visitor->address)).'','label' => __('Address'),'messages' => $errors->get('address')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'address','value' => ''.e(old('address', $visitor->address)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Address')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('address'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'village','value' => ''.e(old('village', $visitor->village)).'','label' => __('Village'),'messages' => $errors->get('village')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'village','value' => ''.e(old('village', $visitor->village)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Village')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('village'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'taluka','value' => ''.e(old('taluka', $visitor->taluka)).'','label' => __('Taluka'),'messages' => $errors->get('taluka')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'taluka','value' => ''.e(old('taluka', $visitor->taluka)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Taluka')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('taluka'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'district','value' => ''.e(old('district', $visitor->district)).'','label' => __('District'),'messages' => $errors->get('district')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'district','value' => ''.e(old('district', $visitor->district)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('District')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('district'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'state','value' => ''.e(old('state', $visitor->state)).'','label' => __('State'),'messages' => $errors->get('state')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'state','value' => ''.e(old('state', $visitor->state)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('State')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('state'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Health Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'height','value' => ''.e(old('height', $visitor->height)).'','xModel' => 'height','label' => __('Height (in inches)'),'messages' => $errors->get('height'),'require' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'height','value' => ''.e(old('height', $visitor->height)).'','x-model' => 'height','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Height (in inches)')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('height')),'require' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'weight','value' => ''.e(old('weight', $visitor->weight)).'','@change' => 'bmiCalculation()','xModel' => 'weight','label' => __('Weight (in kg)'),'messages' => $errors->get('weight'),'require' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'weight','value' => ''.e(old('weight', $visitor->weight)).'','@change' => 'bmiCalculation()','x-model' => 'weight','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Weight (in kg)')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('weight')),'require' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'bmi','value' => ''.e(old('bmi', $visitor->bmi)).'','xModel' => 'bmi','label' => __('BMI'),'messages' => $errors->get('bmi')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'bmi','value' => ''.e(old('bmi', $visitor->bmi)).'','x-model' => 'bmi','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('BMI')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('bmi'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    <div>
                        <label>Blood Group :</label>
                        <select class="form-input" name="blood_group">
                            <option value="">Select blood group</option>
                            <option value="A RhD positive (A+)" <?php if($visitor->blood_group == "A RhD positive (A+)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>A RhD positive (A+)</option>
                            <option value="A RhD negative (A-)" <?php if($visitor->blood_group == "A RhD negative (A-)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>A RhD negative (A-)</option>
                            <option value="B RhD positive (B+)" <?php if($visitor->blood_group == "B RhD positive (B+)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>B RhD positive (B+)</option>
                            <option value="B RhD negative (B-)" <?php if($visitor->blood_group == "B RhD negative (B-)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>B RhD negative (B-)</option>
                            <option value="O RhD positive (O+)" <?php if($visitor->blood_group == "O RhD positive (O+)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>O RhD positive (O+)</option>
                            <option value="O RhD negative (O-)" <?php if($visitor->blood_group == "O RhD negative (O-)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>O RhD negative (O-)</option>
                            <option value="AB RhD positive (AB+)" <?php if($visitor->blood_group == "AB RhD positive (AB+)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>AB RhD positive (AB+)</option>
                            <option value="AB RhD negative (AB-)" <?php if($visitor->blood_group == "AB RhD negative (AB-)"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>AB RhD negative (AB-)</option>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('blood_group'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('blood_group')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div>
                </div>                
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'allergy','value' => ''.e(old('allery', $visitor->allergy)).'','label' => __('Any allergy'),'messages' => $errors->get('allergy')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'allergy','value' => ''.e(old('allery', $visitor->allergy)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any allergy')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('allergy'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'medication','value' => ''.e(old('medication', $visitor->medication)).'','label' => __('Any medication'),'messages' => $errors->get('medication')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'medication','value' => ''.e(old('medication', $visitor->medication)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any medication')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('medication'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'surgery','value' => ''.e(old('surgery', $visitor->surgery)).'','label' => __('Any previous Surgery'),'messages' => $errors->get('surgery')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'surgery','value' => ''.e(old('surgery', $visitor->surgery)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any previous Surgery')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('surgery'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'illness','value' => ''.e(old('illness', $visitor->illness)).'','label' => __('Any illness'),'messages' => $errors->get('illness')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'illness','value' => ''.e(old('illness', $visitor->illness)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any illness')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('illness'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Dietory Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'no_of_meals','value' => ''.e(old('no_of_meals', $visitor->no_of_meals)).'','label' => __('No of meals consumed daily'),'messages' => $errors->get('no_of_meals')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'no_of_meals','value' => ''.e(old('no_of_meals', $visitor->no_of_meals)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('No of meals consumed daily')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('no_of_meals'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <div>
                        <label>Daily Food Intake :</label>
                        <select class="form-input" name="food_type">
                            <option value="">Select food type</option>
                            <option value="Vegetarian" <?php if($visitor->food_type == "Vegetarian"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Vegetarian</option>
                            <option value="Non-Vegetarian" <?php if($visitor->food_type == "Non-Vegetarian"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Non-Vegetarian</option>
                            <option value="Eggetarian" <?php if($visitor->food_type == "Eggetarian"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Eggetarian</option>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('food_type'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('food_type')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div> 
                    <div>
                        <label>Junk Food :</label>
                        <select class="form-input" name="junk_food">
                            <option value="">Select</option>
                            <option value="Yes" <?php if($visitor->junk_food == "Yes"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Yes</option>
                            <option value="No" <?php if($visitor->junk_food == "No"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>No</option>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('junk_food'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('junk_food')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div>  
                </div>                
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'diet_restriction','value' => ''.e(old('diet_restriction', $visitor->diet_restriction)).'','label' => __('Any dietory restrictions'),'messages' => $errors->get('diet_restriction')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'diet_restriction','value' => ''.e(old('diet_restriction', $visitor->diet_restriction)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any dietory restrictions')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('diet_restriction'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'frequency_of_food_intake','value' => ''.e(old('frequency_of_food_intake', $visitor->frequency_of_food_intake)).'','label' => __('Frequency of fruits & veg'),'messages' => $errors->get('frequency_of_food_intake')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'frequency_of_food_intake','value' => ''.e(old('frequency_of_food_intake', $visitor->frequency_of_food_intake)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Frequency of fruits & veg')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('frequency_of_food_intake'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'favourite_food','value' => ''.e(old('favourite_food', $visitor->favourite_food)).'','label' => __('Favourite Food'),'messages' => $errors->get('favourite_food')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'favourite_food','value' => ''.e(old('favourite_food', $visitor->favourite_food)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Favourite Food')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('favourite_food'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Education and Employment Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'high_qualification','value' => ''.e(old('high_qualification', $visitor->high_qualification)).'','label' => __('Highest Qualification'),'messages' => $errors->get('high_qualification')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'high_qualification','value' => ''.e(old('high_qualification', $visitor->high_qualification)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Highest Qualification')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('high_qualification'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'occupation','value' => ''.e(old('occupation', $visitor->occupation)).'','label' => __('Current occupation (if any)'),'messages' => $errors->get('occupation')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'occupation','value' => ''.e(old('occupation', $visitor->occupation)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Current occupation (if any)')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('occupation'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'school_college_name','value' => ''.e(old('school_college_name', $visitor->school_college_name)).'','label' => __('Name of school/college'),'messages' => $errors->get('school_college_name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'school_college_name','value' => ''.e(old('school_college_name', $visitor->school_college_name)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Name of school/college')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('school_college_name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'distance','value' => ''.e(old('distance', $visitor->distance)).'','label' => __('Distance from home to school/college'),'messages' => $errors->get('distance')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'distance','value' => ''.e(old('distance', $visitor->distance)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Distance from home to school/college')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('distance'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>         
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Other Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Mobile Phone Access :</label>
                        <select class="form-input" name="mobile_phone_access">
                            <option value="">Select</option>
                            <option value="Yes" <?php if($visitor->mobile_phone_access == "Yes"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Yes</option>
                            <option value="No" <?php if($visitor->mobile_phone_access == "No"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>No</option>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('mobile_phone_access'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('mobile_phone_access')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div>
                    <div>
                        <label>Computer/ Laptop Access :</label>
                        <select class="form-input" name="laptop_access">
                            <option value="">Select</option>
                            <option value="Yes" <?php if($visitor->laptop_access == "Yes"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>Yes</option>
                            <option value="No" <?php if($visitor->laptop_access == "No"): ?> <?php echo e('Selected'); ?> <?php endif; ?>>No</option>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('laptop_access'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('laptop_access')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.combo-input','data' => ['name' => 'child_email_id','type' => 'child_email_id','email' => true,'value' => ''.e(old('child_email_id', $visitor->child_email_id)).'','label' => __('Email'),'messages' => $errors->get('child_email_id')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('combo-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'child_email_id','type' => 'child_email_id','email' => true,'value' => ''.e(old('child_email_id', $visitor->child_email_id)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Email')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('child_email_id'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'child_contact_no','value' => ''.e(old('child_contact_no', $visitor->child_contact_no)).'','label' => __('Contact No'),'messages' => $errors->get('child_contact_no')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'child_contact_no','value' => ''.e(old('child_contact_no', $visitor->child_contact_no)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Contact No')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('child_contact_no'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'other_data','value' => ''.e(old('other_data', $visitor->other_data)).'','label' => __('Any Other Special needs'),'messages' => $errors->get('other_data')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'other_data','value' => ''.e(old('other_data', $visitor->other_data)).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Any Other Special needs')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('other_data'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>                    
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Child's ID proof:</label>
                        <input type="file" name="child_doc" class="form-input">            
                        <br />
                        <?php if($visitor->getFirstMediaUrl('child_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('child_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('child_doc'))); ?></a>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label>Parents ID proof:</label>
                        <input type="file" name="parent_doc" class="form-input"> 
                        <br />
                        <?php if($visitor->getFirstMediaUrl('parent_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('parent_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('parent_doc'))); ?></a>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label>Home address proof:</label>
                        <input type="file" name="home_address_doc" class="form-input">           
                        <br />
                        <?php if($visitor->getFirstMediaUrl('home_address_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('home_address_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('home_address_doc'))); ?></a>
                        <?php endif; ?> 
                    </div>
                    <div>
                        <label>School ID card:</label>
                        <input type="file" name="school_doc" class="form-input">
                        <br />
                        <?php if($visitor->getFirstMediaUrl('school_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('school_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('school_doc'))); ?></a>
                        <?php endif; ?>            
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Any other health card/report:</label>
                        <input type="file" name="health_card_doc" class="form-input">      
                        <br />
                        <?php if($visitor->getFirstMediaUrl('health_card_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('health_card_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('health_card_doc'))); ?></a>
                        <?php endif; ?>      
                    </div>
                    <div>
                        <label>Photo of signed consent form:</label>
                        <input type="file" name="consent_doc" class="form-input">      
                        <br />
                        <?php if($visitor->getFirstMediaUrl('consent_doc')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('consent_doc')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('consent_doc'))); ?></a>
                        <?php endif; ?>      
                    </div>
                    <div>
                        <label>Any other documents:</label>
                        <input type="file" name="other_doc_1" class="form-input">  
                        <br />
                        <?php if($visitor->getFirstMediaUrl('other_doc_1')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('other_doc_1')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('other_doc_1'))); ?></a>
                        <?php endif; ?>          
                    </div>
                    <div>
                        <label>Any other documents:</label>
                        <input type="file" name="other_doc_2" class="form-input">
                        <br />
                        <?php if($visitor->getFirstMediaUrl('other_doc_2')): ?>
                            <a href="<?php echo e($visitor->getFirstMediaUrl('other_doc_2')); ?>" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><?php echo e(basename($visitor->getFirstMediaUrl('other_doc_2'))); ?></a>
                        <?php endif; ?>            
                    </div>
                </div> 
            </div>
            <div class="flex justify-end mt-4">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(__('Submit')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                &nbsp;&nbsp;
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cancel-button','data' => ['link' => route('visitors.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cancel-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('visitors.index'))]); ?>
                    <?php echo e(__('Cancel')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </div>
        </form> 
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data('data', () => ({  
        age: '',
        dob: '',
        height: '',
        weight: '',
        bmi: '',
        init() {
            this.age = '',
            this.dob = '',
            this.height = '',
            this.weight = '',
            this.bmi = '',
            
            flatpickr(document.getElementById('dob'), {
                dateFormat: 'd/m/Y',
            });    
            <?php if($visitor->height): ?>                
                this.height = <?php echo e($visitor->height); ?>;
            <?php endif; ?>
            <?php if($visitor->weight): ?>                
                this.weight = <?php echo e($visitor->weight); ?>;
            <?php endif; ?>       
            <?php if($visitor->bmi): ?>                
                this.bmi = <?php echo e($visitor->bmi); ?>;
            <?php endif; ?>
            <?php if($visitor->age): ?>                
                this.age = <?php echo e($visitor->age); ?>;
            <?php endif; ?>
            // <?php if($visitor->dob): ?>                
            //     this.dob = <?php echo e(Carbon::parse($visitor->dob)->format('d/m/Y')); ?>;
            // <?php endif; ?>
            // console.log(<?php echo e($visitor->dob); ?>)
        },     
        
        age: '',
        dob: '',
        ageCalculate(){
            dob = this.dob;
            if (moment(dob, "YYYY-MM-DD").format("YYYY-MM-DD") == dob) {
                dob = moment(dob, "YYYY-MM-DD");
            }  
            if (moment(dob, "DD/MM/YYYY").format("DD/MM/YYYY") == dob) {
                dob = moment(dob, "DD/MM/YYYY");
            }
            today = moment();
            this.age = moment.duration(today.diff(dob)).years();
            // ageYear = Math.abs(this.age) + " Years";
            console.log(this.age);
        },

        dobChange(){
            this.dob = '';
        },

        height: '',
        weight: '',
        bmi: '',
        bmiCalculation(){
            if(!isNaN(this.height) && this.height != '' && !isNaN(this.weight) && this.weight != ''){
                this.calcMeter = (this.height / 39.37).toFixed(2);
                this.bmi = (this.weight/this.calcMeter).toFixed(2);
            }
        }
    }));
});
</script> 
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Project\sakhi-shakti\resources\views/visitors/edit.blade.php ENDPATH**/ ?>