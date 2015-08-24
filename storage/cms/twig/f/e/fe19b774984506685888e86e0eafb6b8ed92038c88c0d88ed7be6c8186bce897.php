<?php

/* /home/omewqhix/public_html/themes/Bernasaurus/pages/category-list.htm */
class __TwigTemplate_fe19b774984506685888e86e0eafb6b8ed92038c88c0d88ed7be6c8186bce897 extends Twig_Template
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
        echo "<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class=\"intro-header\" style=\"background-image: url('";
        // line 3
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/skitty.jpg");
        echo "')\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <div class=\"site-heading\">
                    <h1>Bernasaurus</h1>
                    <hr class=\"small\">
                    <span class=\"subheading\">Anxiety and Me</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            ";
        // line 21
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 22
        echo "        </div>
    </div>
</div>

<hr>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/Bernasaurus/pages/category-list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  44 => 21,  23 => 3,  19 => 1,);
    }
}
