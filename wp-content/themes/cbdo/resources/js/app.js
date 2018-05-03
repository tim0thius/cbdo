require('jquery');

// load typekit fonts
(function(d) {
	var config = {
	  kitId: 'kva5rdd',
	  scriptTimeout: 3000,
	  async: true
	},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document)

jQuery(document).ready(function ($) {
	// console.log('test')
	$('.action--show-menu').click(function(){
		$('body').addClass('state--menu-open')
	})
	$('.action--hide-menu').click(function(){
		$('body').removeClass('state--menu-open')
	})

	// fade in text
	var text_to_fade_in = 'h1,h2,h3,h4,a,p,li,span'
	setTimeout(function(){
		$(text_to_fade_in).addClass('fade-in')
	}, 300)
})