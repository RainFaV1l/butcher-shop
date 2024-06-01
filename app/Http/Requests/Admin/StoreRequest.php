<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return !is_null($this->user()) && $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'preview' => 'required|image|max:8192',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'developed_date' => 'nullable|date',
            'price' => 'required|numeric|max:1000000|min:1',
            'in_stock' => 'required|bool',
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
            'preview.required' => 'Поле превью обязательно для заполнения',
            'name.required' => 'Поле название обязательно для заполнения',
            'description.required' => 'Поле описание обязательно для заполнения',
            'developed_date.required' => 'Поле дата изготовления обязательно для заполнения',
            'price.required' => 'Поле цена обязательно для заполнения',
            'price.in_stock' => 'Поле в наличии обязательно для заполнения',
            'max' => 'Максимальный разме поля 255',
            'description.max' => 'Максимальный разме поля 5000',
            'price.max' => 'Максимальная цена товара 1000000',
            'price.min' => 'Минимальная цена товара 1',
            'price.numeric' => 'Цена должно быть числом',
            'in_stock.bool' => 'Поле в наличии должно быть типом bool',
            'developed_date.date' => 'Дата изготовления должно быть датой',
        ];
    }
}
