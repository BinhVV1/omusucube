<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/index.twig */
class __TwigTemplate_81e0148f7d4d341ca73a1fbc4bffba2dd188f308899455b0a6a9f68cab29fb76 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home"), "html", null, true);
    }

    // line 14
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <script>
        \$(function() {
            var options = {
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 25,
                        bottom: 0
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return '";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getCurrencySymbol(), "html", null, true);
        echo "' + tooltipItem.formattedValue.replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginatzero: true,
                        display: true,
                        ticks: {
                            callback: function(value, index, ticks) {
                                if (Math.floor(value) === value) {
                                    return '";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getCurrencySymbol(), "html", null, true);
        echo "' + value.toString().replace(/\\B(?=(\\d{3})+(?!\\d))/g, ',');
                                }
                            }
                        }
                    }
                }
            };

            var priceBackgroundColor = 'rgba(58, 115, 188, 1)';
            var priceBorderColor = 'rgba(255, 255, 255, 0)';

            \$.ajax({
                url: '";
        // line 56
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_sale");
        echo "',
                type: 'GET',
                dataType: 'json'
            }).done(function(datas) {

                for (var i = 0; i < datas.length; i++) {
                    var data = datas[i];

                    var labels = [];
                    var prices = [];
                    var priceBackgroundColors = [];
                    var priceBorderColors = [];
                    Object.keys(data).forEach(function(key) {
                        labels.push(key);
                        prices.push(data[key].price);
                        priceBackgroundColors.push(priceBackgroundColor);
                        priceBorderColors.push(priceBorderColor);
                    });

                    var ctx = \$('#chart-' + i)[0].getContext('2d');
                    ctx.canvas.height = 100;
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    type: 'bar',
                                    label: '";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_amount"), "html", null, true);
        echo "',
                                    data: prices,
                                    backgroundColor: priceBackgroundColors,
                                    borderColor: priceBorderColors,
                                    borderWidth: 1,
                                    yAxisID: 'y'
                                }
                            ]
                        },
                        options: options
                    });
                }
            }).fail(function(data) {
            }).always(function() {
                \$('#loading').hide();
            });

        });

    </script>
