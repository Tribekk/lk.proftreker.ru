<?php $__env->startSection('subheader'); ?>
     <?php if (isset($component)) { $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Subheader::class, ['title' => 'Профтрекер']); ?>
<?php $component->withName('subheader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b)): ?>
<?php $component = $__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b; ?>
<?php unset($__componentOriginal94da708f5fed2e003e635f558c4309c9810b422b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
         <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, []); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title'); ?> Настройки <?php $__env->endSlot(); ?>
             <?php $__env->slot('toolbar'); ?> 
                 <?php if (isset($component)) { $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\ButtonLink::class, ['type' => 'btn-outline-success','link' => ''.e(route('dashboard')).'','title' => ''.e(__('Вернуться назад')).'']); ?>
<?php $component->withName('inputs.button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f)): ?>
<?php $component = $__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f; ?>
<?php unset($__componentOriginal08b461424c1656985c58a1aeedb49491fde44a5f); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
             <?php $__env->endSlot(); ?>

            <div class="row">
                <div class="col-md-8">
                    <form action="<?php echo e(route('dashboard.settings.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                         <?php if (isset($component)) { $__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\Status::class, []); ?>
<?php $component->withName('tables.status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8)): ?>
<?php $component = $__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8; ?>
<?php unset($__componentOriginalf1e0a8c207cd542db3d03d9e094fc40eeb15eaa8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        <h3 class="font-size-h3 font-weight-bold">Этапы тестов и консультаций</h3>

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'students_count','id' => 'students_count','value' => ''.e(old('students_count', Auth::user()->employerDashboardSettings['students_count'])).'','title' => 'Списочная численность школьников']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'registration_students_count','id' => 'registration_students_count','value' => ''.e(old('registration_students_count', Auth::user()->employerDashboardSettings['registration_students_count'])).'','title' => 'Зарегистрировано школьников']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'base_test','id' => 'base_test','value' => ''.e(old('base_test', Auth::user()->employerDashboardSettings['base_test'])).'','title' => 'Пройден базовый тест']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'participated_events','id' => 'participated_events','value' => ''.e(old('participated_events', Auth::user()->employerDashboardSettings['participated_events'])).'','title' => 'Участвовали в мероприятиях']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'matched_selection_base_step','id' => 'matched_selection_base_step','value' => ''.e(old('matched_selection_base_step', Auth::user()->employerDashboardSettings['matched_selection_base_step'])).'','title' => 'Соответствует базовому профилю']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'invite_depth_test','id' => 'invite_depth_test','value' => ''.e(old('invite_depth_test', Auth::user()->employerDashboardSettings['invite_depth_test'])).'','title' => 'Приглашены на углубленный тест']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'depth_test','id' => 'depth_test','value' => ''.e(old('depth_test', Auth::user()->employerDashboardSettings['depth_test'])).'','title' => 'Результаты углубленного теста']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'target_selection_depth_step','id' => 'target_selection_depth_step','value' => ''.e(old('target_selection_depth_step', Auth::user()->employerDashboardSettings['target_selection_depth_step'])).'','title' => 'Соответствует целевому профилю']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'got_consultation','id' => 'got_consultation','value' => ''.e(old('got_consultation', Auth::user()->employerDashboardSettings['got_consultation'])).'','title' => 'Дети получили консультацию, в том числе с родителями']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'parent_registration','id' => 'parent_registration','value' => ''.e(old('parent_registration', Auth::user()->employerDashboardSettings['parent_registration'])).'','title' => 'Зарегистрировано родителей']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'recommend','id' => 'recommend','value' => ''.e(old('recommend', Auth::user()->employerDashboardSettings['recommend'])).'','title' => 'Рекомендованные']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                        <div class="separator separator-solid my-7"></div>

                        <h3 class="font-size-h3 font-weight-bold">Итоги отбора</h3>

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'proposed_admission','id' => 'proposed_admission','value' => ''.e(old('proposed_admission', Auth::user()->employerDashboardSettings['proposed_admission'])).'','title' => 'Предложено поступление']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'applied_admission','id' => 'applied_admission','value' => ''.e(old('applied_admission', Auth::user()->employerDashboardSettings['applied_admission'])).'','title' => 'Подали заявления на поступление']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'enrolled_profile_uz','id' => 'enrolled_profile_uz','value' => ''.e(old('enrolled_profile_uz', Auth::user()->employerDashboardSettings['enrolled_profile_uz'])).'','title' => 'Зачислены в профильные УЗ']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\SwitchInput::class, ['name' => 'concluded_target_agreement','id' => 'concluded_target_agreement','value' => ''.e(old('concluded_target_agreement', Auth::user()->employerDashboardSettings['concluded_target_agreement'])).'','title' => 'Заключили ЦД']); ?>
<?php $component->withName('inputs.switch-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32)): ?>
<?php $component = $__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32; ?>
<?php unset($__componentOriginal9817703b7f890aa3be9d79438929d84381fc9b32); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

                         <?php if (isset($component)) { $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Inputs\Submit::class, ['title' => ''.e(__('Сохранить')).'']); ?>
<?php $component->withName('inputs.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a)): ?>
<?php $component = $__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a; ?>
<?php unset($__componentOriginal0d75fdd1ee12f34e798ece0533de749fd4d3d96a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                    </form>
                </div>
            </div>
         <?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/c41010/proftracker-new.na4u.ru/www/resources/views/employer/dashboard_settings.blade.php ENDPATH**/ ?>