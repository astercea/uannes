(function ($) {
	function closeAnswer($item) {
		var $answer = $item.find('.faq-answer');
		$answer.css('max-height', '0');
		$answer.removeClass('open');
		$item.find('.faq-question').attr('aria-expanded', 'false');
		$item.find('.toggle-btn').removeClass('rotate');
	}

	function openAnswer($item) {
		var $answer = $item.find('.faq-answer');
		var $inner = $answer.find('.faq-answer-inner');
		var height = $inner.outerHeight(true);

		$answer.addClass('open');
		$answer.css('max-height', height + 'px');
		$item.find('.faq-question').attr('aria-expanded', 'true');
		$item.find('.toggle-btn').addClass('rotate');
	}

	function toggleItem($item) {
		var isOpen = $item.find('.faq-answer').hasClass('open');

		$item.closest('.faq-content-container').find('.faq-item').each(function () {
			closeAnswer($(this));
		});

		if (!isOpen) {
			openAnswer($item);
		}
	}

	$(document).ready(function () {
		var $container = $('#information-faq .faq-content-container');

		if (!$container.length) {
			return;
		}

		$container.on('click', '.faq-question', function (e) {
			if ($(e.target).closest('.toggle-btn').length) {
				e.preventDefault();
			}
			toggleItem($(this).closest('.faq-item'));
		});

		$container.on('keydown', '.faq-question', function (e) {
			if (e.key === 'Enter' || e.key === ' ') {
				e.preventDefault();
				toggleItem($(this).closest('.faq-item'));
			}
		});

		$(window).on('resize', function () {
			$container.find('.faq-item').each(function () {
				var $item = $(this);
				if ($item.find('.faq-answer').hasClass('open')) {
					openAnswer($item);
				}
			});
		});
	});
})(jQuery);
