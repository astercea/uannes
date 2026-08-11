function getURLVar(key) {
	var value = [];

	var query = String(document.location).split('?');

	if (query[1]) {
		var part = query[1].split('&');

		for (i = 0; i < part.length; i++) {
			var data = part[i].split('=');

			if (data[0] && data[1]) {
				value[data[0]] = data[1];
			}
		}

		if (value[key]) {
			return value[key];
		} else {
			return '';
		}
	}
}

$(document).ready(function() {
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();

		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

	// Currency
	$('#form-currency .currency-select').on('click', function(e) {
		e.preventDefault();

		$('#form-currency input[name=\'code\']').val($(this).attr('name'));

		$('#form-currency').submit();
	});

	// Language
	$('#form-language .language-select').on('click', function(e) {
		e.preventDefault();

		$('#form-language input[name=\'code\']').val($(this).attr('name'));

		$('#form-language').submit();
	});

	/* Search */
	$('#search input[name=\'search\']').closest('#search').find('button').on('click', function() {
		var url = $('base').attr('href') + 'index.php?route=product/search';

		var value = $('#search input[name=\'search\']').val();

		if (value) {
			url += '&search=' + encodeURIComponent(value);
		}

		location = url;
	});

	$('#search input[name=\'search\']').on('keydown', function(e) {
		if (e.keyCode == 13) {
			$('#search input[name=\'search\']').closest('#search').find('button').trigger('click');
		}
	});

	// Menu
	$('#menu .dropdown-menu').each(function() {
		var menu = $('#menu').offset();
		var dropdown = $(this).parent().offset();

		var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());

		if (i > 0) {
			$(this).css('margin-left', '-' + (i + 10) + 'px');
		}
	});

	// Product List
	$('#list-view').click(function() {
		$('#content .product-grid > .clearfix').remove();

		$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
		$('#grid-view').removeClass('active');
		$('#list-view').addClass('active');

		localStorage.setItem('display', 'list');
	});

	// Product Grid
	$('#grid-view').click(function() {
		// What a shame bootstrap does not take into account dynamically loaded columns
		var cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols == 1) {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
		} else {
			$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}

		$('#list-view').removeClass('active');
		$('#grid-view').addClass('active');

		localStorage.setItem('display', 'grid');
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
		$('#list-view').addClass('active');
	} else {
		$('#grid-view').trigger('click');
		$('#grid-view').addClass('active');
	}

	// Checkout
	$(document).on('keydown', '#collapse-checkout-option input[name=\'email\'], #collapse-checkout-option input[name=\'password\']', function(e) {
		if (e.keyCode == 13) {
			$('#collapse-checkout-option #button-login').trigger('click');
		}
	});

	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});

// Bildirimi header altına hizala (sabit rem yerine gerçek ölçü)
window.uannesPositionCartNotice = function($notice) {
	var gap = 24;
	var topPx = 100;
	var header = document.getElementById('header-area');

	if (header) {
		topPx = Math.round(header.getBoundingClientRect().bottom) + gap;
	}

	if ($notice && $notice.length) {
		$notice[0].style.setProperty('top', topPx + 'px', 'important');
	}
};

// JSON sepet cevabından bildirim göster (notice öncelikli)
window.uannesShowCartResponse = function(json) {
	if (!json || typeof window.uannesCartNotice !== 'function') {
		return false;
	}

	if (json.notice && json.notice.message) {
		window.uannesCartNotice(json.notice);
		return true;
	}

	if (json.error && json.error.stock) {
		window.uannesCartNotice({
			type: 'error',
			title: 'Stok yetersiz',
			message: json.error.stock
		});
		return true;
	}

	if (json.success) {
		window.uannesCartNotice(json.success, 'success');
		return true;
	}

	return false;
};

