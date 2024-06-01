<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'is_wholesale' => 'required|string',
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
            'is_wholesale.required' => 'Поле оптовая закупка обязательно для заполнения',
            'phone.required' => 'Поле телефон обязательно для заполнения',
            'max' => 'Максимальный размер поля 255 символов',
            'phone.unique' => 'Поле телефон должно быть уникальным',
        ];
    }
}
