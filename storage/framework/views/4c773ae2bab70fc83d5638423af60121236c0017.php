<tbody class="datatable-body">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="font-size-lg">
        <td class="fit">
            <?php echo e($users->firstItem() + $index); ?>

        </td>

        <td>
            <?php echo e($user->full_name); ?>

        </td>

        <td>
            <div class="min-w-120px max-w-120px">
                <?php echo e($user->kladr_name); ?>

            </div>
        </td>

        <td>
            <div class="min-w-110px max-w-110px">
                <?php echo $user->school; ?>

            </div>
        </td>

        <td>
            <?php echo e($user->class); ?>

        </td>

        <td>
            <?php if($user->phone): ?>
                <div class="link cursor-pointer" onclick="$.sendSmsDialog('<?php echo e($user->phone); ?>')"><?php echo e($user->phone); ?></div>
            <?php else: ?>
                <i class="la la-minus text-muted"></i>
            <?php endif; ?>
        </td>

        <td class="">
            <div class="text-break min-w-200px max-w-200px">
                <?php if($user->email): ?>
                    <a target="_blank" class="link cursor-pointer" href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a>
                <?php else: ?>
                    <i class="la la-minus text-muted"></i>
                <?php endif; ?>
            </div>
        </td>

        <td>
            <?php if($user->parent__full_name): ?>
                <?php echo e($user->parent__full_name); ?>

            <?php else: ?>
                <i class="la la-minus text-muted"></i>
            <?php endif; ?>
        </td>
        <td>
            <?php if($user->parent__phone): ?>
                <div class="link cursor-pointer" onclick="$.sendSmsDialog('<?php echo e($user->parent__phone); ?>')"><?php echo e($user->parent__phone); ?></div>
            <?php else: ?>
                <i class="la la-minus text-muted"></i>
            <?php endif; ?>
        </td>
        <td>
            <div class="text-break min-w-200px max-w-200px">
                <?php if($user->parent__email): ?>
                    <a target="_blank" class="link cursor-pointer" href="mailto:<?php echo e($user->parent__email); ?>"><?php echo e($user->parent__email); ?></a>
                <?php else: ?>
                    <i class="la la-minus text-muted"></i>
                <?php endif; ?>
            </div>
        </td>
        <td>
            <div class="min-w-250px max-w-250px">
                <?php if($user->parent_questionnaire_finished): ?>
                   <span class="text-success">Заполнена анкета родителя</span>
                    <a target="_blank" href="<?php echo e(route('quiz.results.parent_questionnaire', $user->parent_id)."?backTo=".urlencode(url()->full())); ?>" data-toggle="tooltip" title="Просмотр анкеты" class="btn btn-success btn-icon btn-sm ml-3"><i class="la la-eye"></i></a>
                <?php else: ?>
                    <span class="text-primary">Нет анкеты родителя</span>
                <?php endif; ?>
            </div>
        </td>
        <td>
            <div class="min-w-200px max-w-200px">
                <?php if($user->student_questionnaire_finished): ?>
                    <span class="text-success">Да</span>
                    <a target="_blank" href="<?php echo e(route('quiz.results.student_questionnaire', $user->user_id)."?backTo=".urlencode(url()->full())); ?>" data-toggle="tooltip" title="Просмотр анкеты" class="btn btn-success btn-icon btn-sm ml-3"><i class="la la-eye"></i></a>
                <?php else: ?>
                    <span class="text-primary">Нет</span>
                <?php endif; ?>
            </div>
        </td>
        <td>
            <div class="min-w-80px">
                <?php if($user->base_tests_finished): ?>
                    <span class="text-success">Да</span>
                    <a target="_blank" href="<?php echo e(route('quiz.user_results', $user->user_id)."?backTo=".urlencode(url()->full())); ?>" data-toggle="tooltip" title="Просмотр результатов тестирования" class="btn btn-success btn-icon btn-sm ml-3"><i class="la la-eye"></i></a>
                <?php else: ?>
                    <?php if($user->base_tests_precentage): ?>
                        <span class="font-orange d-block"><?php echo e($user->base_tests_precentage); ?>%</span>
                    <?php else: ?>
                        <span class="text-primary d-block">Нет</span>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </td>
        <td>
            <div class="min-w-200px max-w-200px">
                <span class="<?php echo e($user->baseStepSelectionColorClass); ?>"><?php echo e($user->baseStepSelectionLabel); ?></span>
            </div>
        </td>
        <td>
           <div class="min-w-200px">
               <?php if($user->invited_depth_tests): ?>
                   <span class="text-success">Приглашен</span>
               <?php else: ?>
                   <span class="text-muted d-block">Не приглашен на глубинное тестирование</span>
               <?php endif; ?>
           </div>
        </td>
        <td>
           <div class="min-w-80px">
               <?php if($user->depth_tests_finished): ?>
                   <span class="text-success">Да</span>
                   <a target="_blank" href="<?php echo e(route('quiz.user_results', $user->user_id)."?backTo=".urlencode(url()->full())); ?>#inclinations" data-toggle="tooltip" title="Просмотр результатов тестирования" class="btn btn-success btn-icon btn-sm ml-3"><i class="la la-eye"></i></a>
               <?php else: ?>
                   <?php if($user->depth_tests_precentage): ?>
                       <span class="font-orange d-block"><?php echo e($user->depth_tests_precentage); ?>%</span>
                   <?php else: ?>
                       <span class="text-primary d-block">Нет</span>
                   <?php endif; ?>
               <?php endif; ?>
           </div>
        </td>
        <td>
            <?php if($user->got_consultation_status == 'carried_out'): ?>
                <span class="text-success">Ребенок получил консультацию</span>
            <?php elseif($user->got_consultation_status == 'invited'): ?>
                <span class="font-orange">Приглашен</span>
            <?php else: ?>
                <span class="text-primary">Не приглашен</span>
            <?php endif; ?>
        </td>
        <td>
            <?php if($user->got_consultation_status_with_parent == 'carried_out'): ?>
                <span class="text-success">Родитель получил консультацию</span>
            <?php elseif($user->got_consultation_status_with_parent == 'invited'): ?>
                <span class="font-orange">Приглашен</span>
            <?php else: ?>
                <span class="text-primary">Не приглашен</span>
            <?php endif; ?>
        </td>
        <td>
            <div class="min-w-200px max-w-200px">
                <span class="<?php echo e($user->depthStepSelectionColorClass); ?>"><?php echo e($user->depthStepSelectionLabel); ?></span>
            </div>
        </td>
        <td>
            <?php if($user->recommend == 'recommend'): ?>
                <span class="text-success">Рекомендован</span>
            <?php elseif($user->recommend == 'not_recommend'): ?>
                <span class="text-primary">Не рекомендован</span>
            <?php else: ?>
                <span class="text-primary">Нет информации</span>
            <?php endif; ?>
        </td>
        <td>
            <div class="min-w-150px max-w-150px">
                <?php if($user->agree == 'agree'): ?>
                    <span class="text-success">Согласен</span>
                <?php elseif($user->agree == 'not_agree'): ?>
                    <span class="text-primary">Не согласен</span>
                <?php elseif($user->agree == 'think'): ?>
                    <span class="font-orange">Думает</span>
                <?php else: ?>
                    <span class="text-primary">Нет информации</span>
                <?php endif; ?>
            </div>
        </td>

        <td>
            <div class="min-w-150px max-w-150px">
               <span class="font-blue"><?php echo e($user->count_visited_events); ?></span> / <span class="text-primary"><?php echo e($user->count_events); ?></span>
            </div>
        </td>

        <td>
            <div class="text-nowrap">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('employer.students.selection-results', ['row' => $user])->html();
} elseif ($_instance->childHasBeenRendered('tEtI6Zs')) {
    $componentId = $_instance->getRenderedChildComponentId('tEtI6Zs');
    $componentTag = $_instance->getRenderedChildComponentTagName('tEtI6Zs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tEtI6Zs');
} else {
    $response = \Livewire\Livewire::mount('employer.students.selection-results', ['row' => $user]);
    $html = $response->html();
    $_instance->logRenderedChild('tEtI6Zs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:employer.students.selection-results>
            </div>
        </td>

        <td>
           <div class="min-w-300px d-flex flex-column">
               <button class="btn btn-success px-4 mt-1" onclick="sendNotify(<?php echo e($user->user_id); ?>)">Отправить сообщение</button>
               <button class="btn btn-success px-4 mt-1" onclick="sendInviteEvent(<?php echo e($user->user_id); ?>)">Пригласить на мероприятие</button>
               <?php if(!$user->base_tests_finished): ?>
                    <button class="btn btn-success px-4 mt-1" onclick="sendInviteTests(<?php echo e($user->user_id); ?>, 'base')">Пригласить на базовое тестирование</button>
               <?php endif; ?>
               <?php if(!$user->depth_tests_finished): ?>
                    <button class="btn btn-success px-4 mt-1" onclick="sendInviteTests(<?php echo e($user->user_id); ?>, 'depth')">Пригласить на углубленное тестирование</button>
               <?php endif; ?>
           </div>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

<?php $__env->startPush('scripts'); ?>
    <script>
        function sendInviteTests(userId = null, type) {
            const titleTypes = {
                depth: 'Приглашение на глубинное тестирование',
                base: 'Приглашение на базовое тестирование',
            };

            const inputMessage =
                '<div class="form-group text-left">' +
                '<label for="swal__message" class="font-size-h6 font-weight-bolder text-dark required">Введите текст приглашения</label>' +
                '<textarea name="message" style="resize: none" class="form-control form-control-solid min-h-40px py-2 px-3 rounded-lg" id="swal__message" placeholder="Текст приглашения" rows="4"></textarea>' +
                '<div class="text-dark-50 mt-2" style="font-size:13px;">* Ссылка будет автоматически подставлена</div>' +
                '</div>';

            Swal.fire({
                title: `<h2 class="font-weight-bold font-size-h3 p-0 mb-5 font-hero">${titleTypes[type]}</h2>`,
                html: inputMessage,
                confirmButtonColor: 'var(--success)',
                confirmButtonText: 'Отправить',
                showCancelButton: true,
                cancelButtonText: 'Закрыть',
                showLoaderOnConfirm: true,
                allowOutsideClick: false,
                width: 600,
                preConfirm: () => {
                    const message = document.getElementById('swal__message').value;

                    return $.post(userId ? `/employer/send_invite/${userId}` : `/employer/send_invite`, {
                        message,
                        type: type+'_tests',
                        users: <?php echo e($user_ids ?? []); ?>,
                    }).then(response => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Успешно',
                            confirmButtonColor: 'var(--success)',
                            html: `Приглашение отправлено`,
                        });

                        return 1;
                    }).catch(error => {
                        let message = '';

                        if(!!error.message) {
                            message = error.message;
                        } else if(error.responseJSON.errors) {
                            const firstKey = Object.keys(error.responseJSON.errors)[0];
                            message = error.responseJSON.errors[firstKey][0];
                        } else if (error.responseJSON.message) {
                            message = error.responseJSON.message;
                        } else {
                            message = error;
                        }

                        Swal.showValidationMessage(`${message}`);
                    });
                },
            });
        }

        function sendNotify(userId = null) {
            const inputTitle =
                '<div class="form-group text-left">' +
                '<label for="swal__title" class="font-size-h6 font-weight-bolder text-dark required">Введите заголовок сообщения</label>' +
                '<input name="title" class="form-control form-control-solid py-2 px-3 rounded-lg" id="swal__title" placeholder="Заголовок сообщения"/>' +
                '</div>';

            const inputMessage =
                '<div class="form-group text-left">' +
                '<label for="swal__message" class="font-size-h6 font-weight-bolder text-dark required">Введите текст сообщения</label>' +
                '<textarea name="message" style="resize: none" class="form-control form-control-solid min-h-40px py-2 px-3 rounded-lg" id="swal__message" placeholder="Текст сообщения" rows="6"></textarea>' +
                '<div class="text-dark-50 mt-2" style="font-size:13px;">* Ссылка будет автоматически подставлена</div>' +
                '</div>';

            const inputUrl =
                '<div class="form-group text-left">' +
                '<label for="swal__url" class="font-size-h6 font-weight-bolder text-dark">Введите ссылку, которую отобразить пользователю</label>' +
                '<input name="title" class="form-control form-control-solid py-2 px-3 rounded-lg" id="swal__url" placeholder="Заголовок сообщения"/>' +
                '</div>';

            Swal.fire({
                title: `<h2 class="font-weight-bold font-size-h3 p-0 mb-5 font-hero">Отправка сообщения</h2>`,
                html: inputTitle + inputMessage + inputUrl,
                confirmButtonColor: 'var(--success)',
                confirmButtonText: 'Отправить',
                showCancelButton: true,
                cancelButtonText: 'Закрыть',
                showLoaderOnConfirm: true,
                allowOutsideClick: false,
                width: 600,
                preConfirm: () => {
                    const title = document.getElementById('swal__title').value;
                    const message = document.getElementById('swal__message').value;
                    const url = document.getElementById('swal__url').value;

                    return $.post( userId ? `/employer/send_notify/${userId}` : `/employer/send_notify`, {
                        title,
                        message,
                        url,
                        users: <?php echo e($user_ids ?? []); ?>,
                    }).then(response => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Успешно',
                            confirmButtonColor: 'var(--success)',
                            html: `Сообщение отправлено`,
                        });

                        return 1;
                    }).catch(error => {
                        let message = '';

                        if(!!error.message) {
                            message = error.message;
                        } else if(error.responseJSON.errors) {
                            const firstKey = Object.keys(error.responseJSON.errors)[0];
                            message = error.responseJSON.errors[firstKey][0];
                        } else if (error.responseJSON.message) {
                            message = error.responseJSON.message;
                        } else {
                            message = error;
                        }

                        Swal.showValidationMessage(`${message}`);
                    });
                },
            });
        }

        function sendInviteEvent(userId = null, type) {
            var events = '';

            <?php if(Auth::user()->orgunitEvents): ?>
                <?php $__currentLoopData = Auth::user()->orgunitEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    events += '<option value="<?php echo e($event->id); ?>"><?php echo e($event->title); ?></option>';
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            const inputEvent =
                '<div class="form-group text-left">' +
                '<label for="swal__event" class="font-size-h6 font-weight-bolder text-dark required">Выберите мероприятие</label>' +
                '<select name="event_id" class="form-control form-control-solid min-h-40px py-2 px-3 rounded-lg" style="width: 100%;" id="swal__event">'+events+'</select>' +
                '</div>';

            const inputMessage =
                '<div class="form-group text-left">' +
                '<label for="swal__message" class="font-size-h6 font-weight-bolder text-dark required">Введите текст приглашения</label>' +
                '<textarea name="message" style="resize: none" class="form-control form-control-solid min-h-40px py-2 px-3 rounded-lg" id="swal__message" placeholder="Текст приглашения" rows="4"></textarea>' +
                '<div class="text-dark-50 mt-2" style="font-size:13px;">* Ссылка будет автоматически подставлена</div>' +
                '</div>';

            Swal.fire({
                title: `<h2 class="font-weight-bold font-size-h3 p-0 mb-5 font-hero">Приглашение на мероприятие</h2>`,
                html: inputEvent + inputMessage,
                confirmButtonColor: 'var(--success)',
                confirmButtonText: 'Отправить',
                showCancelButton: true,
                cancelButtonText: 'Закрыть',
                showLoaderOnConfirm: true,
                allowOutsideClick: false,
                width: 600,
                preConfirm: () => {
                    const message = document.getElementById('swal__message').value;
                    const eventId = document.getElementById('swal__event').value;

                    return $.post(userId ? `/employer/send_invite_event/${userId}` : `/employer/send_invite_event`, {
                        message,
                        event_id: eventId,
                        users: <?php echo e($user_ids ?? []); ?>,
                    }).then(response => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Успешно',
                            confirmButtonColor: 'var(--success)',
                            html: `Приглашение отправлено`,
                        });

                        return 1;
                    }).catch(error => {
                        let message = '';

                        if(!!error.message) {
                            message = error.message;
                        } else if(error.responseJSON.errors) {
                            const firstKey = Object.keys(error.responseJSON.errors)[0];
                            message = error.responseJSON.errors[firstKey][0];
                        } else if (error.responseJSON.message) {
                            message = error.responseJSON.message;
                        } else {
                            message = error;
                        }

                        Swal.showValidationMessage(`${message}`);
                    });
                },
            });
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/proftracker/resources/views/employer/reports/_students/_table-body.blade.php ENDPATH**/ ?>