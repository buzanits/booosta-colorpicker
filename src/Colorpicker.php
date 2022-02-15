<?php
namespace booosta\colorpicker;

use \booosta\Framework as b;
b::init_module('colorpicker');

class Colorpicker extends \booosta\ui\UI
{
  use moduletrait_colorpicker;

  protected $name, $color;

  public function __construct($name = null, $color = null)
  {
    parent::__construct("colorpicker_$name");
    $this->name = $name;
    $this->color = $color;
  }

  public function after_instanciation()
  {
    parent::after_instanciation();

    if(is_object($this->topobj) && is_a($this->topobj, "\\booosta\\webapp\\Webapp")):
      $this->topobj->moduleinfo['colorpicker'] = true;
      if($this->topobj->moduleinfo['jquery']['use'] == '') $this->topobj->moduleinfo['jquery']['use'] = true;
    endif;
  }

  public function set_color($color) { $this->color = $color; }
  public function get_htmlonly() { return "<input type='color' name='$this->name' id='$this->id' value='$this->color'>"; }
  public function get_js() { return ''; }
}