// Üst bildirim — sepet ekleme / silme (type: 'success' | 'error' veya { type, title, message })
window.uannesCartNotice = function(message, type) {
	var titleOverride = '';

	if (message && typeof message === 'object') {
		type = message.type || type;
		titleOverride = message.title || '';
		message = message.message || '';
	}

	if (!message) {
		return;
	}

	$('.cart-notice').remove();

	var bodyHtml = String(message).replace(/^Başarılı:\s*/i, '').trim();
	var $probe = $('<div>').html(bodyHtml);
	var plain = $probe.text().replace(/\s+/g, ' ').trim();
	var isError = type === 'error' || /stok\s+yetersiz|yeterli\s+stok|müsait\s+stok|not\s+enough\s+stock|insufficient\s+stock/i.test(plain);
	var title = 'İşlem başarılı';
	var iconClass = 'fa-check';
	var noticeRole = 'status';

	if (titleOverride) {
		title = titleOverride;
	} else if (isError) {
		noticeRole = 'alert';
		iconClass = 'fa-exclamation';
		title = /stok\s+yetersiz/i.test(plain) ? 'Stok yetersiz' : 'İşlem yapılamadı';
	} else if (/sepete\s+eklendi|sepetinize\s+eklendi|added to cart/i.test(titleOverride + plain)) {
		title = 'Sepete eklendi';
	} else if (/adet\s+artırıldı|quantity\s+increased/i.test(titleOverride + plain)) {
		title = 'Adet artırıldı';
	} else if (/adet\s+azaltıldı|quantity\s+decreased/i.test(titleOverride + plain)) {
		title = 'Adet azaltıldı';
	} else if (/sepetten\s+kaldırıldı|removed from cart/i.test(titleOverride + plain)) {
		title = 'Sepetten kaldırıldı';
	} else if (/sepetinize\s+eklendi|sepete\s+eklendi/i.test(plain)) {
		title = 'Sepete eklendi';
	} else if (/→/.test(plain) && /\+\d+/.test(plain)) {
		title = 'Adet artırıldı';
	} else if (/→/.test(plain) && /−|−|-\d+/.test(plain)) {
		title = 'Adet azaltıldı';
	} else if (/daha eklendi|çıkarıldı|kaldı/i.test(plain)) {
		if (/çıkarıldı|kaldı/i.test(plain)) {
			title = 'Adet azaltıldı';
		} else if (/daha eklendi/i.test(plain)) {
			title = 'Adet artırıldı';
		}
	} else if (/güncellendi/i.test(plain)) {
		title = 'Sepet güncellendi';
	} else if (/silindi|kaldırıldı/i.test(plain)) {
		title = 'Sepetten kaldırıldı';
	}

	if (isError) {
		noticeRole = 'alert';
		iconClass = 'fa-exclamation';
	}

	var noticeClass = 'cart-notice' + (isError ? ' cart-notice--error' : ' cart-notice--success');

	var $notice = $(
		'<div class="' + noticeClass + '" role="' + noticeRole + '">' +
			'<div class="cart-notice__badge" aria-hidden="true"><i class="fa ' + iconClass + '"></i></div>' +
			'<div class="cart-notice__content">' +
				'<p class="cart-notice__title"></p>' +
				'<div class="cart-notice__text"></div>' +
			'</div>' +
			'<button type="button" class="cart-notice__close" aria-label="Kapat" aria-hidden="true">&times;</button>' +
		'</div>'
	);

	$notice.find('.cart-notice__title').text(title);
	$notice.find('.cart-notice__text').html(bodyHtml || plain);
	$('body').append($notice);

	window.uannesPositionCartNotice($notice);

	var onResize = function() {
		window.uannesPositionCartNotice($notice);
	};
	$(window).on('resize.uannesCartNotice', onResize);

	requestAnimationFrame(function() {
		window.uannesPositionCartNotice($notice);
		$notice.addClass('is-visible');
	});

	var hideNotice = function() {
		$(window).off('resize.uannesCartNotice');
		$notice.removeClass('is-visible');
		setTimeout(function() {
			$notice.remove();
		}, 320);
	};

	var autoHide = setTimeout(hideNotice, 5200);
	$notice.find('.cart-notice__close').on('click', function() {
		clearTimeout(autoHide);
		hideNotice();
	});
};

