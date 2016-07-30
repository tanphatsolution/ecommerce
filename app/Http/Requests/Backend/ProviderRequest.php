<?php

namespace App\Http\Requests\Backend;

use App\Http\Requests\Request;

class ProviderRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $all = $this->all();
        if ( !isset($all['locked']) || !$all['locked']) {
            $all['locked'] = false;
        }
        $this->replace($all);

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method()=='PATCH')
        {
            return [
                'name' => "required|min:4|max:255",
                'email' => "required|email|max:255|unique:providers,email," . $this->provider,
                'locked' => 'sometimes|boolean',
                'image'=> 'image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
            ];
        }
        else{
            return [
                'name' => "required|min:4|max:255",
                'email' => "required|email|max:255|unique:providers",
                'locked' => 'sometimes|boolean',
                'image'=> 'image|mimes:jpeg,jpg,gif,bmp,png|max:1200',
            ];
        }
    }
}
