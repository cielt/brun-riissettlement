// 125th anniversary section script

jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut
    if ($('body.page-template-template-125th-php').length) {
			var $globalNav = $('#menu-main'),
					$donateNavItem = $('#menu-main #menu-item-464'),
					$galaNavItem = $('<li>').attr({'class': 'menu-item', 'id': 'gala-nav-item'});

					// add link to gala item
					$galaNavItem.html('<a href="/125-years">125 Years Gala</a>');
					$globalNav.append($galaNavItem);
		}
});