Feature: Home_page
	I am on the home_page
	as a user
	I can see home_page and do something
	
	Scenario: View home_page
		Given I am on the homepage
		Then I should see "Đề ngẫu nhiên"
		And I should see "Thi theo bộ đề"

	Scenario: Go to meo_page
		Given I am on the homepage
		When I follow "meo"
		Then the url should match "/meo"

	Scenario: Go to doExam_page
		Given I am on the homepage
		When I follow "dengaunhien"
		Then the url should match "/doExam"

	Scenario: Go to chooseexam_page
		Given I am on the homepage
		When I follow "bode"
		Then the url should match "/chooseexam"

	Scenario: Go to meo_page
		Given I am on the homepage
		When I follow "cauhoi"
		Then the url should match "/cauhoi"

	Scenario: Go to meo_page
		Given I am on the homepage
		When I follow "bienbao"
		Then the url should match "/bienbao"

	Scenario: Go to meo_page
		Given I am on the homepage
		When I follow "dangthi"
		Then the url should match "/dangthi"	