<?php
/*
Plugin Name: CI Business loan calculator
Plugin URI: https://www.calculator.io/business-loan-calculator/
Description: Free business loan calculator that lets entrepreneurs estimate monthly payments, calculate interest on loans, and understand the total cost of the business loan.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_business_loan_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Business Loan Calculator by Calculator.iO";

function display_ci_business_loan_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Business Loan Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_business_loan_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_business_loan_calculator', 'display_ci_business_loan_calculator' );