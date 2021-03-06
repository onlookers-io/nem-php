<?php
/**
 * Part of the evias/nem-php package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    evias/nem-php
 * @version    1.0.0
 * @author     Grégory Saive <greg@evias.be>
 * @license    MIT License
 * @copyright  (c) 2017-2018, Grégory Saive <greg@evias.be>
 * @link       http://github.com/evias/nem-php
 */
namespace NEM\Errors;

use RuntimeException;

/**
 * This is the NISInvalidPrivateKeySize Exception
 *
 * This exception is thrown when an invalid size
 * is detected on passed data for the public key
 * of a KeyPair.
 * 
 * @see \NEM\Core\KeyPair
 */
class NISInvalidPublicKeySize
    extends RuntimeException
{
}
