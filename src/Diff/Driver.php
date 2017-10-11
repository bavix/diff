<?php

namespace Bavix\Diff;

interface Driver
{
    public function diff($oldData, $newData);
    public function patch($data, $patch);
}
