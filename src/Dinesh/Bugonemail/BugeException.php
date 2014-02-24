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
            $mail_data['data'] = (string)$exception;
            \Mail::send("{$this->config['email_template']}", $mail_data, function($message) {
                $message->to($this->config['notify_emails'])->subject('BugOnEmail!');
            });
        }
        return $exception;
    }

}
