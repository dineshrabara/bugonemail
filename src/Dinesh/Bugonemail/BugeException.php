<?php

namespace Dinesh\Bugonemail;

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
            $request['fullUrl'] = \Request::fullUrl();
            $request['input'] = \Request::input();
            $request['cookie'] = \Request::cookie();
            $request['header'] = \Request::header();
            $request['server'] = \Request::server();
            $request['json'] = \Request::json();
            $request['request_format'] = \Request::format();
            $request['error'] = (string) $exception;
            \Mail::send("{$this->config['email_template']}", $request, function($message) use ($request) {
                $message->to($this->config['notify_emails'])->subject('BugOnEmail! On Url ' . $request['fullUrl']);
            });
        }
        return $exception;
    }

}
