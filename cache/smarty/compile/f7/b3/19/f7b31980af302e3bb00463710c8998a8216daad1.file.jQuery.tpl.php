<?php /* Smarty version Smarty-3.1.19, created on 2021-02-12 10:27:30
         compiled from "/var/www/html/jlmangassl/modules/cartsguru/views/templates/hook/jQuery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146235577460264a028e4c07-36201992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b31980af302e3bb00463710c8998a8216daad1' => 
    array (
      0 => '/var/www/html/jlmangassl/modules/cartsguru/views/templates/hook/jQuery.tpl',
      1 => 1613063182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146235577460264a028e4c07-36201992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60264a028e6614_67677821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60264a028e6614_67677821')) {function content_60264a028e6614_67677821($_smarty_tpl) {?>
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
