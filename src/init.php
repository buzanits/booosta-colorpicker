<?php
namespace booosta\colorpicker;

\booosta\Framework::add_module_trait('webapp', 'colorpicker\webapp');

trait webapp
{
  protected function preparse_colorpicker()
  {
    $libpath = 'vendor/npm-asset/spectrum-colorpicker/';
    if($this->moduleinfo['colorpicker'])
      $this->add_includes("<script type='text/javascript' src='{$this->base_dir}$libpath/spectrum.js'></script>
                           <link rel='stylesheet' href='{$this->base_dir}$libpath/spectrum.css' />");
  }
}
