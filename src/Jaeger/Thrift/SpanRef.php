<?php
namespace Jaeger\Thrift;

/**
 * Autogenerated by Thrift Compiler (0.11.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class SpanRef extends TBase {
  static $isValidate = false;

  static $_TSPEC = array(
    1 => array(
      'var' => 'refType',
      'isRequired' => true,
      'type' => TType::I32,
      ),
    2 => array(
      'var' => 'traceIdLow',
      'isRequired' => true,
      'type' => TType::I64,
      ),
    3 => array(
      'var' => 'traceIdHigh',
      'isRequired' => true,
      'type' => TType::I64,
      ),
    4 => array(
      'var' => 'spanId',
      'isRequired' => true,
      'type' => TType::I64,
      ),
    );

  /**
   * @var int
   */
  public $refType = null;
  /**
   * @var int
   */
  public $traceIdLow = null;
  /**
   * @var int
   */
  public $traceIdHigh = null;
  /**
   * @var int
   */
  public $spanId = null;

  public function __construct($vals=null) {
    if (is_array($vals)) {
      parent::__construct(self::$_TSPEC, $vals);
    }
  }

  public function getName() {
    return 'SpanRef';
  }

  public function read($input)
  {
    return $this->_read('SpanRef', self::$_TSPEC, $input);
  }

  public function write($output) {
    return $this->_write('SpanRef', self::$_TSPEC, $output);
  }

}

