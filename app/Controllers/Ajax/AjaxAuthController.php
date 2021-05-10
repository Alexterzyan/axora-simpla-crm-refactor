<?php

namespace App\Controllers\Ajax;

use App\Api\Users;
use App\Controllers\Controller;
use App\Eloquent\Models\User;
use App\Helpers\AuthHelper;
use App\Repositories\IUserDBRepository;
use App\RequestRules\User\RegisterUserRequest;
use Rakit\Validation\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class AjaxAuthController extends Controller
{
    protected $middleware = ['ajax'];
    private $container;
    private $users;

    public function __construct()
    {
        $this->users = new Users();
    }

    public function login(Request $request, JsonResponse $response, IUserDBRepository $userDBRepository, Session $session)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $user = $userDBRepository->findByEmail($email);

        if (!$user || !AuthHelper::validatePassword($password, $user['password'])) {
            return $this->jsonResponse($response, [
                'code' => 422,
                'errors' => 'Неправильный логин или пароль'
            ], 422);
        }

        $session->set('user_id', $user['id']);

        $userDBRepository->update($user['id'], ['last_ip' => $_SERVER['REMOTE_ADDR']]);

        return $this->jsonResponse($response, ['redirectUrl' => $request->headers->get('referer')]);
    }

    public function register(Request $request, JsonResponse $response, IUserDBRepository $userDBRepository, Session $session)
    {
        $validation = makeValidation(
            $this->container->get(Validator::class),
            $request,
            RegisterUserRequest::rules()
        );

        if ($validation->errors()) {
            $errors = $session->set('errors', $validation->errors()->toArray());
            $session->set('old', $request->request->all());
            back();
            return $this->jsonResponse($response, [
                'code' => 422,
                'errors' => $errors,
            ], 422);
        }

        $userDBRepository->create()

    }
}