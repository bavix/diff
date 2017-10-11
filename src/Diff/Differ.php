<?php

namespace Bavix\Diff;

use DiffMatchPatch\DiffMatchPatch;

class Differ implements Driver
{

    /**
     * @var DiffMatchPatch
     */
    protected $dmp;

    /**
     * Diff constructor.
     */
    public function __construct()
    {
        $this->dmp = new DiffMatchPatch();
    }

    /**
     * @param string $oldData
     * @param string $newData
     *
     * @return string
     */
    public function diff($oldData, $newData)
    {
        return $this->dmp->patch_toText(
            $this->dmp->patch_make($oldData, $newData)
        );
    }

    /**
     * @param string $data
     * @param string $patch
     *
     * @return string
     */
    public function patch($data, $patch)
    {
        return $this->dmp->patch_apply(
            $this->dmp->patch_fromText($patch),
            $data
        )[0] ?? '';
    }

}
