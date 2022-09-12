<?php
    namespace App\Validators;

    use Illuminate\Support\Facades\Validator;

    class FileValidator{

        static function add($request){
            return Validator::make($request->all(), [
                                                        'img' => 'required|mimes:jpeg,jpg,png,pdf',
                                                    ]);
        }
    }
    
?>