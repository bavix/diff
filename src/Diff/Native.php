<?php

namespace Bavix\Diff;

use Bavix\Exceptions\Runtime;

class Native implements Driver
{

    /**
     * Native constructor.
     *
     * @throws Runtime
     */
    public function __construct()
    {
        if (!function_exists('xdiff_string_diff'))
        {
            throw new Runtime('Extension `xdiff` not found');
        }
    }

    /**
     * @param string $oldData
     * @param string $newData
     *
     * @return string
     */
    public function diff($oldData, $newData)
    {
        return \xdiff_string_diff($oldData, $newData);
    }

    /**
     * @param string $data
     * @param string $patch
     *
     * @return string
     */
    public function patch($data, $patch)
    {
        return \xdiff_string_patch($data, $patch);
    }

}
