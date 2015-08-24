<?php

/* /home/omewqhix/public_html/themes/Bernasaurus/pages/category.htm */
class __TwigTemplate_0d05de9ccf148872ca0c033dbaa6de88944b5237149b1e825c4463b141deaf32 extends Twig_Template
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
        if ( !(isset($context["category"]) ? $context["category"] : null)) {
            // line 22
            echo "                <h2>Category not found</h2>
            ";
        } else {
            // line 24
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</h2>
            
                <div class=\"post-preview\">
                    ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 28
                echo "                    <h2 class=\"post-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "</a></h2>
                    <p>
                        ";
                // line 30
                if ($this->getAttribute($context["post"], "excerpt", array())) {
                    // line 31
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "excerpt", array()), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 33
                    echo "                            ";
                    echo $this->getAttribute($context["post"], "content_html", array());
                    echo "
                        ";
                }
                // line 35
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
                echo "\">...read more</a>
                    </p>
    
                    <p class=\"post-meta\">
                        Posted
                        ";
                // line 40
                if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                    echo " in ";
                }
                // line 41
                echo "                        ";
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
                    // line 42
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    // line 43
                    echo "                        ";
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
                // line 44
                echo "                        on ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
                echo "
                    </p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "                </div>
    
                ";
            // line 49
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
                // line 50
                echo "                <ul class=\"pager\">
                    ";
                // line 51
                if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                    // line 52
                    echo "                    <li class=\"prev\"><a href=\"";
                    echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                    echo "\">&larr; Prev</a></li>
                    ";
                }
                // line 54
                echo "    
                    ";
                // line 55
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 56
                    echo "                    <li class=\"";
                    echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                    echo "\">
                        <a href=\"";
                    // line 57
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
                // line 60
                echo "    
                    ";
                // line 61
                if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                    // line 62
                    echo "                    <li class=\"next\"><a href=\"";
                    echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                    echo "\">Next &rarr;</a></li>
                    ";
                }
                // line 64
                echo "                </ul>
                ";
            }
            // line 66
            echo "            </div>
            ";
        }
        // line 68
        echo "        </div>
    </div>
</div>

<hr>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/Bernasaurus/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 68,  202 => 66,  198 => 64,  192 => 62,  190 => 61,  187 => 60,  176 => 57,  171 => 56,  167 => 55,  164 => 54,  158 => 52,  156 => 51,  153 => 50,  151 => 49,  147 => 47,  137 => 44,  123 => 43,  114 => 42,  96 => 41,  92 => 40,  83 => 35,  77 => 33,  71 => 31,  69 => 30,  61 => 28,  57 => 27,  50 => 24,  46 => 22,  44 => 21,  23 => 3,  19 => 1,);
    }
}