";
    }

    // line 106
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 107
        echo "    ";
        if (($context["is_danger_admin_url"] ?? null)) {
            // line 108
            echo "    <div class=\"alert alert-warning alert-dismissible fade show m-3\" role=\"alert\">
        <i class=\"fa fa-warning fa-lg me-2\"></i>
        <span class=\"fw-bold\">";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.admin_url_warning", ["%url%" => $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_security")]);
            echo "</span>
        <button class=\"btn-close\" type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"Close\">

        </button>
    </div>
    ";
        }
        // line 116
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"row\">
                    <div class=\"col-4 mb-4\">
                        <div id=\"order-status\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <a href=\"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order");
        echo "\">
                                    <span class=\"card-title\">";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.order_status_title"), "html", null, true);
        echo "</span>
                                </a>
                            </div>
                            <div class=\"card-body p-0\">
                                ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["OrderStatuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderStatus"]) {
            // line 129
            echo "                                    <div class=\"d-block border border-top-0 border-start-0 border-end-0\">
                                        <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["order_status_id" => twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\" class=\"p-3 d-block\">
                                            <div class=\"row align-items-center\">
                                                <div class=\"col align-middle\">
                                                    <span class=\"align-middle\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "name", [], "any", false, false, false, 133), "html", null, true);
            echo "</span>
                                                </div>
                                                <div class=\"col-auto text-end align-middle\">
                                                    <span class=\"h4 align-middle fw-normal text-dark\">";
            // line 136
            ((( !twig_test_empty(($context["Orders"] ?? null)) && twig_get_attribute($this->env, $this->source, ($context["Orders"] ?? null), twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", [], "any", false, false, false, 136), [], "array", true, true, false, 136))) ? (print (twig_escape_filter($this->env, (($__internal_compile_0 = ($context["Orders"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["OrderStatus"], "id", [], "any", false, false, false, 136)] ?? null) : null), "html", null, true))) : (print (0)));
            echo "</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderStatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                            </div>
                        </div><!-- /#order-status -->
                    </div>
                    <div class=\"col-8 mb-4\">
                        <div id=\"chart-statistics\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body pt-0\">
                                <div class=\"row text-center border-bottom mb-3\">
                                    <div class=\"col-4 py-2 border-end\">
                                        <div class=\"h3\">
                                            ";
        // line 156
        $context["amount"] = ((twig_test_empty(($context["salesThisMonth"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesThisMonth"] ?? null), "order_amount", [], "any", false, false, false, 156)));
        // line 157
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesThisMonth"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesThisMonth"] ?? null), "order_count", [], "any", false, false, false, 157)));
        // line 158
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_this_month"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2 border-end\">
                                        <div class=\"h3\">
                                            ";
        // line 164
        $context["amount"] = ((twig_test_empty(($context["salesToday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesToday"] ?? null), "order_amount", [], "any", false, false, false, 164)));
        // line 165
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesToday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesToday"] ?? null), "order_count", [], "any", false, false, false, 165)));
        // line 166
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_today"), "html", null, true);
        echo "</small>
                                    </div>
                                    <div class=\"col-4 py-2\">
                                        <div class=\"h3\">
                                            ";
        // line 172
        $context["amount"] = ((twig_test_empty(($context["salesYesterday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesYesterday"] ?? null), "order_amount", [], "any", false, false, false, 172)));
        // line 173
        echo "                                            ";
        $context["count"] = ((twig_test_empty(($context["salesYesterday"] ?? null))) ? (0) : (twig_get_attribute($this->env, $this->source, ($context["salesYesterday"] ?? null), "order_count", [], "any", false, false, false, 173)));
        // line 174
        echo "                                            ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_value", ["%amount%" => $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(($context["amount"] ?? null)), "%count%" => twig_number_format_filter($this->env, ($context["count"] ?? null))]), "html", null, true);
        echo "
                                        </div>
                                        <small>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yesterday"), "html", null, true);
        echo "</small>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col text-center\">
                                        <div class=\"btn-group nav d-inline-flex\" id=\"pills-tab\" role=\"tablist\">
                                            <a class=\"nav-link active btn btn-ec-tab py-2 ps-4 pe-4\" id=\"pills-weekly-tab\" data-bs-toggle=\"pill\" href=\"#pills-weekly\" role=\"tab\" aria-controls=\"pills-weekly\" aria-selected=\"true\">
                                                ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_weekly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 ps-4 pe-4\" id=\"pills-monthly-tab\" data-bs-toggle=\"pill\" href=\"#pills-monthly\" role=\"tab\" aria-controls=\"pills-monthly\" aria-selected=\"false\">
                                                ";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_monthly"), "html", null, true);
        echo "
                                            </a>
                                            <a class=\"nav-link btn btn-ec-tab py-2 ps-4 pe-4\" id=\"pills-year-tab\" data-bs-toggle=\"pill\" href=\"#pills-year\" role=\"tab\" aria-controls=\"pills-year\" aria-selected=\"false\">
                                                ";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.sales_summary_yearly"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col\">
                                        <div id=\"loading\" class=\"text-center pt-5\">
                                            <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loading.gif", "admin"), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"tab-content\" id=\"pills-tabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"pills-weekly\" role=\"tabpanel\" aria-labelledby=\"pills-weekly-tab\">
                                                <canvas id=\"chart-0\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-monthly\" role=\"tabpanel\" aria-labelledby=\"pills-monthly-tab\">
                                                <canvas id=\"chart-1\"></canvas>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"pills-year\" role=\"tabpanel\" aria-labelledby=\"pills-year-tab\">
                                                <canvas id=\"chart-2\"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /#chart-statistics -->
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col mb-4\">
                        <div id=\"shop-statistical\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <div class=\"d-block border border-top-0 border-start-0 border-end-0\">
                                    <a href=\"";
        // line 226
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_nonstock");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-inbox fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_out_of_stock"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-end align-middle\">
                                                <span class=\"h4 align-middle fw-normal text-dark\">";
        // line 235
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countNonStockProducts"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-start-0 border-end-0\">
                                    <a href=\"";
        // line 241
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-cubes fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_products"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle fw-normal text-dark\">";
        // line 250
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countProducts"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class=\"d-block border border-top-0 border-start-0 border-end-0\">
                                    <a href=\"";
        // line 256
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_homepage_customer");
        echo "\" class=\"p-3 d-block\">
                                        <div class=\"row align-items-center\">
                                            <div class=\"col-2 align-middle text-center\">
                                                <i class=\"fa fa-users fa-2x text-secondary\" aria-hidden=\"true\"></i>
                                            </div>
                                            <div class=\"col p-0\">
                                                <span class=\"align-middle\">";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.shop_status_customers"), "html", null, true);
        echo "</span>
                                            </div>
                                            <div class=\"col-auto text-check align-middle\">
                                                <span class=\"h4 align-middle fw-normal text-dark\">";
        // line 265
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["countCustomers"] ?? null)), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /#shop-statistical -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-plugin\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header border-bottom-0\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body py-0\" style=\"max-height: 395px; overflow-y: scroll\">
                                ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommendedPlugins"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
            // line 282
            echo "                                    <div class=\"row py-3 border border-bottom-0 border-start-0 border-end-0\">
                                        <div class=\"col-5 col-md-4\">
                                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 284), "html", null, true);
            echo "\">
                                                <img src=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "image", [], "any", false, false, false, 285), "html", null, true);
            echo "\" class=\"w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 285), "html", null, true);
            echo "\">
                                            </a>
                                        </div>
                                        <div class=\"col-7 col-md-8 ps-0\">
                                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#searchPluginModal-";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "id", [], "any", false, false, false, 289), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 289), "html", null, true);
            echo "</a>
                                            <p class=\"m-0 pt-2\">
                                                ";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "short_description", [], "any", false, false, false, 291), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                    </div>
                                    ";
            // line 295
            echo twig_include($this->env, $context, "@admin/Store/plugin_detail_modal.twig", ["item" => $context["plugin"]]);
            echo "
                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "                            </div>
                            <div class=\"card-footer\">
                                > <a href=\"";
        // line 299
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_store_plugin_owners_search_page");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.recommend_plugins.owner_store"), "html", null, true);
        echo "</a>
                            </div>
                        </div><!-- /#ec-cube-plugin -->
                    </div>
                    <div class=\"col mb-4\">
                        <div id=\"ec-cube-news\" class=\"card rounded border-0 h-100\">
                            <div class=\"card-header\">
                                <div class=\"d-inline-block\">
                                    <span class=\"card-title\">";
        // line 307
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.home.news_title"), "html", null, true);
        echo "</span>
                                </div>
                            </div>
                            <div class=\"card-body p-0\">
                                <iframe name=\"information\" class=\"link_list_wrap\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_info_url", [], "any", false, false, false, 311), "html", null, true);
        echo "\" style=\"width:100%; border:0; min-height:390px;\"></iframe>
                            </div>
                            <div class=\"card-footer\" style=\"height:43px;box-sizing: border-box;\"></div>
                        </div><!-- /#ec-cube-news -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.c-primaryCol -->
        </div><!-- /.c-contentsArea__primaryCol -->
    </div><!-- /.c-contentsArea__cols -->

";
    }

    public function getTemplateName()
    {
        return "@admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 311,  540 => 307,  527 => 299,  523 => 297,  507 => 295,  500 => 291,  493 => 289,  484 => 285,  480 => 284,  476 => 282,  459 => 281,  452 => 277,  437 => 265,  431 => 262,  422 => 256,  413 => 250,  407 => 247,  398 => 241,  389 => 235,  383 => 232,  374 => 226,  366 => 221,  339 => 197,  328 => 189,  322 => 186,  316 => 183,  306 => 176,  300 => 174,  297 => 173,  295 => 172,  288 => 168,  282 => 166,  279 => 165,  277 => 164,  270 => 160,  264 => 158,  261 => 157,  259 => 156,  249 => 149,  240 => 142,  228 => 136,  222 => 133,  216 => 130,  213 => 129,  209 => 128,  202 => 124,  198 => 123,  189 => 116,  180 => 110,  176 => 108,  173 => 107,  169 => 106,  144 => 84,  113 => 56,  98 => 44,  83 => 32,  66 => 17,  62 => 16,  56 => 14,  49 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/index.twig", "C:\\xampp\\htdocs\\omusube\\src\\Eccube\\Resource\\template\\admin\\index.twig");
    }
}
