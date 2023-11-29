<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['disabled' => false, 'value', 'require' => false, 'messages']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['disabled' => false, 'value', 'require' => false, 'messages']); ?>
<?php foreach (array_filter((['disabled' => false, 'value', 'require' => false, 'messages']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<label <?php echo e($attributes->merge(['class' => 'text-gray-900'])); ?>>
    <?php echo e($value ?? $slot); ?>: 
    <?php if($require): ?>
    <span style="color: red">*</span>
    <?php endif; ?>
</label>
<input <?php echo e($disabled ? 'disabled' : ''); ?> <?php echo $attributes->merge(['class' => 'form-input border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']); ?>>

<?php if($messages): ?>
    <ul <?php echo e($attributes->merge(['class' => 'text-sm text-red-600 space-y-1 mt-2'])); ?>>
        <?php $__currentLoopData = (array) $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($message); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH /home/sanmisha/@Projects/Encore/resources/views/components/texts-input.blade.php ENDPATH**/ ?>