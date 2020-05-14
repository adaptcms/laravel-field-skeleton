<?php

namespace Adaptcms\:uc:vendor\:uc:package;

use Adaptcms\Fields\Field;

class :uc:package extends Field
{
  /**
  * Get Value
  *
  * @return mixed
  */
  public function getValue()
  {
    return $this->value;
  }

  /**
  * Set Value
  *
  * @param mixed $value
  *
  * @return void
  */
  public function setValue($value)
  {
    $this->value = $value;
  }
}
