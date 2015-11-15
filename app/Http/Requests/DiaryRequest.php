<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DiaryRequest extends Request
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
        return [
            'date' => 'required|date',
            'time_to_bed' => 'required|date_format:H:i',
            'time_asleep' => 'required|date_format:H:i',
            'time_awake' => 'required',
            'times_awake' => 'required|numeric',
            'awake_duration' => 'required',
            'sleep_length' => 'required',
            'medication' => 'required',
            'well_rested' => 'required|numeric|max:4',
            'quality' => 'required|numeric|max:4'
            
        ];
    }
}
