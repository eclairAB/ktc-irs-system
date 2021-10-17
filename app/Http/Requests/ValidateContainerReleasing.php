<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContainerReleasing extends FormRequest
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
            'booking_no'=> 'required',
            'consignee'=> 'required',
            'hauler'=> 'required',
            'plate_no'=> 'required',
            'seal_no'=> 'required',
            'upload_photo'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'signature'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'booking_no.required' => 'Booking No. field not match.',
            'consignee.required' => 'Consignee field required.',
            'hauler.required' => 'Hauler  fieldrequired.',
            'plate_no.required' => 'Plate No. field required.',
            'seal_no.required' => 'Seal No. field required.',
            'upload_photo.max'  => 'Maximum size to upload is 2MB.',
            'upload_photo.required'  => 'Photo is required.',
            'signature.required'  => 'Signature field is required.',
        ];
    }
}
