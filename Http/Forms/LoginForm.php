<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    protected $errors = [];

    public function _construct($attributes)
    {
        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Provide a valid email address';
        }

        if (!Validator::string($attributes['password'], 100)) {
            $this->errors['password'] = 'Provide a password a valid password';
        }
    }
    public static function validate($attributes): LoginForm
    {
        $instance = new static($attributes);

        if ($instance->failed()) {
            throw new ValidationException();
        }

        return $instance;
    }

    public function failed(): int
    {
        return count($this->errors);
    }
    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
}