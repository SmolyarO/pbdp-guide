<?php
/**
 * Ostap Smolyar 2022
 * Cheatsheet for PHP and OOP
 */


/* basics, Abstract, Interface, Static, Encapsulation, Polymorphism, extend, magic methods, serialisation*/


/**
 * Extend (расширение, наследование):
 *  Класс может наследовать методы и свойства другого класса.
 *  В дочернем классе доступны public & protected методы и свойства.
 *
 * Polymorphism (переопределение):
 *  Наследуемые методы и свойства могут быть переопределены
 * (за исключением случаев, когда метод класса объявлен как final)
 * путем объявления их с теми же именами, как и в родительском классе.
 *  Когда переопределяются методы число и типы аргументов должны оставаться такими же
 * как и были, иначе PHP вызовет ошибку уровня E_STRICT.
 *  Protected & private - не переопределяются.
 *
 * Encapsulation (сокрытие данных):
 *  Данные (состояние) объекта недоступны на прямую, для их изменения и считывания используются public методы.
 *  Protected & private методы и свойства недоступны вне класса. Private доступны только в том же классе,
 * protected могут наследоваться.
 *
 * Abstract class:
 *  Область видимости абстрактных методов должна совпадать (или быть менее строгой).
 *  Например, если абстрактный метод объявлен как protected, то реализация этого метода
 * должна быть либо protected либо public, но никак не private. Более того, сигнатуры методов должны совпадать,
 * т.е. контроль типов (type hint) и количество обязательных аргументов должно быть одинаковым.
 *
 * Interface:
 *  Все методы, определенные в интерфейсы должны быть публичными, что следует из самой природы интерфейса.
 *  Интерфейсы могут содержать константы. Константы интерфейсов работают точно так же, как и константы классов,
 * за исключением того, что они не могут быть перекрыты наследующим классом или интерфейсом.
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */
namespace Test;

/**
 * Interface I
 * @package Test
 */
interface I
{
    public function test();
}

/**
 * Class A
 * @package Test
 */
abstract class A
{
    abstract protected function test();
}

/**
 * Class Test
 * @package Test
 */
class Test implements I
{
    /**
     * Test constructor.
     *
     */
    public function test()
    {
        echo 1 . "\n";
    }
}

/**
 * Class Test2
 * @package Test
 */
class Test2 extends A
{
    public function test()
    {
        echo 2 . "\n";
    }
}

$a = new Test;
$a->test();

$b = new Test2;
$b->test();
