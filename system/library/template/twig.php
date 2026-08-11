<?php
namespace Template;
final class Twig {
	private $data = array();

	public function set($key, $value) {
		$this->data[$key] = $value;
	}

	private function createLoader($filename, $code = '') {
		$loader = new \Twig\Loader\FilesystemLoader(DIR_TEMPLATE);

		if (preg_match('#^([^/]+/template)(?:/|$)#', $filename, $match)) {
			$loader->addPath(DIR_TEMPLATE . $match[1] . '/');
		}

		if ($code) {
			$loader = new \Twig\Loader\ChainLoader(array(
				new \Twig\Loader\ArrayLoader(array($filename . '.twig' => $code)),
				$loader
			));
		}

		return $loader;
	}
	
	public function render($filename, $code = '') {
		$config = array(
			'autoescape'  => false,
			'debug'       => false,
			'auto_reload' => true,
			'cache'       => DIR_CACHE . 'template/'
		);

		try {
			if (!$code) {
				$file = DIR_TEMPLATE . $filename . '.twig';

				if (!is_file($file)) {
					throw new \Exception('Error: Could not load template ' . $file . '!');
				}
			}

			$loader = $this->createLoader($filename, $code);
			$twig = new \Twig\Environment($loader, $config);

			return $twig->render($filename . '.twig', $this->data);
		} catch (\Exception $e) {
			trigger_error('Error: Could not load template ' . $filename . '! ' . $e->getMessage());
			exit();
		}	
	}	
}
