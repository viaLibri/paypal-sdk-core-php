<?php
namespace PayPal\Exception;

class PPMissingCredentialException
  extends \Exception
{

    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);
    }

    public function errorMessage()
    {
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile()
          . ': <b>' . $this->getMessage() . '</b>';

        return $errorMsg;
    }

}
