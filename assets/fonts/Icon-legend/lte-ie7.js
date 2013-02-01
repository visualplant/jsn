/* Use this script if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-microphone' : '&#x28;',
			'icon-book' : '&#x29;',
			'icon-paper' : '&#x2a;',
			'icon-copy' : '&#x2c;',
			'icon-tag' : '&#x2d;',
			'icon-cart' : '&#x2e;',
			'icon-support' : '&#x2f;',
			'icon-phone' : '&#x30;',
			'icon-mail' : '&#x31;',
			'icon-location' : '&#x32;',
			'icon-compass' : '&#x33;',
			'icon-database' : '&#x3b;',
			'icon-undo' : '&#x3c;',
			'icon-redo' : '&#x3d;',
			'icon-forward' : '&#x3e;',
			'icon-reply' : '&#x3f;',
			'icon-reply-2' : '&#x40;',
			'icon-user' : '&#x47;',
			'icon-user-2' : '&#x48;',
			'icon-search' : '&#x4b;',
			'icon-zoom-in' : '&#x4c;',
			'icon-search-2' : '&#x4d;',
			'icon-zoom-out' : '&#x4e;',
			'icon-dashboard' : '&#x54;',
			'icon-cube' : '&#x58;',
			'icon-power' : '&#x5c;',
			'icon-clipboard' : '&#x5d;',
			'icon-cloud' : '&#x5e;',
			'icon-tree-view' : '&#x5f;',
			'icon-cancel' : '&#x60;',
			'icon-cancel-2' : '&#x70;',
			'icon-cancel-3' : '&#x71;',
			'icon-checkmark' : '&#x72;',
			'icon-share' : '&#x77;',
			'icon-twitter' : '&#x79;',
			'icon-twitter-2' : '&#x7b;',
			'icon-feed' : '&#x7c;',
			'icon-facebook' : '&#xe000;',
			'icon-github' : '&#xe006;',
			'icon-file-pdf' : '&#xe011;',
			'icon-compass-2' : '&#xe012;',
			'icon-check-alt' : '&#xe013;',
			'icon-share-2' : '&#xe016;',
			'icon-compass-3' : '&#xe01c;',
			'icon-book-alt2' : '&#xe01d;',
			'icon-price' : '&#xe02b;',
			'icon-info-circle' : '&#xe02d;',
			'icon-document' : '&#xe02e;',
			'icon-google-circles' : '&#xe02f;',
			'icon-popup' : '&#xe031;',
			'icon-suitcase' : '&#xe036;',
			'icon-suitcase-2' : '&#xe038;',
			'icon-mobile' : '&#xe03a;',
			'icon-share-3' : '&#xe03f;',
			'icon-compass-4' : '&#xe040;',
			'icon-soundcloud' : '&#xe041;',
			'icon-mail-2' : '&#x7a;',
			'icon-safari' : '&#xe045;',
			'icon-lines' : '&#xe046;',
			'icon-linkedin' : '&#xe048;',
			'icon-tumblr' : '&#xe047;',
			'icon-vimeo' : '&#xe04a;',
			'icon-movie' : '&#xe04b;',
			'icon-camera' : '&#xe04c;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; i < els.length; i += 1) {
		el = els[i];
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};