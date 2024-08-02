<?php

namespace App\Http\Controllers;


use App\Models\Box;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function get_page(Request $request)
    {
        $page_id = $request->input('page_id');

        if ($page_id == 1) {


            $view = view("partials.dashboard");
            $viewSourceCode = $view->render();

            return [
                "view" => $viewSourceCode
            ];
        } elseif ($page_id == 2) {
            $user = Auth::user();
            $view = view("partials.details", compact('user'));
            $viewSourceCode = $view->render();

            return [
                "view" => $viewSourceCode
            ];

        } elseif ($page_id == 3) {
            $users = User::all();
            $view = view("partials.search", compact('users'));
            $viewSourceCode = $view->render();

            return [
                "view" => $viewSourceCode
            ];
        } elseif ($page_id == 4) {
            $view = view("partials.messages");
            $viewSourceCode = $view->render();

            return [
                "view" => $viewSourceCode
            ];
        } elseif ($page_id == 5) {
            $view = view("partials.gifts");
            $viewSourceCode = $view->render();

            return [
                "view" => $viewSourceCode
            ];
        } else {
            return [
                "view" => null
            ];
        }


    }

}
