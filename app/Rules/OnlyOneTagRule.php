<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OnlyOneTagRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $tags = array_map('strval', explode(' ', $value));
        if(count($tags) > 1) {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Tag nie może składać się z dwóch oddzielonych od siebie ciagów znaków ';
    }
}
