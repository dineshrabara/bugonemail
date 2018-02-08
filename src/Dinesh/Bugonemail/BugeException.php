<?php

namespace Dinesh\Bugonemail;

use Illuminate\Support\Facades\Request;

/**
 * Description of BugeException
 *
 * @author Dinesh Rabara <dinesh.rabara@gmail.com>
 */
class BugeException {

    public $env = '';
    public $config = array();

    public function __construct($config = array()) {
        $this->config = $config;
    }

    public function setEnvironment($env) {
        $this->env = $env;
    }

    public function notifyException($exception) {     
        if (!empty($this->env)) {
            $request = array();
            $request['fullUrl'] = Request::fullUrl();
            $request['input_get'] = $_GET;
            $request['input_post'] = $_POST;
            $request['input_old'] = \Request::hasSession() ? Request::old() : array();
            $request['session'] = \Session::all();
            $request['cookie'] = Request::cookie();
            $request['file'] = Request::file();
            $request['header'] = Request::header();
            $request['server'] = Request::server();
            $request['json'] = Request::json();
            $request['request_format'] = Request::format();
            $request['error'] = $exception->getTraceAsString();
            $request['subject_line'] = $exception->getMessage();
            $request['class_name'] = get_class($exception);
            if (!in_array($request['class_name'], $this->config['prevent_exception'])) {                
                \Mail::send("{$this->config['email_template']}", $request, function($message) use ($request) {                    
                    $message->to($this->config['notify_emails'])->subject("{$this->config['project_name']} On Url " . $request['fullUrl']);
                });
            }
        }
        return $exception;
    }

}
