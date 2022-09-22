<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Crypto config.
 *
 * @see encrypt()
 * @see decrypt()
 */
return [
    'default' => [
        'key' => sodium_base642bin('Gxl6wolkdPNHldGjihEmrYIgHmkVjWOmJe/eVAVQlZk=', \SODIUM_BASE64_VARIANT_ORIGINAL),
    ],
];
