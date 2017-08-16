<?php
/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions;

    public function wantToTest($text)
    {
        $text->text = null;
        $this->assertFalse($text->text(['username']));
    }

    public function wantTo($text)
    {
        $text->text = null;
        $this->assertFalse($text->text(['username']));
    }

    public function execute($callable)
    {
        $callable->text = null;
        $this->assertFalse($callable->text(['username']));
    }

    public function expectTo($prediction)
    {
        $prediction->text = null;
        $this->assertFalse($prediction->text(['username']));
    }

    public function expect($prediction)
    {
        $prediction->text = null;
        $this->assertFalse($prediction->text(['username']));
    }

    public function amGoingTo($argumentation)
    {
        $argumentation->text = null;
        $this->assertFalse($argumentation->text(['username']));
    }

    public function am($role)
    {
        $role->text = null;
        $this->assertFalse($role->text(['username']));
    }

    public function lookForwardTo($acheieveValue)
    {
        $acheieveValue->text = null;
        $this->assertFalse($acheieveValue->text(['username']));
    }

    public function comment($description)
    {
        $description->text = null;
        $this->assertFalse($description->text(['username']));
    }

    public function haveFriend($comment, $actorClass = NULL)
    {
        $comment->text = null;
        $this->assertFalse($comment->text(['username']));
    }
}