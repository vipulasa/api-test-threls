<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            // start date should be a valid date and should be before the end date
            'start_date' => 'required|date|before:end_date',
            // end date should be a valid date and should be after the start date
            'end_date' => 'required|date|after:start_date',
        ];
    }
}
