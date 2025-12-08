<div class="tab-pane show active px-7" id="consultation-tab" role="tabpanel">
    <form action="<?php echo e(route('consultations.update', $consultation)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-5 col-md-7">
                <label class="font-weight-bold font-size-h3 mb-8">Информация</label>

                <div class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-between mb-3 font-size-h5">
                    <span class="font-weight-bold mr-2">Родитель:</span>
                    <span class="text-muted text-right"><?php echo e(optional($consultation->parent)->fullName ?? 'не указан'); ?></span>
                </div>
                <div class="d-flex flex-wrap flex-md-nowrap align-items-center justify-content-between mb-3 font-size-h5">
                    <span class="font-weight-bold mr-2">Ребенок:</span>
                    <span class="text-muted text-right"><?php echo e($consultation->child->fullName); ?>

                        <?php if($consultation->child->fullYears): ?>
                            (<?php echo e($consultation->child->fullYearsFormatted); ?>)
                        <?php endif; ?>
                    </span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3 font-size-h5">
                    <span class="font-weight-bold mr-2">Дата:</span>
                    <span class="text-muted text-right"><?php echo e($consultation->appointment->dateFormatted); ?></span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3 font-size-h5">
                    <span class="font-weight-bold mr-2">Время начала:</span>
                    <span class="text-muted text-right"><?php echo e($consultation->appointment->startFormatted); ?></span>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3 font-size-h5">
                    <span class="font-weight-bold mr-2">Время завершения:</span>
                    <span class="text-muted text-right"><?php echo e($consultation->appointment->finishFormatted); ?></span>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="form-group mb-8 pl-md-8">
                    <label class="font-weight-bold font-size-h3 mb-8">Формат консультации</label>

                    <div class="checkbox-list">
                        <label class="checkbox font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                            <input type="checkbox" <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?> <?php if(old('with_child', $consultation->with_child)): ?> checked <?php endif; ?> value="1" name="with_child"/>
                            <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                            Всю встречу провести с ребенком – не разделять на индивидуальные беседы
                        </label>
                        <label class="checkbox font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                            <input type="checkbox" <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?> <?php if(old('personal_communication_parent', $consultation->personal_communication_parent)): ?> checked <?php endif; ?> value="1" name="personal_communication_parent"/>
                            <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                            Выделить из консультации 15-30 минут на личное общение с профориентологом
                        </label>
                        <label class="checkbox font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                            <input type="checkbox" <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?> <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?> <?php if(old('personal_communication_child', $consultation->personal_communication_child)): ?> checked <?php endif; ?> value="1" name="personal_communication_child"/>
                            <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                            Дать возможность личного общения ребенку с профориентологом – 30 минут
                        </label>
                        <label class="checkbox font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                            <input type="checkbox" <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?> <?php if(old('separation_during_consultation', $consultation->separation_during_consultation)): ?> checked <?php endif; ?> value="1" name="separation_during_consultation"/>
                            <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                            Определить необходимость любого разделения во время консультации
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <?php if($consultation->wishes_and_questions): ?>
            <x-inputs.text-area title="Пожелания или вопросы"
                                <?php if($consultation->state->code() == 'not-verified'): ?> disabled <?php endif; ?>
                                value="<?php echo e(old('wishes_and_questions', $consultation->wishes_and_questions)); ?>"
                                name="wishes_and_questions" id="wishes_and_questions"/>
        <?php endif; ?>

        <?php if($consultation->state->code() != 'not-verified'): ?>
             <?php if (isset($component)) { $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\InputTextV::class, ['name' => 'communication_type_value','id' => 'communication_type_value','value' => ''.e(old('communication_type_value', $consultation->communication_type_value)).'','title' => 'Ссылка на онлайн-конференцию','placeholder' => 'Введите ссылку на онлайн-конференцию']); ?>
<?php $component->withName('inputs.input-text-v'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f)): ?>
<?php $component = $__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f; ?>
<?php unset($__componentOriginal6f417fce8705f24be4ffdd0013eba9d6e3da039f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 


            <div class="form-group mb-8">
                <label class="font-weight-bold font-size-h5">Какой способ связи предпочитаете - где удобнее получить консультацию?</label>

                <div class="radio-list">
                    <label class="radio font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                        <input type="radio" <?php if($consultation->communication_type == 'zoom'): ?> checked <?php endif; ?> value="zoom" name="communication_type"/>
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                        Zoom (можно без установки приложения, через браузер)
                    </label>
                    <label class="radio font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                        <input type="radio" <?php if($consultation->communication_type == 'whatsapp'): ?> checked <?php endif; ?> value="whatsapp" name="communication_type"/>
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                        WhatsApp
                    </label>
                    <label class="radio font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                        <input type="radio" <?php if($consultation->communication_type == 'skype'): ?> checked <?php endif; ?> value="skype" name="communication_type"/>
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                        Skype
                    </label>
                    <label class="radio font-size-sm-h4 font-size-lg d-flex align-items-start align-content-start">
                        <input type="radio" <?php if($consultation->communication_type == 'irrelevant'): ?> checked <?php endif; ?> value="irrelevant" name="communication_type"/>
                        <span class="mr-4 min-w-20px w-20px h-20px min-h-20px"></span>
                        Не имеет значения
                    </label>
                </div>
            </div>

             <?php if (isset($component)) { $__componentOriginalec4e7c2b7732157c812928c5165529797836140c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Select::class, ['title' => 'Выберите статус консультации','name' => 'state','id' => 'state','currentValue' => ''.e(old('state', $consultation->state->code())).'','values' => $states,'required' => true]); ?>
<?php $component->withName('inputs.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalec4e7c2b7732157c812928c5165529797836140c)): ?>
<?php $component = $__componentOriginalec4e7c2b7732157c812928c5165529797836140c; ?>
<?php unset($__componentOriginalec4e7c2b7732157c812928c5165529797836140c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

            <div class="button-group mt-8">
                <button class="btn btn-success font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">
                    <i class="la la-save"></i>Сохранить
                </button>
                <a href="<?php echo e(route('consultations.list')); ?>" class="btn btn-outline-success font-weight-bolder font-size-h6 px-4 py-2 my-1 mr-1">К списку консультаций</a>
            </div>
        <?php endif; ?>
    </form>
</div>
<?php /**PATH /home/c41010/proftracker-4m3h.na4u.ru/www/resources/views/consultations/_edit/_consultation-tab.blade.php ENDPATH**/ ?>