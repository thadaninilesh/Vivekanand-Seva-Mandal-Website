<!-- Footer -->      
<br>
<footer class="footer-style" style="margin: 0px; background-color: rgba(255,119,0,1);">

<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-3 col-sm-3 col-xs-6">
					<h3 class="page-header" style="text-align: center">Volunteer</h3>
					  <p>
                        Vivekanand Seva Mandal is basically a group of young philanthropists involving themselves in a Rural Development Programs with a view of social development while pursuing their own academic/professional activities.
                    </p>
					<a href="getinvolve.php" style="color: white">Read more&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<h3 class="page-header" style="text-align: center">Donate</h3>
					<p>Mandal is serving underprivileged sections like tribal and neighborhood kids as well as providing subsidized facilities for young urban students. All its charitable projects are sustained on the basis of funds donated by generous people. The organisation has a prudent culture in spending the funds on the social and charitable projects.</p>
					<a href="getinvolve.php" style="color: white">Read more&nbsp;<span class="glyphicon glyphicon-glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6" style="background-color: transparent">
					<h3 class="page-header" style="text-align: center">Contact</h3>
					
						
							<address><i class="general foundicon-home icon"></i>
							<span class="field space" style="font-weight: bold"><span class="glyphicon glyphicon-home"></span>&nbsp;:</span>
							
                            <strong>Dnyan Mandir Building,</strong><br>
                              Nerurkar Road, Datta Nagar<br>
                              Chowk, Sangita Wadi,<br>
                              Dombivli(E), Thane 421 201.<br>
                              <abbr title="Phone"><i class="general foundicon-phone icon"></i>
                            <span class="field space" style="font-weight: bold"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;:</span></abbr> (0251)-2800 303
                            </address>
						
						
							<address>
                                <span class="field space" style="font-weight: bold">
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;:
                                </span>
                                <a href="mailto:mailto:contact@vsmandal.org" style="color: white">
                                    contact@vsmandal.org
                                </a>
                                <i class="general foundicon-mail icon"></i></address>
    						<address>
	           				    <i class="fa fa-map-marker fa-2x"></i>&nbsp;<a href="contact_office.php" style="color: white" target="_blank">Show on Maps</a>
                            </address>
						
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<h3 class="page-header" style="text-align: center">Follow</h3>
					<ul class="list-group">
						<li class="list-group-item foot-list">
							<i class="fa fa-facebook-square fa-2x"></i>&nbsp;&nbsp;<span class="field space" style="font-weight: bold"><a href="http://www.facebook.com/vsmandal.dombivli" style="color: white">Facebook</a>
						</li>
						<li class="list-group-item foot-list">
							<i class="fa fa-twitter-square fa-2x"></i>&nbsp;&nbsp;<span class="field space" style="font-weight: bold"><a href="http://www.twitter.com/vsmandal" style="color: white">Twitter</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-6">
                    <p>
                        Copyright &copy; 2014 Vivekanand Seva Mandal. All Rights Reserved.
                    </p> 
                </div>
                <div class="col-md-6">
                    <p>
                        Public Trust No: F/4661/Thane Registration No: MAH/364/95/THANE
                    </p>
                </div>  
            </div> 
		</div>
	</div>
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
</footer>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--script for dropdown on hover/sequence of these scripts is very imp-->
<script type="text/javascript">
;(function ($, window, undefined) {
    // outside the scope of the jQuery plugin to
    // keep track of all dropdowns
    var $allDropdowns = $();

    // if instantlyCloseOthers is true, then it will instantly
    // shut other nav items when a new one is hovered over
    $.fn.dropdownHover = function (options) {
        // don't do anything if touch is supported
        // (plugin causes some issues on mobile)
        if('ontouchstart' in document) return this; // don't want to affect chaining

        // the element we really care about
        // is the dropdown-toggle's parent
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function () {
            var $this = $(this),
                $parent = $this.parent(),
                defaults = {
                    delay: 500,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                showEvent   = 'show.bs.dropdown',
                hideEvent   = 'hide.bs.dropdown',
                // shownEvent  = 'shown.bs.dropdown',
                // hiddenEvent = 'hidden.bs.dropdown',
                settings = $.extend(true, {}, defaults, options, data),
                timeout;

            $parent.hover(function (event) {
                // so a neighbor can't open the dropdown
                if(!$parent.hasClass('open') && !$this.is(event.target)) {
                    // stop this event, stop executing any code
                    // in this callback but continue to propagate
                    return true;
                }

                openDropdown(event);
            }, function () {
                timeout = window.setTimeout(function () {
                    $parent.removeClass('open');
                    $this.trigger(hideEvent);
                }, settings.delay);
            });

            // this helps with button groups!
            $this.hover(function (event) {
                // this helps prevent a double event from firing.
                // see https://github.com/CWSpear/bootstrap-hover-dropdown/issues/55
                if(!$parent.hasClass('open') && !$parent.is(event.target)) {
                    // stop this event, stop executing any code
                    // in this callback but continue to propagate
                    return true;
                }

                openDropdown(event);
            });

            // handle submenus
            $parent.find('.dropdown-submenu').each(function (){
                var $this = $(this);
                var subTimeout;
                $this.hover(function () {
                    window.clearTimeout(subTimeout);
                    $this.children('.dropdown-menu').show();
                    // always close submenu siblings instantly
                    $this.siblings().children('.dropdown-menu').hide();
                }, function () {
                    var $submenu = $this.children('.dropdown-menu');
                    subTimeout = window.setTimeout(function () {
                        $submenu.hide();
                    }, settings.delay);
                });
            });

            function openDropdown(event) {
                $allDropdowns.find(':focus').blur();

                if(settings.instantlyCloseOthers === true)
                    $allDropdowns.removeClass('open');

                window.clearTimeout(timeout);
                $parent.addClass('open');
                $this.trigger(showEvent);
            }
        });
    };

    $(document).ready(function () {
        var offset = 100;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, 1000);
        return false;
    });
        // apply dropdownHover to all elements with the data-hover="dropdown" attribute
        $('[data-hover="dropdown"]').dropdownHover();
    });
})(jQuery, this);
</script>
<!--script for dropdown on hover/sequence of these scripts is very imp-->
</body>
</html>