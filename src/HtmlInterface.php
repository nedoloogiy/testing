<?php
/**
 * Created by PhpStorm.
 * User: Kosoy
 * Date: 10.11.2018
 * Time: 19:41
 */

namespace nedoloogiy;


interface HtmlInterface
{

    /**
     * @return bool
     */
    public static function init() : bool;


    /**
     * поиск Html тэга
     * @param string $tagName
     * @return mixed
     */
    public static function searchTag(string $tagName);


    /**
     * заполнение свойства tagInfo
     * @param string $tagName
     * @param string $content
     * @param array $options
     * @return mixed
     */
    public static function setTagInfo(string $tagName, string $content, array $options = []):bool;


    /**
     * @param string $attribute
     * @param string $tagName
     * @return mixed
     */
    public static function searchAttr(string $attribute, string $tagName);

    public static function parseClass(array $classArray);

    public static function getTypeTag(string $tagName, bool $type = true): bool ;

    public static function parseData(array $dataAttr):string ;

    public static function makeAttribute(array $attributes, string $tagName);

    public static function makeTag(string $tagName, array $attributes = [], string $content = '', bool $close = false):string ;

    public static function beginTag(string $tagName, array $attributes = [], string $content = '', bool $close = false):string ;

    public static function endTag(string $tagName):string ;

    public static function img(string $src, string $alt, array $attrs = []);

    public static function title();

    public static function meta();

}