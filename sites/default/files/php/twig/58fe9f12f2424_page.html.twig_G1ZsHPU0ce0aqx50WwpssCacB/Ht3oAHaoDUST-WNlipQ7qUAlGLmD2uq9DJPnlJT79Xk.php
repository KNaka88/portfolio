<?php

/* themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig */
class __TwigTemplate_d0eb4b950acb02689c7343885a1d41bc9fca39b0531f4d39d4d8f6d50460545a extends Twig_Template
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
        $tags = array("if" => 62, "for" => 125);
        $filters = array("raw" => 126, "date" => 427);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 69
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array())) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 77
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array())) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 103
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 105
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-9\">
          ";
        // line 110
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 111
            echo "            ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 113
        echo "        </div>

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 122
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (isset($context["show_slideshow"]) ? $context["show_slideshow"] : null))) {
            // line 123
            echo "    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slider_content"]) ? $context["slider_content"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 126
                echo "          ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "      </ul>
    </div>
  ";
        }
        // line 131
        echo "<!-- End: Slider -->


<!-- Start: Home page message -->
  ";
        // line 135
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array())))) {
            // line 136
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          ";
            // line 141
            if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()))) {
                // line 142
                echo "            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "homepagemessage", array()), "html", null, true));
                echo "
          ";
            }
            // line 144
            echo "          <!--End: Home page message -->

          ";
            // line 146
            if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())))) {
                // line 147
                echo "            <div class=\"row topwidget\">

              <!-- Start: Top wid
              get first -->
              ";
                // line 151
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array())) {
                    // line 152
                    echo "                <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_first", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 154
                echo "              <!-- End: Top widget first -->

              <!-- Start: Top widget second -->
              ";
                // line 157
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array())) {
                    // line 158
                    echo "                <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_class"]) ? $context["topwidget_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_second", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 160
                echo "              <!-- End: Top widget second -->

              <!-- Start: Top widget third -->
              ";
                // line 163
                if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array())) {
                    // line 164
                    echo "                <div class = ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topwidget_third_class"]) ? $context["topwidget_third_class"] : null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "topwidget_third", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 166
                echo "              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 170
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 175
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow bounceInDown\">

    ";
        // line 182
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 183
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 186
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()) &&  !(isset($context["is_front"]) ? $context["is_front"] : null))) {
            // line 193
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 198
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 205
        echo "
    <div class=\"container\">
      <div class=\"parallax-region\">

        ";
        // line 209
        if ( !(isset($context["is_front"]) ? $context["is_front"] : null)) {
            // line 210
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 211
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "</div>
          </div>
        ";
        }
        // line 214
        echo "
        <div class=\"row layout\">

          ";
        // line 217
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 218
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 219
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarfirst"]) ? $context["sidebarfirst"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 222
        echo "
          ";
        // line 223
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 224
            echo "            <div class=\"content_layout\">
              <div class=";
            // line 225
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["contentlayout"]) ? $context["contentlayout"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 228
        echo "
          ";
        // line 229
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 230
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 231
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebarsecond"]) ? $context["sidebarsecond"] : null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 234
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  ";
        // line 244
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()))) {
            // line 245
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 250
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "services", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 257
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 261
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()))) {
            // line 262
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 267
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "clients", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 274
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 278
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())))) {
            // line 279
            echo "  <div class=\"parallax-widget four\" id=\"products\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->
          ";
            // line 285
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array())) {
                // line 286
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 287
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 290
            echo "          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 293
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array())) {
                // line 294
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 295
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 298
            echo "          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->
          ";
            // line 301
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array())) {
                // line 302
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 303
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 306
            echo "          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 309
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array())) {
                // line 310
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bottom_class"]) ? $context["bottom_class"] : null), "html", null, true));
                echo ">
              ";
                // line 311
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_forth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 314
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 321
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 325
        if ((((isset($context["is_front"]) ? $context["is_front"] : null) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()))) {
            // line 326
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            ";
            // line 332
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array())) {
                // line 333
                echo "              <div class=\"google_map\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "google_map", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 335
            echo "            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            ";
            // line 339
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array())) {
                // line 340
                echo "              <div class=\"address-wrap\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "address", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 342
            echo "          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 349
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 353
        if (((isset($context["is_front"]) ? $context["is_front"] : null) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())))) {
            // line 354
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 360
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 361
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_first_class"]) ? $context["footer_first_class"] : null), "html", null, true));
                echo ">
              ";
                // line 362
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 365
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 368
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 369
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
              ";
                // line 370
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 373
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 376
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 377
                echo "            <div class = ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer_class"]) ? $context["footer_class"] : null), "html", null, true));
                echo ">
              ";
                // line 378
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 381
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 388
        echo "<!--End: Home page message -->


