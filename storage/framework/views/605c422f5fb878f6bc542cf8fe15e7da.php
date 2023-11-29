<?php
use Carbon\Carbon;
?>

    <table>
        <thead >
            <tr>
                <th colspan="12" style="font-weight: bold; text-align: center;">Grant Approval Format (GAF) - Report</th>
            </tr>
            <tr>
                <th>ME HQ: </th>
                <th>ABM HQ: </th>
                <th>RBM HQ: </th>
                <th>Doctor Name: </th>
                <th>Speciality: </th>
                <th>MPL No: </th>
                <th>Location: </th>
                <th>Email: </th>
                <th>Activity: </th>
                <th>Date: </th>
                <th>Month: </th>
                <th>Amount: </th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($print)): ?>
            <?php $__currentLoopData = $print; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
            <tr>
                <td><?php echo e(ucfirst(@$detail->Manager->name)); ?></td>
                <td><?php echo e(ucfirst(@$detail->Manager->AreaManager->name)); ?></td>
                <td><?php echo e(ucfirst(@$detail->Manager->ZonalManager->name)); ?></td>
                <td><?php echo e(ucfirst(@$detail->Doctor->doctor_name)); ?></td>
                <td><?php echo e(@$detail->doctor->speciality); ?></td>
                <td><?php echo e(@$detail->doctor->mpl_no); ?></td>                
                <td><?php echo e(@$detail->doctor->type); ?></td>
                <td><?php echo e(@$detail->email); ?></td>
                <td><?php echo e(ucfirst(@$detail->Activity->name)); ?></td>
                <td><?php echo e(@$detail->date_of_issue); ?></td>
                <td><?php echo e(@$detail->proposal_month); ?></td>
                <td><?php echo e(@$detail->proposal_amount); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table><?php /**PATH C:\Users\HP\Project\encore\resources\views/grant_approvals/print.blade.php ENDPATH**/ ?>