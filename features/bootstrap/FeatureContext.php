<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $driver;
    private $session;
    private $basr_url;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->driver = new \Behat\Mink\Driver\GoutteDriver();
        $this->session = new \Behat\Mink\Session($this->driver);
        $this->session->start();
        $this->base_url = "http://192.168.1.38/clubdev";
    }

    /**
     * @When /^I access api\\\/v1\.0\/samplem$/
     */
    public function iAccessApiV0Samplem()
    {
        $this->session->visit($this->base_url . "/api/v1.0/sample");
        $page = $this->session->getPage();
        $text = $page->getContent();
        if (strcmp($text, "{\"Usuarios\":[{\"nombre\":\"V\u00edctor\",\"Apellido\":\"Robles\"},{\"nombre\":\"Antonio\",\"Apellido\":\"Martinez\"}]}"))
            throw new Exception('The text differs from expected');
//        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^I receive proper data in json format$/
     */
    public function iReceiveProperDataInJsonFormat()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
