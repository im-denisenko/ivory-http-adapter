<?php

/*
 * This file is part of the Ivory Http Adapter package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Ivory\HttpAdapter;

/**
 * Fopen http adapter.
 *
 * @author GeLo <geloen.eric@gmail.com>
 */
class FopenHttpAdapter extends AbstractStreamHttpAdapter
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fopen';
    }

    /**
     * {@inheritdoc}
     */
    protected function process($uri, $context)
    {
        $http_response_header = array();

        return array(@fopen($uri, 'rb', false, $context), $http_response_header);
    }
}
