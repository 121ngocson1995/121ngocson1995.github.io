!function(n){var t=n(window),e=t.height();t.resize(function(){e=t.height()}),n.fn.parallax=function(o,i,r){function u(){a.each(function(){l=a.offset().top}),h=r?function(n){return n.outerHeight(!0)}:function(n){return n.height()},(arguments.length<1||null===o)&&(o="50%"),(arguments.length<2||null===i)&&(i=.5),(arguments.length<3||null===r)&&(r=!0);var u=t.scrollTop();a.each(function(){var t=n(this),r=t.offset().top,c=h(t);u>r+c||r>u+e||a.css("backgroundPosition",o+" "+Math.round((l-u)*i)+"px")})}var h,l,a=n(this);t.bind("scroll",u).resize(u),u()}}(jQuery);