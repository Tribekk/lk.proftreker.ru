<div class="card-body">
    <div class="container">
        <h2 class="font-size-h1 text-primary font-weight-bold font-alla">Сводные данные</h2>
        <h3 class="font-size-h3 mb-8">
            Здесь собраны анкетные данные, Вы можете сравнить ответы на идентичные вопросы –
            увидеть мнение и видение Ваших родителей
        </h3>

        <?php echo $__env->make('quiz._results._questionnaire-compare._table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/questionnaire-compare.blade.php ENDPATH**/ ?>