<?php

namespace Upgate\LaravelJsonRpc\Contract;

use Illuminate\Http\JsonResponse;

interface Server
{

    /**
     * @param string $payload
     * @return void
     */
    public function setPayload($payload);

    /**
     * @param $middlewareContext
     * @return JsonResponse
     */
    public function run($middlewareContext = null);

}