<?php

/* /home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/layouts/mainLayout.htm */
class __TwigTemplate_b83a18682b66018fb1b778909f46d4a5d8efb409d4be9058b7500ef92399ea68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("header"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<body>


";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav_menu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "


";
        // line 10
        echo $this->env->getExtension('CMS')->pageFunction();
        echo "  
  

";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("analytics"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/layouts/mainLayout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  48 => 14,  44 => 13,  38 => 10,  33 => 7,  29 => 6,  23 => 2,  19 => 1,);
    }
}
