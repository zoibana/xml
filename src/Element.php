<?php

namespace zoibana\Xml;

use SimpleXMLElement;

class Element extends SimpleXMLElement
{
	public function column(string $name): array
	{
		$out = [];
		foreach ($this as $element) {
			$out[] = $element->{$name};
		}
		return $out;
	}

	public function first(): Element
	{
		return $this[0];
	}

	public function last(): Element
	{
		return $this[$this->count() - 1];
	}

	public function eq(int $index): Element
	{
		return $this[$index];
	}

	public function attr(string $name, $default = null)
	{
		return $this[$name] ?? $default;
	}

	public function attrColumn(string $name): array
	{
		$out = [];
		foreach ($this as $element) {
			$out[] = $element[$name];
		}
		return $out;
	}
}