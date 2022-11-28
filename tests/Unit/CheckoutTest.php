<?php

namespace Tests\Unit;

use App\Services\CheckoutService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CheckoutTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('db:seed');
    }
    /**
     * Example scan
     *
     * @return void
     */
    public function test_checkout1()
    {
        $pricing_rules = [
            'FR1' => ['get_one_free', null, null],
            'SR1' => ['bulk_discount', 3, 4.50]
        ];
        $co = new CheckoutService($pricing_rules);
        $co->scan('FR1');
        $co->scan('SR1');
        $co->scan('FR1');
        $co->scan('FR1');
        $co->scan('CF1');

        self::assertEquals(22.45, $co->getTotal());
    }

    public function test_checkout2()
    {
        $pricing_rules = [
            'FR1' => ['get_one_free', null, null],
            'SR1' => ['bulk_discount', 3, 4.50]
        ];
        $co = new CheckoutService($pricing_rules);
        $co->scan('FR1');
        $co->scan('FR1');
        self::assertEquals(3.11, $co->getTotal());
    }

    public function test_checkout3()
    {
        $pricing_rules = [
            'FR1' => ['get_one_free', null, null],
            'SR1' => ['bulk_discount', 3, 4.50]
        ];
        $co = new CheckoutService($pricing_rules);
        $co->scan('SR1');
        $co->scan('SR1');
        $co->scan('FR1');
        $co->scan('SR1');
        self::assertEquals(16.61, $co->getTotal());
    }
}
