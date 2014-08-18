<?php

//

App::error(function(Exception $exception, $code)
{
    if ($exception instanceof Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
        return Response::make('not found', 404);
    } elseif (401 === $code) {
        return Response::make('尚未授權', 401);
    }

    Log::error($exception);
});