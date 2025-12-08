<?php

namespace App\User\Controllers;

use App\Providers\RouteServiceProvider;
use App\User\Requests\RegisterEmailRequest;
use Domain\User\Actions\CreateUser;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Support\Controller;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param RegisterEmailRequest $request
     * @return RedirectResponse|JsonResponse
     */
    public function register(RegisterEmailRequest $request)
    {
        $data = $request->validated();

        event(new Registered($user = $this->create($data)));

        $this->guard()->login($user, $request->filled('remember'));

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }

    protected function create(array $data)
    {
        $createUserAction = new CreateUser();
        return $createUserAction->run($data, false);
    }
}
