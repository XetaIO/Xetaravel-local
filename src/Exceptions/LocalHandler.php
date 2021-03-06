<?php
namespace Xetaio\Local\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\App;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class LocalHandler extends ExceptionHandler
{

    /**
     * Register the Whoops handler and handle exception.
     *
     * @param \Exception $e The exception to convert.
     *
     * @return \Illuminate\Http\Response
     */
    protected function convertExceptionToResponse(Exception $e)
    {
        if (App::isLocal()) {
            $whoops = new Run();
            $whoops->pushHandler(new PrettyPageHandler());

            return response()->make(
                $whoops->handleException($e),
                method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500,
                method_exists($e, 'getHeaders') ? $e->getHeaders() : []
            );
        }

        return parent::convertExceptionToResponse($e);
    }
}
