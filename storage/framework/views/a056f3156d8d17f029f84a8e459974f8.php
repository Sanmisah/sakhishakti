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
            <a href="<?php echo e(route('doctor_business_monitorings.index')); ?>" class="text-primary hover:underline">CDBM</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Edit</span>
        </li>
    </ul>
    <div class="pt-5" x-data="data">        
        <form class="space-y-5" action="<?php echo e(route('doctor_business_monitorings.update', ['doctor_business_monitoring' => $doctor_business_monitoring->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Edit DBM</h5>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>GAF Code :<span style="color: red">*</span></label>
                        <select class="form-input" name="grant_approval_id" x-model="code" id="code" @change="codeChange()">
                            <?php $__currentLoopData = $gaf_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($id); ?>" <?php echo e($doctor_business_monitoring->grant_approval_id ? ($doctor_business_monitoring->grant_approval_id == $id ? 'Selected' : '' ) : ''); ?>><?php echo e($code); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('code'),'class' => 'mt-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('code')),'class' => 'mt-2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> 
                    </div>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'bg-gray-100 dark:bg-gray-700','label' => __('Marketing Executive'),'messages' => $errors->get('employee_id_2'),'xModel' => 'manager','readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-gray-100 dark:bg-gray-700','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Marketing Executive')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('employee_id_2')),'x-model' => 'manager','readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>                       
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'bg-gray-100 dark:bg-gray-700','label' => __('Area Manager'),'messages' => $errors->get('employee_id_2'),'xModel' => 'area','readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-gray-100 dark:bg-gray-700','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Area Manager')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('employee_id_2')),'x-model' => 'area','readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>                       
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'bg-gray-100 dark:bg-gray-700','label' => __('Zonal Manager'),'messages' => $errors->get('employee_id_2'),'xModel' => 'zone','readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-gray-100 dark:bg-gray-700','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Zonal Manager')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('employee_id_2')),'x-model' => 'zone','readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>   
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                   
                   <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'doctor','label' => __('Doctor Name'),'messages' => $errors->get('doctor_id'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'doctor','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Doctor Name')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('doctor_id')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                   <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'mpl_no','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'mpl_no','value' => ''.e(old('mpl_no')).'','label' => __('MPL NO'),'messages' => $errors->get('mpl_no'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'mpl_no','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'mpl_no','value' => ''.e(old('mpl_no')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('MPL NO')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('mpl_no')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                   <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'speciality','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'speciality','value' => ''.e(old('speciality')).'','label' => __('Speciality'),'messages' => $errors->get('speciality'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'speciality','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'speciality','value' => ''.e(old('speciality')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Speciality')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('speciality')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                   <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'location','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'location','value' => ''.e(old('location')).'','label' => __('Location'),'messages' => $errors->get('location'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'location','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'location','value' => ''.e(old('location')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Location')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('location')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
               </div>
               <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'date','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'date','value' => ''.e(old('date')).'','id' => 'date','label' => __('Date'),'messages' => $errors->get('date'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'date','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'date','value' => ''.e(old('date')).'','id' => 'date','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Date')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('date')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'month','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'month','value' => ''.e(old('month')).'','label' => __('Proposal Month'),'messages' => $errors->get('month'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'month','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'month','value' => ''.e(old('month')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Proposal Month')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('month')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>     
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.combo-input','data' => ['name' => 'amount','class' => 'bg-gray-100 dark:bg-gray-700','xModel' => 'amount','value' => ''.e(old('amount')).'','label' => __('Amount'),'messages' => $errors->get('amount'),'readonly' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('combo-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'amount','class' => 'bg-gray-100 dark:bg-gray-700','x-model' => 'amount','value' => ''.e(old('amount')).'','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Amount')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('amount')),'readonly' => 'true']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['name' => 'roi','class' => 'bg-gray-100 dark:bg-gray-700','readonly' => 'true','xModel' => 'total_roi','value' => ''.e(old('roi', $doctor_business_monitoring->roi)).'','@change' => 'calcROI()','label' => __('ROI'),'messages' => $errors->get('roi')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'roi','class' => 'bg-gray-100 dark:bg-gray-700','readonly' => 'true','x-model' => 'total_roi','value' => ''.e(old('roi', $doctor_business_monitoring->roi)).'','@change' => 'calcROI()','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('ROI')),'messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('roi'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                </div>    
            </div>
            <div class="panel table-responsive">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light"> Add Products</h5>
                </div>
                <div>
                    <div class="flex xl:flex-row flex-col gap-2.5">
                        <div class="panel px-0 flex-1 py-1 ltr:xl:mr-6 rtl:xl:ml-6">
                            <div class="mt-8">
                                <template x-if="productDetails">
                                <div class="table-responsive">
                                        <table class="table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="5%">&nbsp; #</th>
                                                    <th>Product</th>
                                                    <th>NRV</th>
                                                    <th>Avg Business(Units)</th>
                                                    <th>Avg Business(Value)</th>
                                                    <th>Exp in Vol(M)</th>
                                                    <th>Exp in Vol(M+1)</th>
                                                    <th>Exp in Vol(M+2)</th>
                                                    <!-- <th>Exp in Vol(M+3)</th>
                                                    <th>Exp in Vol(M+4)</th>
                                                    <th>Exp in Vol(M+5)</th>
                                                    <th>Exp in Vol(M+6)</th>
                                                    <th>Total Exp Vol (MtoM+6)</th>
                                                    <th>Total Exp Val (MtoM+6)</th>
                                                    <th>Scheme %</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <template x-if="productDetails.length <= 0">
                                                    <tr >
                                                        <td colspan="5" class="!text-center font-semibold">No Data Available
                                                        </td>
                                                    </tr>
                                                </template>
                                                <template x-for="(productDetail, i) in productDetails" :key="i">
                                                    <tr>
                                                        <td>
                                                            <button type="button" @click="removeItem(productDetail)">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                    height="24px" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="w-5 h-5">
                                                                    <line x1="18" y1="6" x2="6"
                                                                        y2="18"></line>
                                                                    <line x1="6" y1="6" x2="18"
                                                                        y2="18"></line>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <input type="hidden" class="form-input min-w-[200px]" x-model="productDetail.id" x-bind:name="`product_details[${productDetail.id}][id]`"/>
                                                            <select class="form-input mt-2 w-40" name="product_id" x-model="productDetail.product_id" x-bind:name="`product_details[${productDetail.id}][product_id]`"  x-on:change="productChange()">
                                                                <option>Select Product</option>
                                                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <option value="<?php echo e($id); ?>"
                                                                        <?php echo e($id ? ($id == $doctor_business_monitoring->product_id ? 'selected' : '') : ''); ?>> <?php echo e($product); ?> </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-40','xBind:name' => '`product_details[${productDetail.id}][exp_vol_3]`','messages' => $errors->get('exp_vol_3'),'xModel' => 'productDetail.exp_vol_3','placeholder' => 'M+3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-40','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_3]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_3')),'x-model' => 'productDetail.exp_vol_3','placeholder' => 'M+3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28 bg-gray-100 dark:bg-gray-700','readonly' => 'true','xBind:name' => '`product_details[${productDetail.id}][nrv]`','messages' => $errors->get('nrv'),'xModel' => 'productDetail.nrv']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28 bg-gray-100 dark:bg-gray-700','readonly' => 'true','x-bind:name' => '`product_details[${productDetail.id}][nrv]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('nrv')),'x-model' => 'productDetail.nrv']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol_4]`','messages' => $errors->get('exp_vol_4'),'xModel' => 'productDetail.exp_vol_4','placeholder' => 'M+4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_4]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_4')),'x-model' => 'productDetail.exp_vol_4','placeholder' => 'M+4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][avg_business_units]`','messages' => $errors->get('avg_business_units'),'xModel' => 'productDetail.avg_business_units','@change' => 'calculateValues()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][avg_business_units]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('avg_business_units')),'x-model' => 'productDetail.avg_business_units','@change' => 'calculateValues()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol_5]`','messages' => $errors->get('exp_vol_5'),'xModel' => 'productDetail.exp_vol_5','placeholder' => 'M+5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_5]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_5')),'x-model' => 'productDetail.exp_vol_5','placeholder' => 'M+5']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][avg_business_value]`','messages' => $errors->get('avg_business_value'),'xModel' => 'productDetail.avg_business_value']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][avg_business_value]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('avg_business_value')),'x-model' => 'productDetail.avg_business_value']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol_6]`','messages' => $errors->get('exp_vol_6'),'xModel' => 'productDetail.exp_vol_6','@change' => 'calculateValues()','placeholder' => 'M+6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_6]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_6')),'x-model' => 'productDetail.exp_vol_6','@change' => 'calculateValues()','placeholder' => 'M+6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol]`','messages' => $errors->get('exp_vol'),'xModel' => 'productDetail.exp_vol']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol')),'x-model' => 'productDetail.exp_vol']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][total_exp_vol]`','messages' => $errors->get('total_exp_vol'),'xModel' => 'productDetail.total_exp_vol','placeholder' => 'Total Vol']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][total_exp_vol]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('total_exp_vol')),'x-model' => 'productDetail.total_exp_vol','placeholder' => 'Total Vol']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol_1]`','messages' => $errors->get('exp_vol_1'),'xModel' => 'productDetail.exp_vol_1','@change' => 'calculateValues()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_1]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_1')),'x-model' => 'productDetail.exp_vol_1','@change' => 'calculateValues()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][total_exp_val]`','messages' => $errors->get('total_exp_val'),'xModel' => 'productDetail.total_exp_val','placeholder' => 'Total Val','@change' => 'calculateValues()']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][total_exp_val]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('total_exp_val')),'x-model' => 'productDetail.total_exp_val','placeholder' => 'Total Val','@change' => 'calculateValues()']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-2 w-28','xBind:name' => '`product_details[${productDetail.id}][exp_vol_2]`','messages' => $errors->get('exp_vol_2'),'xModel' => 'productDetail.exp_vol_2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2 w-28','x-bind:name' => '`product_details[${productDetail.id}][exp_vol_2]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('exp_vol_2')),'x-model' => 'productDetail.exp_vol_2']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                            <!-- <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'mt-4 w-31','xBind:name' => '`product_details[${productDetail.id}][scheme]`','messages' => $errors->get('scheme'),'xModel' => 'productDetail.scheme','placeholder' => 'Scheme']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 w-31','x-bind:name' => '`product_details[${productDetail.id}][scheme]`','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('scheme')),'x-model' => 'productDetail.scheme','placeholder' => 'Scheme']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> -->     
                                                            <select class="form-input mt-2 w-28" x-bind:name="`product_details[${productDetail.id}][scheme]`" x-model="productDetail.scheme" @change="calculateTotal()">
                                                                <option> Scheme% </option>
                                                                <?php for($i = 1; $i < 100; $i++): ?>
                                                                    <option value="<?php echo e($i); ?>" <?php echo e($i ? ($i == $doctor_business_monitoring->scheme ? 'selected' : '') : ''); ?>> <?php echo e($i); ?>% </option>
                                                                <?php endfor; ?>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </template>
                                                <tr>
                                                    <td>
                                                        <button type="button" class="btn btn-info" @click.prevent="addItem()">+ </button>
                                                    </td>
                                                </tr>
                                            </tbody> 
                                            <tfoot  style="background-color: #FFFFF;">
                                                <tr>
                                                    <th colspan="7" style="text-align:right;">Total of Total Expected Value: </th>
                                                    <td>               
                                                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'form-input bg-gray-100 dark:bg-gray-700 mt-2 w-28','xModel' => 'total','readonly' => 'true','messages' => $errors->get('total_expected_value'),'value' => ''.e($doctor_business_monitoring->total_expected_value).'','name' => 'total_expected_value']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-input bg-gray-100 dark:bg-gray-700 mt-2 w-28','x-model' => 'total','readonly' => 'true','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('total_expected_value')),'value' => ''.e($doctor_business_monitoring->total_expected_value).'','name' => 'total_expected_value']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr >
                                                    <th colspan="7" style="text-align:right">Total of Avg Business Value:</th>
                                                    <td><?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['class' => 'form-input  bg-gray-100 dark:bg-gray-700 mt-2 w-28','messages' => $errors->get('total_business_value'),'value' => ''.e($doctor_business_monitoring->total_business_value).'','xModel' => 'avg_total','name' => 'total_business_value']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-input  bg-gray-100 dark:bg-gray-700 mt-2 w-28','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('total_business_value')),'value' => ''.e($doctor_business_monitoring->total_business_value).'','x-model' => 'avg_total','name' => 'total_business_value']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?></td>
                                                </tr> 
                                            </tfoot>                             
                                        </table>
                                    </div>
                                </template>                                                
                            </div>                            
                        </div>                    
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cancel-button','data' => ['link' => route('doctor_business_monitorings.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('cancel-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('doctor_business_monitorings.index'))]); ?>
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
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data('data', () => ({
        product_id: '',
        nrv: '',
        productDetails: [],
        code: '',
        employee_id_1: '',
        employee_id_2: '',
        employee_id_3: '',
        doctor: '',
        mpl_no: '',
        speciality: '',
        location: '',
        date: '',
        month: '',
        amount: '',
        data: '',
        area: '',
        zone: '',
        manager: '',
        docData: '',
        init() {
            this.avg_business_value = 0;  
            this.total_exp_vol = 0;
            this.total_exp_val = 0;
            this.total = 0;
            this.avg_total = 0;
            this.total_roi = 0;
            var options = {
                searchable: true
            };
            
            NiceSelect.bind(document.getElementById("code"), options);
            <?php if($doctor_business_monitoring->grant_approval_id): ?>
                
                this.code = <?php echo e($doctor_business_monitoring->grant_approval_id); ?>;
                this.codeChange();
            <?php endif; ?>

            <?php if($doctor_business_monitoring->total_business_value): ?>                
                this.avg_total = <?php echo e($doctor_business_monitoring->total_business_value); ?>;
            <?php endif; ?>

            <?php if($doctor_business_monitoring->total_expected_value): ?>                
                this.total = <?php echo e($doctor_business_monitoring->total_expected_value); ?>;
            <?php endif; ?>

            <?php if($doctor_business_monitoring->roi): ?>
                this.total_roi = <?php echo e($doctor_business_monitoring->roi); ?>;
            <?php endif; ?>

            flatpickr(document.getElementById('date'), {
                dateFormat: 'd/m/Y',
            });

            let maxId = 0; 
            id='';
            <?php if($doctor_business_monitoring['ProductDetails']): ?>
            <?php $__currentLoopData = $doctor_business_monitoring['ProductDetails']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=>$details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            this.productDetails.push({
                i: ++maxId,
                id: '<?php echo e($details->id); ?>',
                product_id: '<?php echo e($details->product_id); ?>',
                nrv: '<?php echo e($details->nrv); ?>',
                avg_business_units: '<?php echo e($details->avg_business_units); ?>',
                avg_business_value: '<?php echo e($details->avg_business_value); ?>',
                exp_vol: '<?php echo e($details->exp_vol); ?>',
                exp_vol_1: '<?php echo e($details->exp_vol_1); ?>',
                exp_vol_2: '<?php echo e($details->exp_vol_2); ?>',
                exp_vol_3: '<?php echo e($details->exp_vol_3); ?>',
                exp_vol_4: '<?php echo e($details->exp_vol_4); ?>',
                exp_vol_5: '<?php echo e($details->exp_vol_5); ?>',
                exp_vol_6: '<?php echo e($details->exp_vol_6); ?>',
                total_exp_vol: '<?php echo e($details->total_exp_vol); ?>',
                total_exp_val: '<?php echo e($details->total_exp_val); ?>',
                scheme: '<?php echo e($details->scheme); ?>',
            });                    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>               
        },

        async productChange() {               
            this.productDetail.nrv = await (await fetch('/products/'+ this.productDetail.product_id, {
            method: 'GET',
            headers: {
                'Content-type': 'application/json;',
            },
            })).json();
            this.calculateValues();
        },
           
        addItem() {
            let maxId = 0;
            if (this.productDetails && this.productDetails.length) {
                maxId = this.productDetails.reduce((max, character) => (character.id > max ? character
                    .id : max), this.productDetails[0].id);
            }
            this.productDetails.push({
                id: maxId + 1,
                product_id: '',
                nrv: '',
            });
            this.calculateValues();
            this.calculateTotal();
        }, 
                        
        removeItem(productDetail) {
            this.productDetails = this.productDetails.filter((d) => d.id != productDetail.id);
            this.calculateValues();
            this.calculateTotal();
        },
        
        async codeChange(){
            this.data = await (await fetch('/grant_approvals/'+ this.code, {
                method: 'GET',
                headers: {
                    'Content-type': 'application/json;',
                },
            })).json();
            console.log(this.data.doctor)
            this.manager = this.data.manager.name;
            this.area = this.data.manager.area_manager.name;
            this.zone = this.data.manager.zonal_manager.name;
            this.doctor = this.data.doctor.doctor_name;
            this.mpl_no = this.data.doctor.mpl_no;
            this.location = this.data.doctor.type;
            this.speciality = this.data.doctor.speciality;
            this.date = this.data.date_of_issue;
            this.month = this.data.proposal_month;
            this.amount = this.data.proposal_amount;
        },

        calculateValues() {
            let avg = 0; 
            let total_vol = 0;
            let total_val = 0;

            this.productDetails.forEach(productDetail => {                
                if(!isNaN(productDetail.avg_business_units) && productDetail.avg_business_units != ''){
                    avg = productDetail.avg_business_units * productDetail.nrv;          
                    productDetail.avg_business_value = avg.toFixed(2);
                }   
                    
                if(!isNaN(productDetail.exp_vol) && productDetail.exp_vol != ''){
                    total_vol += parseFloat(productDetail.exp_vol);
                }  

                if(!isNaN(productDetail.exp_vol_1) && productDetail.exp_vol_1 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_1);
                }  

                if(!isNaN(productDetail.exp_vol_2) && productDetail.exp_vol_2 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_2);
                }  

                if(!isNaN(productDetail.exp_vol_3) && productDetail.exp_vol_3 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_3);
                }  

                if(!isNaN(productDetail.exp_vol_4) && productDetail.exp_vol_4 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_4);
                }  

                if(!isNaN(productDetail.exp_vol_5) && productDetail.exp_vol_5 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_5);
                }  

                if(!isNaN(productDetail.exp_vol_6) && productDetail.exp_vol_6 != ''){
                    total_vol += parseFloat(productDetail.exp_vol_6);
                }                  
                productDetail.total_exp_vol = total_vol.toFixed(2);

                total_val = productDetail.total_exp_vol * productDetail.nrv;          
                productDetail.total_exp_val = total_val.toFixed(2);
            }); 
        },

        calculateTotal() {
            let total = 0;  
            this.productDetails.forEach(productDetail => {
                total = parseFloat(total) + parseFloat(productDetail.total_exp_val);
            });                     
            if(!isNaN(total)){
                this.total = total;
            }        

            let avg_total = 0;
            this.productDetails.forEach(productDetail => {
                avg_total = parseFloat(avg_total) + parseFloat(productDetail.avg_business_value);
            });                     
            if(!isNaN(avg_total)){
                this.avg_total = avg_total.toFixed(2);
            }       
            
            this.calcROI();
        },

        calcROI() {
            let roi = 0;
            roi = this.total / this.amount; 
            if(!isNaN(roi)){
                this.total_roi = roi.toFixed(2);
            }   
        },
    }));
});

</script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Project\encore\resources\views/doctor_business_monitorings/edit.blade.php ENDPATH**/ ?>