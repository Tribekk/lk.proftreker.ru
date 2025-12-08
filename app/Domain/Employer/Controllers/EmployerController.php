<?php

namespace Domain\Employer\Controllers;

use App\Admin\Middleware\AdminMiddleware;
use Domain\Employer\Actions\GetStudentsAction;
use Domain\Employer\Wrappers\StudentWrapper;
use Domain\User\Actions\AddDepthTestsAction;
use Domain\User\Models\User;
use Domain\User\Notifications\InviteDepthTestsNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Support\Controller;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware(AdminMiddleware::class);
    }

    public function studentsList(Request $request, GetStudentsAction $action)
    {
        $wrapper = new StudentWrapper();

        return view('employer.students.list.view')
            ->withWrapper($wrapper)
            ->withStudents($action->run($request->all()));
    }


    public function studentsListToExcel(Request $request, GetStudentsAction $action)
    {
        $wrapper = new StudentWrapper();

        $students=$action->run($request->all(),false);
        dd($wrapper,$students);

      //  return view('employer.students.list.view')
     //       ->withWrapper($wrapper)
      //      ->withStudents($action->run($request->all()));
    }
     

    public function inviteDepthTests(User $student, AddDepthTestsAction $action)
    {
        $action->run($student);

        try {
            $student->notify(new InviteDepthTestsNotification);
        } catch (\Exception $exception) {
            Log::error("Уведомление не отправлено. Текст ошибки: ". $exception->getMessage());
        }

        return redirect()->back(201);
    }

    public function inviteStudentsDepthTests(Request $request, GetStudentsAction $action, AddDepthTestsAction $inviteAction)
    {
        $students = $action->run($request->all(), false);

        set_time_limit(0);
        foreach ($students as $student) {
            $inviteAction->run($student);

            try {
                $student->notify(new InviteDepthTestsNotification);
                sleep(1);
            } catch (\Exception $exception) {
                Log::error("Уведомление не отправлено. Текст ошибки: ". $exception->getMessage());
            }
        }

        return redirect()->back(201);
    }
}
