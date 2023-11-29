<?php
use Carbon\Carbon;
?>

    <table>
        <thead >
            <tr>
                <th colspan="21" style="font-weight: bold; text-align: center;">Core Doctor Business Monitoring (CDBM)</th>
            </tr>
            <tr>
                <th>ME HQ </th>
                <th>ABM HQ </th>
                <th>RBM HQ </th>
                <th>Doctor Name </th>
                <th>Speciality </th>
                <th>Location </th>
                <th>Date </th>
                <th>Month </th>
                <th>Amount </th>
                <th>Product</th>
                <th>NRV</th>
                <th>M Exp in Vol</th>
                <th>M1 Exp in Vol</th>
                <th>M2 Exp in Vol</th>
                <th>M3 Exp in Vol</th>
                <th>M4 Exp in Vol</th>
                <th>M5 Exp in Vol</th>
                <th>M6 Exp in Vol</th>
                <th>Total Exp Vol</th>
                <th>Total Exp Val</th>
                <th>Scheme</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($print)): ?>
            <?php $__currentLoopData = $print; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                           
                <tr>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Manager->name); ?></td>           
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Manager->AreaManager->name); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Manager->ZonalManager->name); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Doctor->doctor_name); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Doctor->speciality); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->GrantApproval->Doctor->type); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->date); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->month); ?></td>
                    <td><?php echo e(@$detail->DoctorBusinessMonitoring->amount); ?></td>
                    <td><?php echo e(@$detail->Product->name); ?></td>           
                    <td><?php echo e(@$detail->Product->nrv); ?></td>
                    <td><?php echo e(@$detail->exp_vol); ?></td>
                    <td><?php echo e(@$detail->exp_vol_1); ?></td>
                    <td><?php echo e(@$detail->exp_vol_2); ?></td>
                    <td><?php echo e(@$detail->exp_vol_3); ?></td>
                    <td><?php echo e(@$detail->exp_vol_4); ?></td>
                    <td><?php echo e(@$detail->exp_vol_5); ?></td>
                    <td><?php echo e(@$detail->exp_vol_6); ?></td>
                    <td><?php echo e(@$detail->total_exp_vol); ?></td>
                    <td><?php echo e(@$detail->total_exp_val); ?></td>
                    <td><?php echo e(@$detail->scheme); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </tbody>
    </table><?php /**PATH C:\Users\HP\Project\encore\resources\views/doctor_business_monitorings/print.blade.php ENDPATH**/ ?>