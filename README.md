sociolizer
==========

Social networks like buttons


Sociolizer 
Маленький социальный плагин ЛАЙКОВ для Котонти. Плагин позволяет леко и быстро добавить кнопки Лайк для социальных сетей В контакте, Я.ру, Facebook, Twitter, Одноклассники, mail.ru, Гугл +1, а так же блок поделится от Яндекса.
Наши преимущества:
* Все в одном пакете, Достаточно вставить нужный тег на страницу {PHP.SOCIOLIZER_LINK.VK},{PHP.SOCIOLIZER_LINK.FB},{PHP.SOCIOLIZER_LINK.YA},{PHP.SOCIOLIZER_LINK.MAILRU},{PHP.SOCIOLIZER_LINK.TWITTER},{PHP.SOCIOLIZER_LINK.GOOGLE},{PHP.SOCIOLIZER_LINK.ODNO},{PHP.SOCIOLIZER_LINK.YASHARE}; в head часть тег {PHP.SOCIOLIZER} и включить соответствующие опции в конфиге. Внимание: для одноклассников необходимо прописывание соответствующих стилей в файл css.
* Работаем асинхронно – это в существенной мере ускоряет загрузку страницы
* Выводится на любой странице в любом месте
* Не надо изучать апи различных соц. сетей!
Пример использования:
Css блок:
=========
    /* odno */
    .odkl-klass-s,.odkl-klass{display:-moz-inline-stack;display:inline-block;*display:inline;vertical-align:middle;overflow:hidden;text-indent:-3000px;zoom:1;*text-indent:0;*font:0/0 Arial;}.odkl-klass{width:69px;height:21px;background:#f58220 url(../../../plugins/sociolizer/img/odkl_klass.gif) no-repeat;}.odkl-klass-s{width:16px;height:16px;background:#f58220 url(../../../plugins/sociolizer/img/odkl_klass_s.gif) no-repeat;}.odkl-klass:hover,.odkl-klass-stat:hover,.odkl-klass-stat:hover,.odkl-share-oc:hover{background-color:#e83;}.odkl-share-oc,.odkl-klass-oc,.odkl-klass-stat,.odkl-share-stat,.odkl-share-oc-voted,.odkl-klass-oc-voted{border-style:none;font:normal 17px arial;display:-moz-inline-stack;display:inline-block;*display:inline;padding-bottom:1px;padding-top:1px;text-decoration:none;zoom:1;height:19px;*height:21px;}.odkl-share-stat,.odkl-share-oc{padding-left:99px;*padding:0 0 0 99px;background:#f58220 url(../../../plugins/sociolizer/img/odkl_klass_stat-neutral.gif) no-repeat;}.odkl-klass-oc,.odkl-klass-stat{padding-left:70px;*padding:0 0 0 70px;background:#f58220 url(../../../plugins/sociolizer/img/odkl_klass_stat.gif) no-repeat;}.odkl-klass-oc SPAN,.odkl-share-oc SPAN,.odkl-share-stat SPAN,.odkl-klass-stat SPAN{border-top-style:solid;border-top-width:1px;border-top-color:#f58220;border-bottom-style:solid;border-bottom-width:1px;border-bottom-color:#f58220;border-right-style:solid;border-right-width:1px;border-right-color:#f58220;width:auto!important;text-decoration:none;padding:0 5px;text-align:center;font:normal 17px/19px arial;color:#f58220;background:white!important;zoom:1;}.odkl-klass-oc-voted,.odkl-share-oc-voted{cursor:default;color:#e83;zoom:1;}.odkl-klass-oc-voted{padding-left:20px;*padding:1 1 1 20px;background:url(../../../plugins/sociolizer/img/odk_klass_v.gif) no-repeat;}.odkl-share-oc-voted{padding-left:26px;*padding:1 1 1 26px;background:url(../../../plugins/sociolizer/img/odkl_klass_s2.gif) no-repeat;}.odkl-share-oc-voted A,.odkl-klass-oc-voted A{color:#e83;}.odkl-oc-comment-form{z-index:2000;position:absolute;width:192px;height:81px;font:normal 11px verdana,arial,helvetica,sans-serif;padding:2px 6px 6px 6px;border-style:solid;border-width:1px;border-color:#e83;background-color:white;zoom:1;}.odkl-oc-comment-form LABEL{text-align:left;display:block;color:#777E5D;padding-bottom:2px;}.odkl-oc-comment-form TEXTAREA{margin-bottom:7px;overflow-y:auto;height:35px;width:188px;display:block;padding:1px;border:1px solid #777e5d;}.odkl-oc-comment-form INPUT{font:normal 11px verdana,arial,helvetica,sans-serif;display:-moz-inline-stack;display:inline-block;*display:inline;padding:1px;text-align:center;vertical-align:middle;width:104px;cursor:pointer;background-color:#f93;color:white;border-style:solid;border-width:1px;border-color:#e83;}.odkl-oc-comment-form INPUT::-moz-focus-inner{border:1px dotted transparent;}.odkl-oc-comment-form INPUT:focus::-moz-focus-inner{border-color:#e83;}.odkl-oc-comment-form SPAN:hover{background-color:#e83;}.odkl-oc-comment-form A{color:#777E5D;margin-left:13px;}.odkl-oc-comment-form A:hover{color:black;}.odkl-oc-cmnt-hidden{visibility:hidden;width:1px;height:1px;}.odkl-oc-cmnt-err,.odkl-oc-cmnt-ok{visibility:visible;width:225px;min-height:14px;height:auto;color:black;border-style:solid;border-width:1px;padding:7px 17px 7px 7px;z-index:3000;position:absolute;display:inline;}.odkl-oc-msg-anchor{width:0;height:0;position:relative;visibility:hidden;*font:17px/19px Arial;}.odkl-oc-msg{font:normal 11px verdana,arial,helvetica,sans-serif;overflow-x:hidden;}.odkl-oc-lbl{float:left;width:15px;height:15px;padding-right:6px;}.odkl-oc-cmnt-ok .odkl-oc-lbl{background:url(../../../plugins/sociolizer/img/ok_14x14.png) no-repeat;}.odkl-oc-cmnt-err .odkl-oc-lbl{background:url(../../../plugins/sociolizer/img/error_14x14.png) no-repeat;}.odkl-oc-cmnt-err{background-color:#FFBFBF;border-color:#F39998;}.odkl-oc-cmnt-ok{background-color:#DFF0C6;border-color:#CC9;}.odkl-klass-oc-fc-hidden,.odkl-share-oc-fc-hidden{display:none;}.odkl-share-oc-fc,.odkl-klass-oc-fc{display:-moz-inline-stack;display:inline-block;*display:inline;border-style:none!important;border-width:0!important;padding:0!important;zoom:1;position:relative;height:21px;}.odkl-share-oc-fc{width:128px;}.odkl-klass-oc-fc{width:99px;}.odkl-share-oc-fc IFRAME,.odkl-klass-oc-fc IFRAME{border-style:none!important;border-width:0!important;padding:0!important;zoom:1;width:100%;height:100%;position:absolute;}
    /* sociolizer */
    
    .sociolize{padding: 10px 0 30px;}
    .sociolize>div{float:left; height:30px;}
    .sociolize .vk {width: 170px;}
    .sociolize .fb {width: 160px;}
    .sociolize .ya {width: 160px;}
    .sociolize .ya>a {height:30px!important;}
    .sociolize .google {width: 90px;}
    .sociolize .mail {width: 140px;}
    .sociolize .twitter {width: 130px;}
    .sociolize .yashare {padding-left: 110px; text-align:right;}
    .ya-share .share-button {margin-right:0px!important;}

Html
====

    <div class="clear sociolize">
    	<div class="google">{PHP.SOCIOLIZER_LINK.GOOGLE} </div>
    	<div class="vk">{PHP.SOCIOLIZER_LINK.VK} </div>
    	<div class="mail">{PHP.SOCIOLIZER_LINK.ODNO} </div>
    	<div class="twitter">{PHP.SOCIOLIZER_LINK.TWITTER}</div>
    	<div class="fb">{PHP.SOCIOLIZER_LINK.FB} </div>
    	<div class="yashare">{PHP.SOCIOLIZER_LINK.YASHARE}</div>
    </div>
    <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
    <div class="clear">&nbsp;</div>

