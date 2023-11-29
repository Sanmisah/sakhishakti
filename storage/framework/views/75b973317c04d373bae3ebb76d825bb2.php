<?php
use Carbon\Carbon;
?>
<style>
table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-size: 0.8rem;
}
td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px 20px;
}
</style>
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
    </ul>       
    <div class="pt-5">
        <div class="panel">
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Medical History</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Underlying health conditions or diseases (if any)</th>
                    <td><?php echo e($medical_assessment->disease); ?></td>
                    <th>Previous hospitalizations or surgeries</th>
                    <td><?php echo e($medical_assessment->surgery); ?></td>
                </tr>
                <tr>
                    <th>Current Medications</th>
                    <td><?php echo e($medical_assessment->medication); ?></td>
                    <th>Allergies</th>
                    <td><?php echo e($medical_assessment->allergies); ?></td>
                </tr>
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Physical Examination</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Height</th>
                    <td><?php echo e($medical_assessment->height); ?></td>
                    <th>Weight</th>
                    <td><?php echo e($medical_assessment->weight); ?></td>
                </tr>
                <tr>
                    <th>BMI</th>
                    <td><?php echo e($medical_assessment->bmi); ?></td>
                    <th>Heart Rate:</th>
                    <td><?php echo e($medical_assessment->heart_rate); ?></td>
                </tr>
                <tr>
                    <th>Respiratory Rate</th>
                    <td><?php echo e($medical_assessment->respiratory_rate); ?></td>
                    <th>Signs of micronutrient deficiencies or complications:</th>
                    <td><?php echo e($medical_assessment->sign); ?></td>
                </tr>
                <tr>
                    <th>Hair texture and condition:</th>
                    <td><?php echo e($medical_assessment->hair); ?></td>
                    <th>Skin integrity and color:</th>
                    <td><?php echo e($medical_assessment->skin); ?></td>
                </tr>
                <tr>
                    <th>Nail Health:</th>
                    <td><?php echo e($medical_assessment->nail_health); ?></td>
                    <th>oral Health::</th>
                    <td><?php echo e($medical_assessment->oral_health); ?></td>
                </tr>
                <tr>
                    <th>Presence of edema or swelling:</th>
                    <td><?php echo e($medical_assessment->swelling); ?></td>
                    <th>Muscle wasting or weakness:</th>
                    <td><?php echo e($medical_assessment->weakness); ?></td>
                </tr>
                <tr>
                    <th>Signs of poor wound healing:</th>
                    <td><?php echo e($medical_assessment->poor_health); ?></td>
                    <th>Signs of fatigue or weakness:</th>
                    <td><?php echo e($medical_assessment->fatigue); ?></td>
                </tr>
                <tr>
                    <th>Other Observation:</th>
                    <td><?php echo e($medical_assessment->observation); ?></td>
                    <th>Hemoglobin level:</th>
                    <td><?php echo e($medical_assessment->hemoglobin_level); ?></td>
                </tr>
                <tr>
                    <th>Serum Albumin Level:</th>
                    <td><?php echo e($medical_assessment->serum); ?></td>
                    <th>Vitamin Level:</th>
                    <td><?php echo e($medical_assessment->vitamin_level); ?></td>
                </tr>
                <tr>
                    <th>Vitamin D:</th>
                    <td><?php echo e($medical_assessment->vitamin_d); ?></td>
                    <th>Vitamin B12:</th>
                    <td><?php echo e($medical_assessment->vitamin_b); ?></td>
                </tr>
                <tr>
                    <th>Other Relevant Vitamin:</th>
                    <td><?php echo e($medical_assessment->relevant_vitamin); ?></td>
                    <th>Other Relevant Laboratory Test:</th>
                    <td><?php echo e($medical_assessment->laboratory_test); ?></td>
                </tr>
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Nutrion Assessment</h5>
            </div>
            <table>
                <tr>
                    <th>Food preferences and aversions:</th>
                    <td><?php echo e($medical_assessment->food_preference); ?></td>
                    <th>Nutrition-related symptoms (if any):</th>
                    <td><?php echo e($medical_assessment->nutrition); ?></td>
                </tr>
                <tr>
                    <th>Any specific dietary restrictions or cultural considerations:</th>
                    <td><?php echo e($medical_assessment->dietory_restrictions); ?></td>
                </tr>
                <tr>
                    <th>Breakfast</th>
                    <td><?php echo e($medical_assessment->breakfast); ?></td>
                    <th>Lunch</th>
                    <td><?php echo e($medical_assessment->lunch); ?></td>
                </tr> 
                <tr>
                    <th>Dinner</th>
                    <td><?php echo e($medical_assessment->dinner); ?></td>
                    <th>Snack</th>
                    <td><?php echo e($medical_assessment->snack); ?></td>
                </tr> 
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Additional Notes</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Any relevant additional information or observations:</th>
                    <td><?php echo e($medical_assessment->other_info); ?></td>
                </tr>
            </table>
        </div>
    </div>    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\HP\Project\sakhi-shakti\resources\views/visitors/show_history.blade.php ENDPATH**/ ?>