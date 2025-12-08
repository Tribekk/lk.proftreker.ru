<div class="d-flex flex-wrap flex-md-nowrap <?php if(isset($selected)): ?> <?php if($selected): ?> bg-alla text-white rounded <?php endif; ?> p-7 <?php endif; ?>">
    <div class="mr-8 symbol symbol-circle symbol-md-140 symbol-100 w-145px my-2">
        <img src="<?php echo e($user->avatarUrl); ?>" alt="<?php echo e($user->fullName); ?>" class="img-fluid">
    </div>
    <div class="max-w-md-400px w-md-auto w-100 my-2">
        <h4 class="font-size-h3 font-hero <?php if(isset($selected) && $selected): ?> text-white <?php else: ?> text-primary <?php endif; ?>"><?php echo e($user->fullName); ?></h4>
        <div class="font-size-h6"><?php echo $user->consultant->regalia_and_experience; ?></div>
        <h5 class="font-size-h6">Опыт работы <?php echo e($user->consultant->experienceFormatted); ?></h5>
    </div>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultant/business-card/_business-card/card.blade.php ENDPATH**/ ?>