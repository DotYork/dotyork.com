	<script>
		registerListener('load', setLazy);
		registerListener('load', lazyLoad);
		registerListener('scroll', lazyLoad);

		var lazyBg = [];
		var lazy = [];

		function setLazy(){
		    lazyBg = document.getElementsByClassName('js-lazyBg');
		    lazy = document.getElementsByClassName('js-lazy');
		} 

		function lazyLoad(){
		    for(var i=0; i<lazyBg.length; i++){
		        if(isInViewport(lazyBg[i])){
		            if (lazyBg[i].getAttribute('data-src')){
		                lazyBg[i].style.backgroundImage = lazyBg[i].getAttribute('data-src');
		                lazyBg[i].removeAttribute('data-src');
		            }
		        }
		    }

		    for(var i=0; i<lazy.length; i++){
		        if(isInViewport(lazy[i])){
		            if (lazy[i].getAttribute('data-src')){
		                lazy[i].src = lazy[i].getAttribute('data-src');
		                lazy[i].removeAttribute('data-src');
		            }
		        }
		    }
		    
		    cleanLazy();
		}

		function cleanLazy(){
		    lazyBg = Array.prototype.filter.call(lazyBg, function(l){ return l.getAttribute('data-src');});
		    lazy = Array.prototype.filter.call(lazy, function(l){ return l.getAttribute('data-src');});
		}

		function isInViewport(el){
		    var rect = el.getBoundingClientRect();
		    
		    return (
		        rect.bottom >= 0 && 
		        rect.right >= 0 && 
		        rect.top <= (window.innerHeight || document.documentElement.clientHeight) && 
		        rect.left <= (window.innerWidth || document.documentElement.clientWidth)
		     );
		}

		function registerListener(event, func) {
		    if (window.addEventListener) {
		        window.addEventListener(event, func)
		    } else {
		        window.attachEvent('on' + event, func)
		    }
		}	
	</script>

	<script async src="/assets/js/master.js"></script>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-39008862-4', 'auto');
		ga('send', 'pageview');

	</script>

</body>

</html>