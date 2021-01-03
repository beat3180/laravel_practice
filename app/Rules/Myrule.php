<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Myrule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    //整数が渡され、numプロパティに保管する
    public function __construct($n)
    {
        $this->num = $n;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    //チェック処理。割り切れる数ならtrue、割り切れなければfalse
    public function passes($attribute, $value)
    {
        return $value % $this->num == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->num . 'で割り切れる数が必要です';
    }
}
