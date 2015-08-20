<?php

/* /home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/pages/clean-blog-about.htm */
class __TwigTemplate_b3e818b8b4a59db5fc4a4c40f303f8619a209a49083874a9eaa178494d1120b6 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->themeFilter("assets/img/about-bg.jpg");
        echo "')\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"page-heading\">
                        <h1>About Me</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.</p>
            </div>
        </div>
    </div>

    <hr>";
    }

    public function getTemplateName()
    {
        return "/home/omewqhix/public_html/themes/bayramoff-theme-cleanblog/pages/clean-blog-about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
