<?php

/* /home/omewqhix/public_html/themes/Bernasaurus/pages/blog.htm */
class __TwigTemplate_ff2115995c7fd81e6d97c1b32ece878e80d989cd89dd507c304dd0f3fee47b19 extends Twig_Template
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
            <div class=\"post-preview\">
                ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "                <h2 class=\"post-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
                <p>
                    ";
            // line 25
            if ($this->getAttribute($context["post"], "excerpt", array())) {
                // line 26
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
                echo "
                    ";
            } else {
                // line 28
                echo "                        ";
                echo $this->getAttribute($context["post"], "content_html", array());
                echo "
                    ";
            }
            // line 30
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">...read more</a>
                </p>

                <p class=\"post-meta\">
                    Posted
                    ";
            // line 35
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 36
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
                // line 37
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 38
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
            // line 39
            echo "                    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>

            ";
        // line 44
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 45
            echo "            <ul class=\"pager\">
                ";
            // line 46
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 47
                echo "                <li class=\"prev\"><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
                ";
            }
            // line 49
            echo "
                ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 51
                echo "                <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                    <a href=\"";
                // line 52
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                ";
            // line 56
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 57
                echo "                <li class=\"next\"><a href=\"";
                echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
                ";
            }
            // line 59
            echo "            </ul>
            ";
        }
        // line 61
        echo "        </div>
    </div>
</div>

<hr>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/Bernasaurus/pages/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 61,  186 => 59,  180 => 57,  178 => 56,  175 => 55,  164 => 52,  159 => 51,  155 => 50,  152 => 49,  146 => 47,  144 => 46,  141 => 45,  139 => 44,  135 => 42,  125 => 39,  111 => 38,  102 => 37,  84 => 36,  80 => 35,  71 => 30,  65 => 28,  59 => 26,  57 => 25,  49 => 23,  45 => 22,  23 => 3,  19 => 1,);
    }
}
