<div class="screen end-screen">
    <div class="content">
        <div class="text-center" style="margin-top: 50px">
            <h2 class="font-pixel font-weight-bold"  class="font-pixel text-uppercase text-center text-white"  style="font-size: 2.5rem; margin-bottom: 18px; letter-spacing: 10px;">Профтрекер</h2>
            <div class="font-weight-bold font-hero font-size-h2">
                Профориентационный проект для старшеклассников и их родителей.
            </div>

            <div style="margin-top: 120px;">
                <h3 class="text-primary font-hero font-weight-bold font-size-h2">Обратная связь и вопросы:</h3>
                <a href="tel:89221550906" class="text-primary font-hero font-weight-bold font-size-h2 d-block" style="text-decoration: none">8 (922) 155 09 06</a>
               <!--  <a href="<?php echo e(route('dashboard')); ?>" class="text-primary font-hero font-weight-bold font-size-h2 font-hero" style="text-decoration: none"><?php echo e(request()->getHost()); ?></a> -->
            </div>

            <?php echo $__env->make('quiz._results._pdf.img.bot', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<style>
    .end-screen .img-bot {
        margin-top: 50px;
    }
</style>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/quiz/_results/_pdf/end-screen.blade.php ENDPATH**/ ?>