// Cart add remove functions
var cart = {
	'add': function(product_id, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/add',
			type: 'post',
			data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				$('.alert-dismissible, .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				window.uannesShowCartResponse(json);

				if (json['success']) {
					// Need to set timeout otherwise it wont update the total
					setTimeout(function () {
						var qtyMatch = json['total'] && String(json['total']).match(/(\d+)/);
						if ($('#cart #cart-total').length && qtyMatch) {
							$('#cart #cart-total').text(qtyMatch[1]);
						}
					}, 100);

					if ($('#cart > ul').length) {
						$('#cart > ul').load('index.php?route=common/cart/info ul li');
					}

					$(document).trigger('uannes:cartUpdated');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'update': function(key, quantity) {
		$.ajax({
			url: 'index.php?route=checkout/cart/edit',
			type: 'post',
			data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				if (json['error'] && json['error']['stock']) {
					window.uannesShowCartResponse(json);
					$(document).trigger('uannes:cartUpdated');
					return;
				}

				window.uannesShowCartResponse(json);

				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					var qtyMatch = json['total'] && String(json['total']).match(/(\d+)/);
					if ($('#cart #cart-total').length && qtyMatch) {
						$('#cart #cart-total').text(qtyMatch[1]);
					}
					$(document).trigger('uannes:cartUpdated');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else if ($('#cart > ul').length) {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				window.uannesShowCartResponse(json);

				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					var qtyMatch = json['total'] && String(json['total']).match(/(\d+)/);
					if ($('#cart #cart-total').length && qtyMatch) {
						$('#cart #cart-total').text(qtyMatch[1]);
					}
					$(document).trigger('uannes:cartUpdated');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else if ($('#cart > ul').length) {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var voucher = {
	'add': function() {

	},
	'remove': function(key) {
		$.ajax({
			url: 'index.php?route=checkout/cart/remove',
			type: 'post',
			data: 'key=' + key,
			dataType: 'json',
			beforeSend: function() {
				$('#cart > button').button('loading');
			},
			complete: function() {
				$('#cart > button').button('reset');
			},
			success: function(json) {
				if (json['success'] && typeof window.uannesCartNotice === 'function') {
					window.uannesCartNotice(json['success']);
				}

				// Need to set timeout otherwise it wont update the total
				setTimeout(function () {
					var qtyMatch = json['total'] && String(json['total']).match(/(\d+)/);
					if ($('#cart #cart-total').length && qtyMatch) {
						$('#cart #cart-total').text(qtyMatch[1]);
					}
					$(document).trigger('uannes:cartUpdated');
				}, 100);

				if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
					location = 'index.php?route=checkout/cart';
				} else if ($('#cart > ul').length) {
					$('#cart > ul').load('index.php?route=common/cart/info ul li');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
}

var wishlist = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=account/wishlist/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['redirect']) {
					location = json['redirect'];
				}

				if (json['success']) {
					$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}

				$('#wishlist-total span').html(json['total']);
				$('#wishlist-total').attr('title', json['total']);

				$('html, body').animate({ scrollTop: 0 }, 'slow');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

var compare = {
	'add': function(product_id) {
		$.ajax({
			url: 'index.php?route=product/compare/add',
			type: 'post',
			data: 'product_id=' + product_id,
			dataType: 'json',
			success: function(json) {
				$('.alert-dismissible').remove();

				if (json['success']) {
					$('#content').parent().before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

					$('#compare-total').html(json['total']);

					$('html, body').animate({ scrollTop: 0 }, 'slow');
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	},
	'remove': function() {

	}
}

/* Agree to Terms */
$(document).delegate('.agree', 'click', function(e) {
	e.preventDefault();

	$('#modal-agree').remove();

	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		type: 'get',
		dataType: 'html',
		success: function(data) {
			html  = '<div id="modal-agree" class="modal">';
			html += '  <div class="modal-dialog modal-lg">';
			html += '    <div class="modal-content">';
			html += '      <div class="modal-header">';
			html += '        <button type="button" class="close modal-agree-close" data-dismiss="modal" aria-label="Kapat"><span aria-hidden="true">&times;</span></button>';
			html += '        <h4 class="modal-title">' + $(element).text() + '</h4>';
			html += '      </div>';
			html += '      <div class="modal-body">' + data + '</div>';
			html += '    </div>';
			html += '  </div>';
			html += '</div>';

			$('body').append(html);

			$('#modal-agree').modal('show');

			// Scroll olayını ajax yüklendiğinde bağla
			$('#modal-agree .modal-body').on('scroll', function() {
				if ($(this).scrollTop() > 10) {
					$('#modal-agree .modal-header').addClass('is-scrolled');
				} else {
					$('#modal-agree .modal-header').removeClass('is-scrolled');
				}
			});
		}
	});
});

// Autocomplete */
(function($) {
	$.fn.autocomplete = function(option) {
		return this.each(function() {
			this.timer = null;
			this.items = new Array();

			$.extend(this, option);

			$(this).attr('autocomplete', 'off');

			// Focus
			$(this).on('focus', function() {
				this.request();
			});

			// Blur
			$(this).on('blur', function() {
				setTimeout(function(object) {
					object.hide();
				}, 200, this);
			});

			// Keydown
			$(this).on('keydown', function(event) {
				switch(event.keyCode) {
					case 27: // escape
						this.hide();
						break;
					default:
						this.request();
						break;
				}
			});

			// Click
			this.click = function(event) {
				event.preventDefault();

				value = $(event.target).parent().attr('data-value');

				if (value && this.items[value]) {
					this.select(this.items[value]);
				}
			}

			// Show
			this.show = function() {
				var pos = $(this).position();

				$(this).siblings('ul.dropdown-menu').css({
					top: pos.top + $(this).outerHeight(),
					left: pos.left
				});

				$(this).siblings('ul.dropdown-menu').show();
			}

			// Hide
			this.hide = function() {
				$(this).siblings('ul.dropdown-menu').hide();
			}

			// Request
			this.request = function() {
				clearTimeout(this.timer);

				this.timer = setTimeout(function(object) {
					object.source($(object).val(), $.proxy(object.response, object));
				}, 200, this);
			}

			// Response
			this.response = function(json) {
				html = '';

				if (json.length) {
					for (i = 0; i < json.length; i++) {
						this.items[json[i]['value']] = json[i];
					}

					for (i = 0; i < json.length; i++) {
						if (!json[i]['category']) {
							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
						}
					}

					// Get all the ones with a categories
					var category = new Array();

					for (i = 0; i < json.length; i++) {
						if (json[i]['category']) {
							if (!category[json[i]['category']]) {
								category[json[i]['category']] = new Array();
								category[json[i]['category']]['name'] = json[i]['category'];
								category[json[i]['category']]['item'] = new Array();
							}

							category[json[i]['category']]['item'].push(json[i]);
						}
					}

					for (i in category) {
						html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';

						for (j = 0; j < category[i]['item'].length; j++) {
							html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
						}
					}
				}

				if (html) {
					this.show();
				} else {
					this.hide();
				}

				$(this).siblings('ul.dropdown-menu').html(html);
			}

			$(this).after('<ul class="dropdown-menu"></ul>');
			$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));

		});
	}
})(window.jQuery);
