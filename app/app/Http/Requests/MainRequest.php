<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MainRequest extends FormRequest
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
            'dateFrom' => 'nullable|date|date_format:Y-m-d|before_or_equal:today',
            'dateTo' => 'nullable|date|date_format:Y-m-d|after:dateFrom',
            'page' => 'nullable|integer|min:1',
            'key' => 'required|string',
            'limit' => 'nullable|integer|min:1',
        ];
    }

    public function messages(): array
    {
        return [
            'dateFrom.date' => 'Поле dateFrom должно быть датой.',
            'dateFrom.before_or_equal' => 'Введите дату в поле dateFrom не позже сегодняшней.',
            'dateFrom.date_format' => 'Поле dateFrom должно иметь формат YYYY-MM-DD.',

            'dateTo.date' => 'Поле dateTo должно быть датой.',
            'dateTo.date_format' => 'Поле dateTo должно иметь формат YYYY-MM-DD.',
            'dateTo.after' => 'Дата в поле dateTo должна быть позже, чем дата в dateFrom.',

            'page.integer' => 'Поле page должно быть числом.',
            'page.min' => 'Минимальная страница: 1.',

            'key.required' => 'Поле key обязательно для заполнения.',
            'key.string' => 'Поле key должно быть строкой.',

            'limit.integer' => 'Поле limit должно быть числом.',
            'limit.min' => 'Значение поля limit должно быть положительным.',
        ];
    }
}
