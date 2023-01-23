<?php

namespace App\Support;
//use Source\Core\Session;

/**
 * FSPHP | Class Message
 *
 * @author Robson V. Leite <cursos@upinside.com.br>
 * @package Source\Core
 */
class Message
{
    /** @var string */
    private $text;

    /** @var string */
    private $type;

    /** @var string */
    private $title;

    /** @var string */
    private $before;

    /** @var string */
    private $after;

    /**
     * @return string
     */
//    public function __toString()
//    {
//        return $this->render();
//    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->before . $this->text . $this->after;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return  $this->title;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $text
     * @return Message
     */
    public function before(string $text): Message
    {
        $this->before = $text;
        return $this;
    }

    /**
     * @param string $text
     * @return Message
     */
    public function after(string $text): Message
    {
        $this->after = $text;
        return $this;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function info(string $title, string $message): Message
    {
        $this->type = "info";
        $this->text = $this->filter($message);
        $this->title = $this->filter($title);


        return $this;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function success(string $title, string $message): Message
    {
        $this->type = "success";
        $this->title = $this->filter($title);
        $this->text = $this->filter($message);
        return $this;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function warning(string $title, string $message): Message
    {
        $this->type = "warning";
        $this->title = $this->filter($title);
        $this->text = $this->filter($message);
        return $this;
    }

    /**
     * @param string $message
     * @return Message
     */
    public function error(string $title, string $message): Message
    {
        $this->type = "error";
        $this->title = $this->filter($title);
        $this->text = $this->filter($message);
        return $this;
    }

//    /**
//     * @return string
//     */
//    public function render(): string
//    {
//        //"<div class='message {$this->getType()}'>{$this->getText()}</div>";
//        return $this->getText();
//    }
    public function render(): array {

        return [
            'title'=> $this->getTitle(),
            'type'=> $this->getType(),
            'message'=> $this->getText()
        ];

    }

    /**
     * @return string
     */
//    public function json():string
//    {
//        return json_encode(
//            [
//                "type" => $this->getType(),
//                "title" => $this->getTitle(),
//                "message" => $this->getText()
//            ]);
//    }

    /**
     * Set flash Session Key
     */
//    public function flash(): void
//    {
//        (new Session())->set("flash", $this);
//    }

    /**
     * @param string $message
     * @return string
     */
    private function filter(string $message): string
    {
        return filter_var($message, FILTER_SANITIZE_STRIPPED);
    }
}
