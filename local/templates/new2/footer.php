</div>  
</div>
    <div id="footer" class="row">
    	<div id="bottom-logo" class="col-md-3"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" width="210"/></div>
		<div class="col-md-9 foot">
			<div class="col-md-3 foter_line_1">
				<div>
					<span class="information_dostav"><a href="/kak-zakazat/">Как заказать текстиль</a></span>
				</div>
			</div>
			<div class="col-md-3 foter_line_1">
				<div>
					<span class="market_info"><a href="/prays/">Прайс-лист на продукцию</a></span>
				</div>
			</div>
			<div class="col-md-3 foter_line_1">
                <div>
                    <div class="phone">
                        <span class="top-prefix">8 (4932)</span> <span class="top-postfix">34-31-15</span>
                    </div>
                 </div>
			</div>
			<div class="col-md-3 foter_line_1">
                <div>
                    <div class="interra" style="width: 150px; float: right;margin-top: 10px;margin-right: 30px;"><a href="//interra.pro"><img src="//interra.pro/logo-dark.png" alt="" style="max-width:100%;"></a></div>
                 </div>
			</div>
		</div>
     </div>
</div>

<?$APPLICATION->IncludeFile(
	SITE_DIR."include/obr_zvonok.php",
	Array(),
	Array("MODE"=>"html")
);?>
<?$APPLICATION->IncludeFile(
	SITE_DIR."include/obr_svyaz.php",
	Array(),
	Array("MODE"=>"html")
);?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
var yaParams = {/*«десь параметры визита*/};
</script>

<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter7925611 = new Ya.Metrika({id:7925611,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,params:window.yaParams||{ }});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/7925611" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  </body>
</html>