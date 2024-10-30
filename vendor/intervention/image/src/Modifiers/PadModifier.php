<?php

namespace Intervention\Image\Modifiers;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\SizeInterface;

class PadModifier extends ContainModifier
{
    public function getCropSize(ImageInterface $image): SizeInterface
    {
        return $image->size()
            ->containMax(
                $this->width,
                $this->height
            )
            ->alignPivotTo(
                $this->getResizeSize($image),
                $this->position
            );
    }
}
