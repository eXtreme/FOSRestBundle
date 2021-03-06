<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RequestParam;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\IdenticalTo;

class ParamFetcherController
{
    /**
     * @RequestParam(name="raw", requirements=@IdenticalTo({"foo"="raw", "bar"="foo"}), default="invalid")
     * @RequestParam(name="map", map=true, requirements=@IdenticalTo({"foo"="map", "foobar"="foo"}), default="invalid2")
     */
    public function paramsAction(ParamFetcherInterface $fetcher)
    {
        return new JsonResponse($fetcher->all(false));
    }
}
