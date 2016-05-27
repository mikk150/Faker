<?php

namespace Faker\Provider\ge_GE;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    /**
     * @link  https://en.wikipedia.org/wiki/Telephone_numbers_in_Georgia_(country)
     */
    protected static $formats = array(
        '+995 3# ### ####',
        '+995 3## ### ###',
        '+995 4# ### ####',
        '+995 4# ### ###',
        '+995 5## ### ###',
        '00 3# ### ####',
        '00 3## ### ###',
        '00 4# ### ####',
        '00 4# ### ###',
        '00 5## ### ###',
    );
}
