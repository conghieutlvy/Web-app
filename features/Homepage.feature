Feature: Home_page
	I am on the home_page
	as a user
	I can see home_page and do something
	
	Scenario: View "thi" on home_page
		Given I am on "http://thithulaixe.esy.es/"
		Then I should see "thi"
		
	Scenario: View home_page
		Given I am on "http://thithulaixe.esy.es/"
		Then I should see "Đề ngẫu nhiên"
		And I should see "Thi theo bộ đề"

	Scenario: Go to meo_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "meo"
		Then I should be on "http://thithulaixe.esy.es/meo"

	Scenario: Go to doExam_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "dengaunhien"
		Then I should be on "http://thithulaixe.esy.es/doExam"

	Scenario: Go to chooseexam_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "bode"
		Then I should be on "http://thithulaixe.esy.es/chooseexam"

	Scenario: Go to meo_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "cauhoi"
		Then I should be on "http://thithulaixe.esy.es/cauhoi"

	Scenario: Go to meo_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "bienbao"
		Then I should be on "http://thithulaixe.esy.es/bienbao"

	Scenario: Go to meo_page
		Given I am on "http://thithulaixe.esy.es/"
		When I follow "dangthi"
		Then I should be on "http://thithulaixe.esy.es/dangthi"	