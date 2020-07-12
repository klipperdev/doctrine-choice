<?php

/*
 * This file is part of the Klipper package.
 *
 * (c) François Pluchino <francois.pluchino@klipper.dev>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Klipper\Component\DoctrineChoice\DataLoader;

use Klipper\Component\DataLoader\Traits\YamlLoaderTrait;

/**
 * @author François Pluchino <francois.pluchino@klipper.dev>
 */
class YamlChoiceLoader extends BaseChoiceLoader
{
    use YamlLoaderTrait;
}
