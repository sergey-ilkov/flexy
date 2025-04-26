<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ServiceAdminFormRequest extends FormRequest
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
            'service_category_id' => 'required',
            'name' => ['required', Rule::unique('services')->ignore($this->id)],
            'icon' => 'image|mimes:png,jpg,webp,jpeg,svg,gif|max:100',
            'interset' => 'required|numeric|between:0,100.00',
            'term' => 'required|integer',
            'amount' => 'required|integer',
            'promo_code' => 'required|string',
            'promo_discount' => 'required|integer',
            'vote_rating' => 'required|integer|between:1,10',
            'vote_count' => 'required|integer',
            'rating' => 'required|numeric|between:0,10',
            'url' => 'required|url',
            'license' => 'required|string',
            'comp_name' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
        ];
    }
}