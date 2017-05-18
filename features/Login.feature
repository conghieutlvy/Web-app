Feature: Login_page
	I am on home_page
	as a Admin
	I can login
	
	Scenario: Login
		Given I am on the homepage
		When I follow "Đăng nhập"
		Then the url should match "/login"
		And I should see "Login"