<?php

class Validation
{

    // form object
    private $objForm;
    // for storing all errors ids
    private $_errors = array();
    // Validate messages
    public $_message = array();
    // list of excepted fields;
    public $_expected = array();
    // list of required fields
    public $_required = array();
    // list of special validation fields
    // array('field_name' => 'format')
    public $_special = array();
    // post array
    public $_post = array();
    // fields to be removed from the $_post array
    public $_post_remove = array();
    // fields to be specifically formatted
    // array('field_name' => 'format')
    public $_post_format = array();

    public function __construct($objForm)
    {
        $this->objForm = $objForm;

        $this->_message = array(
            "first_name" => __('error_first_name','default'),
            "last_name" => __('error_last_name','default'),
            "address_1" => __('error_address_1','default'),
            "town" => __('error_town','default'),
            "county" => __('error_county','default'),
            "post_code" => __('error_post_code','default'),
            "country" => __('error_country','default'),
            "email" => __('error_email','default'),
            "email_duplicate" => __('error_email_duplicate','default'),
            "login" => __('error_login','default'),
            "password" => __('error_password','default'),
            "confirm_password" => __('error_confirm_password','default'),
            "password_mismatch" => __('error_password_mismatch','default'),

            'category' => "Please select the category",
            'name' => "Please provide the name",
            'description' => "Please provide a description",
            'price' => "Please provide a price",
            'name_duplicate' => "This name is already taken",
            'email_duplicate' => "This email is already taken",
            'address' => "Please provide the business address",
            'telephone' => "Please provide the telephone no.",
            'vat_rate' => "Please provide the VAT rate"
        );
        
    }

    public function process()
    {
        if ($this->objForm->isPost() && !empty($this->_required)) {
            // get only expected fields 
            $this->_post = $this->objForm->getPostArray($this->_expected);
            if (!empty($this->_post)) {
                foreach ($this->_post as $key => $value) {
                    $this->check($key, $value);
                }
            }
        }
    }

    public function check($key, $value)
    {
        if (!empty($this->_special) && array_key_exists($key, $this->_special)) {
            $this->checkSpecial($key, $value);
        } else {
            if (in_array($key, $this->_required) && empty($value)) {
                $this->add2Errors($key);
            }
        }
    }

    public function checkSpecial($key, $value)
    {
        switch ($this->_special[$key]) {
            case 'email':
                if (!$this->isEmail($value)) {
                    $this->add2Errors($key);
                }
                break;
        }
    }

    public function isEmail($email = null)
    {
        if (!empty($email)) {
            $result = filter_var($email, FILTER_VALIDATE_EMAIL);
            return !$result ? false : true;
        }
    }

    public function add2Errors($key)
    {
        $this->_errors[] = $key;
    }

    public function isValid()
    {
        $this->process();

        if (empty($this->_errors) && !empty($this->_post)) {
            //remove all unwanted fields
            if (!empty($this->_post_remove)) {
                foreach ($this->_post_remove as $value) {
                    unset($this->_post[$value]);
                }
            }
            // format all required fields
            if (!empty($this->_post_format)) {
                foreach ($this->_post_format as $key => $value) {
                    $this->format($key, $value);
                }
            }
            return true;
        }
        return false;
    }

    public function format($key, $value)
    {
        switch ($value) {
            case 'password':
                $this->_post[$key] = Login::string2hash($this->_post[$key]);
                break;
        }
    }

    public function validate($key)
    {
        if (!empty($this->_errors) && in_array($key, $this->_errors)) {
            return $this->wrapWarn($this->_message[$key]);
        }
    }

    public function wrapWarn($message)
    {
        if (!empty($message)) {
            return '<span class="warn">' . $message . '</span>';
        }
    }

}
