<?php

/* /home/omewqhix/public_html/themes/Bernasaurus/pages/post.htm */
class __TwigTemplate_4bcedda8cd230138796562013cd1523f4fe9027e76042b38bca3e34866291d86 extends Twig_Template
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
                <span class=\"meta\">Posted
                    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in ";
        }
        // line 9
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ", ";
            }
            // line 11
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                    on ";
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
        // line 22
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
        return "/home/omewqhix/public_html/themes/Bernasaurus/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 22,  78 => 12,  64 => 11,  55 => 10,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
