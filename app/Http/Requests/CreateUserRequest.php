<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:6',
            'remember_me'=> 'nullable'
        ];
    }

    public function messages()
    {
        return [
            "user_name.required"=>"وارد کردن یوزرنام الزامی است !",
            "password.required"=>"وارد کردن پسورد الزامی است !",
            "password.min"=>"حداقل طول پسورد باید 6 کاراکتر باشد !",
            "email.required"=>"وارد کردن ایمیل الزامی است !",
            "email.email"=>"ایمیل وارد شده درست نمیباشد !",
            "email.unique"=>"کاربری با این ایمیل قبلا ثبت نام کرده است",
            "user_name.unique"=>"کاربری با این نام کاربری قبلا ثبت نام کرده است",
        ];
    }

}
