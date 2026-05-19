<?php

namespace Modulatte\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $otherRules = [];
        $rules = [
            'email' => 'required|email',
            'phone' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
        ];

        if (request()->get('template') == 'front.pages.medical-re-fill-form') {

            $otherRules = [
                'data.pet_name' => 'required|max:255',
                'data.product_name' => 'required|max:255',
                'data.product_size' => 'required|max:255',
                'data.quantity' => 'required|max:255',
            ];
        }

        if (request()->get('template') == 'front.pages.new-client-registration') {
            $otherRules = [
                'data.home_phone' => 'required|max:255',
                'data.pet_owner_address' => 'required',
            ];
        }

        return array_merge($rules, $otherRules);
    }

    /**
     *
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First Name field is required.',
            'last_name.required' => 'Last Name field is required.',
            'phone.required' => 'Phone field is required.',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'message.required' => 'Message is required',

            'data.pet_name.required' => 'Pet Name field is required',
            'data.product_name.required' => 'Product Name field is required',
            'data.product_size.required' => 'Product Size field is required',
            'data.quantity.required' => 'Quantity field is required',

        ];
    }
}
