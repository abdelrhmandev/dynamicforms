<?php
namespace App\Http\Requests\backend;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
class RoleRequest extends FormRequest
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


    public function rules()
    {
        ///MULTI Languages Inputs Validation///////////
        $id = $this->request->get('id') ? ',' . $this->request->get('id') : '';

        foreach(\LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $rules['title_'.substr($properties['regional'],0,2)] = 'required|unique:roles,trans'.$id;
        } 





        $rules['name'] = 'required|unique:roles,name'.$id;
        $rules['permissions'] =  'exists:permissions,id';   
       

        return $rules; 

    }

 


 
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status'   => 'RequestValidation',
            'msg'      => $validator->errors()
        ]));
    }
    
}
