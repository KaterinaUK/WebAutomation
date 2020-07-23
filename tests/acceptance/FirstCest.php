<?php

class FirstCest
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('https://katerina-techinterview.otgs.work/wp-admin');
        $I->see('Username or Email Address');
    }
}
