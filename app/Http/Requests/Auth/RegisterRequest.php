<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:255|unique:users,phone',
            'email' => 'required|string|max:255|unique:users,email',
            'password' => 'required|string|confirmed|max:255|min:6',
            'password_confirmation' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле имя обязательно для заполнения',
            'surname.required' => 'Поле фамилия обязательно для заполнения',
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'max' => 'Максимальный размер поля 255 символов',
            'phone.unique' => 'Поле телефон должно быть уникальным',
            'email.required' => 'Поле email обязательно для заполнения',
            'email.email' => 'Неверный формат почты',
            'email.unique' => 'Поле email должно быть уникальным',
            'string' => 'Поле должно быть строкой',
            'email.exists' => 'Данный email не зарегистрирован',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.string' => 'Поле пароль должно быть строкой',
            'password.min' => 'Минимальный размер пароля 6 символов',
        ];
    }
}
