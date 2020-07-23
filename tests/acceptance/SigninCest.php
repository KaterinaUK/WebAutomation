<?php

class SigninCest
{
    function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function signInSuccessfully(AcceptanceTester $I)
    {
        $I->amOnPage('https://katerina-techinterview.otgs.work/wp-admin');
        $I->makeScreenshot();
        $I->fillField('//*[@id="user_login"]','katerinaadmin');
        $I->makeScreenshot();
        $I->fillField('//*[@id="user_pass"]','Z^Mt.fVQT~oB');
        $I->makeScreenshot();
        $I->click('//*[@id="wp-submit"]');
        $I->see('Welcome to WordPress!');
        $I->makeScreenshot();
    }
}
