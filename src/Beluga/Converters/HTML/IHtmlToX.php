<?php
/**
 * In this file the interface {@see \Beluga\Converters\HTML\IHtmlToX} is defined.
 *
 * @author         SagittariusX <unikado+sag@gmail.com>
 * @copyright  (c) 2016, SagittariusX
 * @package        Beluga
 * @since          2016-08-10
 * @subpackage     Converters/HTML
 * @version        0.1.1
 */


declare( strict_types = 1 );


namespace Beluga\Converters\HTML;


/**
 * Each HTML to ?? Converter must implement this interface
 *
 * @since v0.1
 */
interface IHtmlToX
{

   /**
    * Loads source HTML into memory, either from $source string or a file.
    *
    * @param string  $source   HTML content (or file path, if $fromFile is TRUE)
    * @param boolean $fromFile Indicates $source is a file path, to pull content from
    */
   public function setHTML( string $source, bool $fromFile = false );

   /**
    * Returns the result, converted from HTML.
    *
    * @return string
    */
   public function getResult() : string;

   /**
    * Prints the result, converted from HTML, to STDOUT.
    */
   public function printResult();

   /**
    * Sets the allowed HTML elements to pass through to the resulting text.
    *
    * Elements should be in the form "&lt;p&gt;&lt;spanp&gt;", or comma separated names "p, span" or a array
    * like array('&lt;p&gt;', '&lt;span&gt;') or array( 'p', 'span' ), with no corresponding closing tag.
    *
    * @param string|array $allowedElements
    */
   public function setAllowedElements( $allowedElements = [] );

}


