<?php
use Carbon\Carbon;
?>
<table>
    	
    <thead >
        <tr>
            <th colspan="15" style="font-weight: bold; text-align: center;">ROI Accountability Report (RAR)</th>
        </tr>
        <tr>
            <th>ME HQ</th>
            <th>ABM HQ</th>
            <th>RBM HQ</th>
            <th>Doctor Name</th>
            <th>Speciality</th>
            <th>Location</th>
            <th>Date</th>
            <th>Proposal Month</th>
            <th>Amount</th>
            <th>Product</th>
            <th>NRV</th>
            <th>Month</th>
            <th>Actual Vol</th>
            <th>Actual Val</th>
            <th>Scheme</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($print)): ?>
        <?php $__currentLoopData = $print; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
            <tr>
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Manager->name); ?></td>           
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Manager->AreaManager->name); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Manager->ZonalManager->name); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Doctor->doctor_name); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Doctor->speciality); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->GrantApproval->Doctor->type); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->rar_date); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->proposal_month); ?></td>
                <td><?php echo e(@$detail->RoiAccountabilityReport->amount); ?></td>
                <td><?php echo e(@$detail->Product->name); ?></td>           
                <td><?php echo e(@$detail->Product->nrv); ?></td>
                <td><?php echo e(@$detail->month); ?></td>
                <td><?php echo e(@$detail->act_vol); ?></td>
                <td><?php echo e(@$detail->act_val); ?></td>
                <td><?php echo e(@$detail->scheme); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH C:\Users\HP\Project\encore\resources\views/roi_accountability_reports/print.blade.php ENDPATH**/ ?>