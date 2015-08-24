<?php

/* /home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/pages/post.htm */
class __TwigTemplate_7e4bef492e5576507a642c76a01062dacff46ba991eaf2ab4074d33d36283e95 extends Twig_Template
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
        echo "<header class=\"intro-header\" style=\"background-image: url('";
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/skitty.jpg");
        echo "')\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
            <div class=\"post-heading\">
                <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>
                <span class=\"meta\">Posted on ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
</div>
</header>
<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                ";
        // line 17
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content_html", array());
        echo "
            </div>
        </div>
    </div>
</article>
<hr>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  32 => 7,  28 => 6,  19 => 1,);
    }
}
