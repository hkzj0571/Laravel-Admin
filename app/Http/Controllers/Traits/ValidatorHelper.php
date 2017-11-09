<?php

namespace App\Http\Controllers\Traits;

use Validator as Verify;
use App\Exceptions\ValidatorException;

trait ValidatorHelper
{
    public function validator($rulesName, $needs = null)
    {
        $rules = config("rules.{$rulesName}");

        $needs = $needs ? : request()->only(array_keys($rules));

        $result = Verify::make($needs, $rules);

        if (!$result->fails()) return $needs;

        throw new ValidatorException($result->errors()->first());
    }
}