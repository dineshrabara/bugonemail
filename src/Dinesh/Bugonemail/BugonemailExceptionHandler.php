<?php

namespace Dinesh\Bugonemail;

use App;
use Exception;
use App\Exceptions\Handler as ExceptionHandler;

class BugonemailExceptionHandler extends ExceptionHandler
{

    /**
     *
     * @param Exception $e
     * @return type
     */
    public function report(Exception $e)
    {
        $this->prevent_exception = config('bugonemail.prevent_exception');
        $shouldReport            = true;

        foreach ($this->prevent_exception as $type) {
            if ($e instanceof $type) $shouldReport = false;
        }        
        if ($shouldReport) {
            $bugonemail = App::make('Bugonemail');
            $bugonemail->notifyException($e);
        }
        return parent::report($e);
    }
}