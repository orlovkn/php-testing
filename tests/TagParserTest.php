<?php

namespace Tests;

use App\TagParser;
use PHPUnit\Framework\TestCase;

class TagParserTest extends TestCase
{
    protected TagParser $parser;

    public function setUp(): void
    {
        parent::setUp();

        $this->parser = new TagParser;
    }

    /** @test */
    public function it_parses_a_comma_separated_list_of_tags(): void
    {
        $result = $this->parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function commas_are_optionsl(): void
    {
        $result = $this->parser->parse('personal,money,family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_parses_a_pipe_separated_list_of_tags(): void
    {
        $result = $this->parser->parse('personal |money| family');
        $expected = ['personal', 'money', 'family'];

        $this->assertSame($expected, $result);
    }
}