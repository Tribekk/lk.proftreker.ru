<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('quiz._results._pdf.home-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.quizzes-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- АНКЕТА -->
    <?php echo $__env->make('quiz._results._pdf.questionnaire-screen__about-me', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.questionnaire-screen__motive-of-choice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.questionnaire-screen__willingness-to-choice', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- БАЗОВЫЕ ТЕСТЫ -->
    <?php echo $__env->make('quiz._results._pdf.test-screen__character-traits', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.test-screen__interests', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.test-screen__suitable-professions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('quiz._results._pdf.test-screen__person-types', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- РЕЗУЛЬТАТЫ ПО БАЗОВОМУ ТЕСТИРОВАНИЮ -->
    <?php echo $__env->make('quiz._results._pdf.screen__base-results', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- УГЛУБЛЕННОЕ ТЕСТИРОВАНИЕ -->
    <?php if($depthTestsFinished): ?>
        <?php echo $__env->make('quiz._results._pdf.test-screen__inclinations', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('quiz._results._pdf.test-screen__intelligence-level', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('quiz._results._pdf.test-screen__type-of-thinking', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('quiz._results._pdf.test-screen__solution-of-cases', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('quiz._results._pdf.questionnaire-compare-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!-- the end. -->
    <?php echo $__env->make('quiz._results._pdf.end-screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.pdf', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/results-pdf.blade.php ENDPATH**/ ?>