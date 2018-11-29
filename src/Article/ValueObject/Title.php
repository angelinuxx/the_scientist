<?php

namespace LaravelDay\Article\ValueObject\Title;

use LaravelDay\Article\ValueObject\TitleTooShort;

class Title {

	/** @var string */
	private $title;

	/**
	 * Title constructor.
	 *
	 * @param string $title
	 *
	 * @throws TitleTooShort
	 */
	public function __construct(string $title) {

		if (strlen( $title ) < 10) {
			throw new TitleTooShort('Title too short');
		}
		$this->title = $title;
	}

	public function isEqual(Title $title) {
		return (string)$title === $this->__toString();
	}

	public function __toString() {

		return $this->title;
	}
}