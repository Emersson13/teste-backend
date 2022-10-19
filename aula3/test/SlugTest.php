<?php
use PHPUnit\Framework\TestCase;
Use App\Slug;

class SlugTest extends TestCase{
   
    public function test_converter(){
        $meuSlug = new Slug("  Programacao PHP  ");

        $this->assertEquals($meuSlug->converter(), "programacao-php");
    }
}