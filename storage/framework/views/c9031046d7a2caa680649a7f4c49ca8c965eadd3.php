<input type="<?php echo e($questionValue->answer->type); ?>"
       class="form-control form-control-solid h-auto py-4 px-6 rounded-lg"
       name="question_<?php echo e($questionValue->id); ?>"
       id="question_<?php echo e($questionValue->id); ?>"
       value="<?php echo e($questionValue->value); ?>"
       maxlength="191"
       readonly
       placeholder="<?php echo e($questionValue->answer->title ?? 'Ответ'); ?>">
<?php /**PATH /var/www/proftracker/resources/views/quiz/questionnaire/answers/_question-text.blade.php ENDPATH**/ ?>