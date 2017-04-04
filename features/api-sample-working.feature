Feature: Basic api strcuct
  If access to api
  I get the answer in json format

  Scenario: accessing api/v1.0/sample
    When I access api\/v1.0/samplem
    Then I receive proper data in json format