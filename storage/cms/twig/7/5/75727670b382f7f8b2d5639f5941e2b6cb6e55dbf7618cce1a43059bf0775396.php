<?php

/* /home/omewqhix/public_html/themes/Bernasaurus/partials/footer.htm */
class __TwigTemplate_75727670b382f7f8b2d5639f5941e2b6cb6e55dbf7618cce1a43059bf0775396 extends Twig_Template
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
        echo "<!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"https://www.facebook.com/pages/Accio-Tardis-Cosplay/1583170568565071\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">Copyright &copy; Bernasaurus 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 29
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/clean-blog.min.js");
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/Bernasaurus/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 29,  49 => 26,  43 => 23,  19 => 1,);
    }
}
