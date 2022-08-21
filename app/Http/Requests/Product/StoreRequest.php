<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\Types\Nullable;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',

            'description' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'price' => 'required|integer',
            'count' => 'required|integer',
            'is_published' => 'nullable',
            'category_id' => 'nullable',
            'tags' => 'nullable|array',
            'colors' => 'nullable|array',
         ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Это поле нужно заполнить',
            'title.string' => 'Вводимые данные должны иметь строчный тип',
            'description.required' => 'Это поле нужно заполнить',
            'description.string' => 'Вводимые данные должны иметь строчный тип',
            'content.required' => 'Это поле нужно заполнить',
            'content.string' => 'Вводимые данные должны иметь строчный тип',
            'preview_image.required' => 'Необходимо добавить изображение',
            'preview_image.file' => 'Вводимые данные должны иметь файловый тип',
            'price.required' => 'Это поле нужно заполнить',
            'price.integer' => 'Вводимые данные должны быть целым числом',
            'count.required' => 'Это поле нужно заполнить',
            'count.integer' => 'Вводимые данные должны быть целым числом',

        ];
    }
}
