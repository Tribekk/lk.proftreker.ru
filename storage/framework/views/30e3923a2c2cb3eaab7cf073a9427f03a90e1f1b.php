

<?php $__env->startSection('content'); ?>
    <div>

            <div class="pb-lg-0 pb-2" style="margin-top:-200px">
                <table>

                    <tr><td align="center">

                            <h3><?php echo e($orgunit->title); ?></h3>

                        </td></tr>

                    <tr><td>

                            <a href="<?php echo e(route('orgunits.personal_quiz', $orgunit)); ?>" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                <?php echo e(__('Пройти тестирование')); ?>

                            </a>

                            <a href="<?php echo e(route('orgunits.personal_quiz', $orgunit)); ?>" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                <?php echo e(__('Пройти КВИЗ')); ?>

                            </a>

                        </td></tr>

                </table>


            </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/proftracker/resources/views/orgunits/personal_page.blade.php ENDPATH**/ ?>