<!-- Start: Footer Menu -->
";
        // line 392
        if ((isset($context["show_social_icon"]) ? $context["show_social_icon"] : null)) {
            // line 393
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            ";
            // line 400
            if ((isset($context["github_url"]) ? $context["github_url"] : null)) {
                // line 401
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["github_url"]) ? $context["github_url"] : null), "html", null, true));
                echo "\"  class=\"github\" target=\"_blank\" ><i class=\"fa fa-github\"></i></a>
            ";
            }
            // line 403
            echo "            ";
            if ((isset($context["linkedin_url"]) ? $context["linkedin_url"] : null)) {
                // line 404
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["linkedin_url"]) ? $context["linkedin_url"] : null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 406
            echo "            ";
            if ((isset($context["rss_url"]) ? $context["rss_url"] : null)) {
                // line 407
                echo "              <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["rss_url"]) ? $context["rss_url"] : null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 409
            echo "          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 417
        echo "<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 427
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 432
        if ((isset($context["show_credit_link"]) ? $context["show_credit_link"] : null)) {
            // line 433
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 437
        echo "      <!-- End: Credit link -->

    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 437,  709 => 433,  707 => 432,  699 => 427,  687 => 417,  677 => 409,  671 => 407,  668 => 406,  662 => 404,  659 => 403,  653 => 401,  651 => 400,  642 => 393,  640 => 392,  634 => 388,  625 => 381,  619 => 378,  614 => 377,  612 => 376,  607 => 373,  601 => 370,  596 => 369,  594 => 368,  589 => 365,  583 => 362,  578 => 361,  576 => 360,  568 => 354,  566 => 353,  560 => 349,  551 => 342,  545 => 340,  543 => 339,  537 => 335,  531 => 333,  529 => 332,  521 => 326,  519 => 325,  513 => 321,  504 => 314,  498 => 311,  493 => 310,  491 => 309,  486 => 306,  480 => 303,  475 => 302,  473 => 301,  468 => 298,  462 => 295,  457 => 294,  455 => 293,  450 => 290,  444 => 287,  439 => 286,  437 => 285,  429 => 279,  427 => 278,  421 => 274,  411 => 267,  404 => 262,  402 => 261,  396 => 257,  386 => 250,  379 => 245,  377 => 244,  365 => 234,  357 => 231,  354 => 230,  352 => 229,  349 => 228,  341 => 225,  338 => 224,  336 => 223,  333 => 222,  325 => 219,  322 => 218,  320 => 217,  315 => 214,  309 => 211,  306 => 210,  304 => 209,  298 => 205,  288 => 198,  281 => 193,  279 => 192,  276 => 191,  268 => 186,  263 => 183,  261 => 182,  252 => 175,  245 => 170,  239 => 166,  231 => 164,  229 => 163,  224 => 160,  216 => 158,  214 => 157,  209 => 154,  201 => 152,  199 => 151,  193 => 147,  191 => 146,  187 => 144,  181 => 142,  179 => 141,  172 => 136,  170 => 135,  164 => 131,  159 => 128,  150 => 126,  146 => 125,  142 => 123,  140 => 122,  129 => 113,  123 => 111,  121 => 110,  114 => 105,  108 => 103,  106 => 102,  89 => 87,  80 => 80,  74 => 78,  72 => 77,  65 => 72,  59 => 70,  57 => 69,  49 => 63,  47 => 62,  43 => 60,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}


{% if page.contact_email or page.top_menu %}
  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          {% if page.contact_email %}
            {{ page.contact_email }}
          {% endif %}
        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          {% if page.top_menu %}
            {{ page.top_menu }}
          {% endif %}
        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
{% endif %}


<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          {% if page.header %}
            {{ page.header }}
          {% endif %}
        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-9\">
          {% if page.primary_menu %}
            {{ page.primary_menu }}
          {% endif %}
        </div>

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  {% if is_front and show_slideshow%}
    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        {% for slider_contents in slider_content %}
          {{ slider_contents | raw }}
        {% endfor %}
      </ul>
    </div>
  {% endif %}
<!-- End: Slider -->


<!-- Start: Home page message -->
  {% if (is_front) and (page.topwidget_first or page.topwidget_second or page.topwidget_third or page.homepagemessage) %}
    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          {% if is_front and page.homepagemessage %}
            {{ page.homepagemessage }}
          {% endif %}
          <!--End: Home page message -->

          {% if (is_front) and (page.topwidget_first or page.topwidget_second or page.topwidget_third) %}
            <div class=\"row topwidget\">

              <!-- Start: Top wid
              get first -->
              {% if page.topwidget_first %}
                <div class = {{ topwidget_class }}>{{ page.topwidget_first }}</div>
              {% endif %}
              <!-- End: Top widget first -->

              <!-- Start: Top widget second -->
              {% if page.topwidget_second %}
                <div class = {{ topwidget_class }}>{{ page.topwidget_second }}</div>
              {% endif %}
              <!-- End: Top widget second -->

              <!-- Start: Top widget third -->
              {% if page.topwidget_third %}
                <div class = {{ topwidget_third_class }}>{{ page.topwidget_third }}</div>
              {% endif %}
              <!-- End: Top widget third -->

            </div>
          {% endif %}

        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow bounceInDown\">

    {% if page.highlighted %}
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            {{ page.highlighted }}
          </div>
        </div>
      </div>
    {% endif %}

    {%  if page.page_title and not is_front %}
      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                {{ page.page_title }}
              </div>
            </div>
          </div>
        </div>
      </div>
    {% endif %}

    <div class=\"container\">
      <div class=\"parallax-region\">

        {% if not is_front %}
          <div class=\"row\">
            <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
          </div>
        {% endif %}

        <div class=\"row layout\">

          {% if page.sidebar_first %}
            <div class=\"sidebar\">
              <div class={{sidebarfirst}}> {{page.sidebar_first}} </div>
            </div>
          {% endif %}

          {% if page.content %}
            <div class=\"content_layout\">
              <div class={{contentlayout}}> {{page.content}} </div>
            </div>
          {% endif %}

          {% if page.sidebar_second %}
            <div class=\"sidebar\">
              <div class={{sidebarsecond}}> {{page.sidebar_second}} </div>
            </div>
          {% endif %}

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  {% if is_front and page.services %}
    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.services }}
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
  {% if is_front and page.clients %}
    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ page.clients }}
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if is_front and (page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth) %}
  <div class=\"parallax-widget four\" id=\"products\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->
          {% if page.bottom_first %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_first }}
            </div>
          {% endif %}
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          {% if page.bottom_second %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_second }}
            </div>
          {% endif %}
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->
          {% if page.bottom_third %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_third }}
            </div>
          {% endif %}
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          {% if page.bottom_forth %}
            <div class = {{ bottom_class }}>
              {{ page.bottom_forth }}
            </div>
          {% endif %}
          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
{% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if is_front and page.google_map and page.address%}
  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <!-- Start: Google map -->
            {% if page.google_map %}
              <div class=\"google_map\">{{ page.google_map }}</div>
            {% endif %}
            <!-- End: Google map -->
          </div>
          <div class=\"col-md-6\">
            <!-- Start: Address -->
            {% if page.address %}
              <div class=\"address-wrap\">{{ page.address }}</div>
            {% endif %}
          <!--End: Address -->
          </div>
        </div>
      </div>
    </div>
  </div>
  {% endif %}
<!--End: Home page message -->


<!-- Start: Home page message -->
{% if  is_front and (page.footer_first or page.footer_second or page.footer_third) %}
  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">

          <!-- Start: Footer First -->
          {% if page.footer_first %}
            <div class = {{ footer_first_class }}>
              {{ page.footer_first }}
            </div>
          {% endif %}
          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          {% if page.footer_second %}
            <div class = {{ footer_class }}>
              {{ page.footer_second }}
            </div>
          {% endif %}
          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          {% if page.footer_third %}
            <div class = {{ footer_class }}>
              {{ page.footer_third }}
            </div>
          {% endif %}
          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>
{% endif %}
<!--End: Home page message -->


<!-- Start: Footer Menu -->
{% if show_social_icon %}
  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            {% if github_url %}
              <a href=\"{{ github_url }}\"  class=\"github\" target=\"_blank\" ><i class=\"fa fa-github\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
{% endif %}
<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      {% if show_credit_link %}
        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      {% endif %}
      <!-- End: Credit link -->

    </div>
  </div>
</div>
";
    }
}
