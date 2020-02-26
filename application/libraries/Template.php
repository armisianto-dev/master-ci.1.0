<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template
{

    protected $CI;
    protected $template = 'layouts/nifty/main';
    protected $css = array();
    protected $js = array(
        'top' => array(),
        'bottom' => array(),
    );

    protected $dataparent = array();

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function set($template, $data = array())
    {
        $this->template = $template;
        if(isset($data)){
            $this->dataparent = $data;
        }
    }

    public function setData($data = array())
    {
        if(isset($data)){
            $this->dataparent = $data;
        }
    }

    public function load($content, $data = array())
    {
        if (!is_file(VIEWPATH . $content . '.php')) {
            show_error("Unable to load the requested file: view/$content.php");
        }
        $data['content'] = $content;
        $this->CI->load->view($this->template, array_merge($data, $this->dataparent));
    }

    public function js($path, $position = 'top')
    {
        $position = $position == 'top' ? 'top' : 'bottom';
        if (!is_array($path)) {
            $path = array($path);
        }
        foreach ($path as $value) {
            array_push($this->js[$position], $value);
        }
    }

    public function css($path)
    {
        if (!is_array($path)) {
            $path = array($path);
        }
        foreach ($path as $value) {
            array_push($this->css, $value);
        }
    }

    public function buildCss()
    {
        $html = '';
        foreach ($this->css as $css) {
            $path = base_url($css);
            if (filter_var($css, FILTER_VALIDATE_URL)) {
                $path = $css;
            }
            $html .= '<link rel="stylesheet" href="' . $path . '">' . "\n";
        }
        return $html;
    }

    public function buildJs($position)
    {
        $html = '';
        foreach ($this->js[$position] as $js) {
            $path = base_url($js);
            if (filter_var($js, FILTER_VALIDATE_URL)) {
                $path = $js;
            }
            $html .= '<script type="text/javascript" src="' . $path . '"></script>' . "\n";
        }
        return $html;
    }
}
