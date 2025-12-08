<div class="card-body">
    <div class="d-flex flex-sm-nowrap flex-wrap">
        <div class="mr-5 max-w-225px">
            <h3 class="w-225px bg-blue rounded-pill text-white py-4 px-8 font-weight-bold font-size-lg font-hero text-center">Анкетные данные</h3>
            <div class="mx-5 mt-7">
                <h4 class="text-uppercase font-blue font-size-h5 font-hero font-weight-bold">Обо мне</h4>
                <span class="text-dark-50 font-size-lg">Текущие общие сведения</span>
            </div>
        </div>
        <div class="separator separator-solid my-7 w-100 d-block d-sm-none"></div>
        <div class="ml-5 flex-grow-1">
            <div class="row">
                <div class="col-md-4 my-4">
                    <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Любимые предметы</h3>
                    <?php $__currentLoopData = $questionnaireResult->favoriteSubjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="font-size-h6 my-2 text-break">
                            <?php echo e($value); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Средний балл в школе</h3>
                        <div class="font-size-h6 my-2 text-break">
                            <?php echo e($questionnaireResult->avgMark); ?>

                        </div>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Мои увлечения</h3>
                        <?php $__currentLoopData = $questionnaireResult->hobbies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="font-size-h6 my-2 text-break">
                                <?php echo e($value); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Занимаюсь в секции <?php echo e($questionnaireResult->howLongHaveHobbies); ?></h3>
                        <p class="font-size-h6 my-2 text-break"><?php echo e($questionnaireResult->whoseChoiceHobbies); ?></p>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Дополнительные занятия с репетитором</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $questionnaireResult->lessonsWithTutor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="font-size-h6 my-2 text-break">
                                <?php echo e($value); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="font-size-h6 my-2">
                                Не занимаюсь с репетитором
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Опыт трудовой деятельности</h3>
                        <p class="font-size-h6 my-2 text-break">
                            <?php echo e($questionnaireResult->workExperience); ?>

                        </p>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Ограничивающие особенности здоровья</h3>
                        <?php $__empty_1 = true; $__currentLoopData = $questionnaireResult->limitingHealthFeatures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="font-size-h6 my-2 text-break">
                                <?php echo e($value); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <div class="font-size-h6 my-2">
                                Нет
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Мои личные качества</h3>
                    <?php $__currentLoopData = $questionnaireResult->personalQualities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="font-size-h6 my-2 text-break">
                            <?php echo e($value); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Коротко обо мне</h3>
                        <?php $__currentLoopData = $questionnaireResult->aboutMe; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="font-size-h6 my-2 text-break">
                                <?php echo e($value); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-4 my-4">
                    <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Миллион потрачу на</h3>
                    <p class="font-size-h6 my-2 text-break"><?php echo e($questionnaireResult->willSpendMillionOn); ?></p>

                    <?php if($questionnaireResult->themeMyBlog): ?>
                        <div class="mt-5">
                            <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Свой блог в интернете посвящу теме</h3>
                            <div class="font-size-h6 my-2 text-break">
                                <?php echo e($questionnaireResult->themeMyBlog); ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($questionnaireResult->whoDoWantToWork): ?>
                        <div class="mt-5">
                            <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Я хочу работать</h3>
                            <p class="font-size-h6 my-2 text-break"><?php echo e($questionnaireResult->whoDoWantToWork); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Я точно не буду работать</h3>
                        <p class="font-size-h6 my-2 text-break"><?php echo e($questionnaireResult->whoDontWantToWork); ?></p>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Потому что</h3>
                        <p class="font-size-h6 my-2 text-break"><?php echo e($questionnaireResult->whyWhoDontWantToWork); ?></p>
                    </div>

                    <div class="mt-5">
                        <h3 class="font-weight-bold font-orange font-size-h3 mb-2">Мой жизненный девиз и его интерпретация</h3>
                        <?php $__currentLoopData = $questionnaireResult->lifeMottosAndInterpretations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="font-size-h6 my-2 text-break">
                                <h4 class="font-weight-bold text-dark font-size-h6"><?php echo e($value['title']); ?></h4>
                                <?php if($value['description']): ?><?php echo e($value['description']); ?><?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/c41010/proftrecker.ru/www/resources/views/quiz/_results/questionnaire-screen__about-me.blade.php ENDPATH**/ ?>