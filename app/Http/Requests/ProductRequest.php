<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        //die(var_dump($this->route()->parameters));
        $rules = [
            'name' => 'required|string',
            'slug' => 'required|unique:product,slug,' . $this->product,
            'description' => 'required',
            'brand_id' => 'required|integer',
            'status' => 'integer'
        ];
        $thumbs = count($this->input('thumbnails'));
        foreach( range(0, $thumbs) as $index){
            $rules['thumbnails.' . $index] = 'image|mimes:jpeg,bmp,png,gif'; //|max:2000
        }
        return $rules;
    }

    public function messages()
    {
        //die(var_dump($this->route()->parameters));
        return [
            //'required' => "Please enter input",
            //'abbr.required' => "Please enter Abbr",
            //'abbr.unique'   => "Please enter don't match school abbr",
            'required' => 'This is required!',
            'unique'   => "This is unique!",
            'integer' => 'This is number!'
            //'description.required' => "Please enter description",
            //'introduction.required' => "Please enter introduction"
        ];
    }
}
