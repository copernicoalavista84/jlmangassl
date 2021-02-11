<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/cartsguru/views/templates/hook/jQuery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27717485760255e78a13dd8-53566112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23c368962517a8f7e20e2b1c4284b49367b1b59a' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/cartsguru/views/templates/hook/jQuery.tpl',
      1 => 1545304940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27717485760255e78a13dd8-53566112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78a15a19_82166096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78a15a19_82166096')) {function content_60255e78a15a19_82166096($_smarty_tpl) {?>
<script>
  window.cg_waitingJQuery = [];
  function cg_onJQueryReady (fn) {
    if (window.cgjQuery) {
      fn();
    } else {
      window.cg_waitingJQuery.push(fn);
    }
  }

  function cg_onJQueryLoaded () {
    while (window.cg_waitingJQuery.length > 0) {
      var fn = window.cg_waitingJQuery.shift();
      setTimeout(function () {
        fn();
      }, 500);
    }
  }

  function cg_onReady(callback){
    // in case the document is already rendered
    if (document.readyState!='loading') {
      callback();
    }
    // modern browsers
    else if (document.addEventListener) {
      document.addEventListener('DOMContentLoaded', callback);
    }
    // IE <= 8
    else {
      document.attachEvent('onreadystatechange', function(){
          if (document.readyState=='complete') callback();
      });
    }
  }

  cg_onReady(function(){
    if (window.jQuery) {
      window.cgjQuery = window.jQuery;
      cg_onJQueryLoaded();
    } else {
      var script = document.createElement('script');
      document.head.appendChild(script);
      script.type = 'text/javascript';
      script.src = "//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js";
      script.onload = function() {
        window.cgjQuery = jQuery.noConflict(true);
        cg_onJQueryLoaded();
      };
    }
  });
</script>
<?php }} ?>
