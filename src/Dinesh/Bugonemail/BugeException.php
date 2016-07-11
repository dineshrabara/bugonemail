<?php

namespace Dinesh\Bugonemail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestUrl;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
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
            $object = new Request();
            $request = array();
            $request['fullUrl'] = RequestUrl::fullUrl();
            $request['input_get'] = $_GET;
            $request['input_post'] = $_POST;
            $request['input_old'] = $object->all();
            $request['session'] = Session::all();
            $request['cookie'] = $object->cookie();
            $request['file'] = $object->file();
            $request['header'] = $object->header();
            $request['server'] = $object->server();
            $request['json'] = $object->json();
            $request['request_format'] = $object->format();
            $request['error'] = $exception->getTraceAsString();
            $request['subject_line'] = $exception->getMessage();
            $request['class_name'] = get_class($exception);            
            if (!in_array($request['class_name'], $this->config['prevent_exception'])) {
                Mail::send("{$this->config['email_template']}", $request, function($message) use ($request) {
                    $message->to($this->config['notify_emails'])->subject("{$this->config['project_name']} On Url " . $request['fullUrl']);
                });
            }
        }
        return $exception;
    }

}
