<?php

namespace Tests\Unit\Helppers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
       // $email = 'i@admin.com';
       // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        $result = Email::validate('i@admin.com');        
        $this->assertTrue($result);

        $result = Email::validate('iadmin.com');        
        $this->assertFalse($result);
    }
}
