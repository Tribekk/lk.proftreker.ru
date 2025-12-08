<?php echo $__env->make('consultations._report.questionnaire._table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="mt-18 button-group">
    <a target="_blank" href="<?php echo e(route('quiz.results.student_questionnaire', $consultation->child)."?backTo=".urlencode(url()->full()."#report-tab")); ?>" class="btn btn-outline-success">Посмотреть анкету ученика</a>
    <?php if($consultation->parent): ?>
        <a target="_blank" href="<?php echo e(route('quiz.results.parent_questionnaire', $consultation->parent)."?backTo=".urlencode(url()->full()."#report-tab")); ?>" class="btn btn-outline-success">Посмотреть анкету родителя</a>
    <?php endif; ?>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_report/report_type_questionnaire.blade.php ENDPATH**/ ?>