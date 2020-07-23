<?php

class ModeratorCest
{

    public function login(AcceptanceTester $I)
    {
        $I->amOnPage('https://katerina-techinterview.otgs.work/wp-admin');
        $I->makeScreenshot();
        $I->fillField('//*[@id="user_login"]', 'katerinaadmin');
        $I->fillField('//*[@id="user_pass"]', 'Z^Mt.fVQT~oB');
        $I->click('//*[@id="wp-submit"]');
    }

    /**
     * @after login
     */
    public function CreateanewPage(AcceptanceTester $I)
    {
        $I->see('New', '#wp-admin-bar-new-page > a');
        $I->click('//*[@id="wp-admin-bar-new-content"]/a/span[1]');

    }
}