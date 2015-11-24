<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestInterface;

class FakePsr7TypeHintedId
{
}

/**
 * @Rest\RouteResource("Article")
 */
class TypeHintedPsr7Controller implements ClassResourceInterface
{
    public function cgetAction(MessageInterface $request)
    {
    }

    public function cpostAction(MessageInterface $request)
    {
    }

    public function getAction(RequestInterface $request, FakePsr7TypeHintedId $id)
    {
    }

    public function postAction(ServerRequestInterface $request, FakePsr7TypeHintedId $id)
    {
    }
}
